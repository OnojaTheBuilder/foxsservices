<?php
/**
 * Foxs Services Theme Functions
 */

function foxs_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);
    register_nav_menus(['primary' => 'Primary Menu']);
}
add_action('after_setup_theme', 'foxs_theme_setup');

function foxs_enqueue_assets() {
    wp_enqueue_style('foxs-main', get_template_directory_uri() . '/assets/css/main.css', [], '2.1.0');
    wp_enqueue_script('foxs-main', get_template_directory_uri() . '/assets/js/main.js', [], '2.1.0', true);
    wp_localize_script('foxs-main', 'foxsAjax', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('foxs_contact_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'foxs_enqueue_assets');

// Force homepage to use theme index.php
add_filter('template_include', function($template) {
    if (is_front_page()) {
        return get_template_directory() . '/index.php';
    }
    return $template;
});

// Contact form handler
function foxs_handle_contact() {
    check_ajax_referer('foxs_contact_nonce', 'nonce');
    $name    = sanitize_text_field($_POST['contact_name'] ?? '');
    $email   = sanitize_email($_POST['contact_email'] ?? '');
    $phone   = sanitize_text_field($_POST['contact_phone'] ?? '');
    $company = sanitize_text_field($_POST['contact_company'] ?? '');
    $subject = sanitize_text_field($_POST['contact_subject'] ?? '');
    $message = sanitize_textarea_field($_POST['contact_message'] ?? '');

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        wp_send_json_error(['message' => 'Please fill in all required fields.']);
    }
    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Please enter a valid email address.']);
    }

    $to      = 'nicky@profoxus.com';
    $headers = ['Content-Type: text/html; charset=UTF-8', "Reply-To: {$name} <{$email}>"];
    $subj    = "Foxs Services Inquiry: {$subject}";
    $body    = "<h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Company:</strong> {$company}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <hr><p><strong>Message:</strong></p><p>" . nl2br($message) . "</p>";

    $sent = wp_mail($to, $subj, $body, $headers);
    if ($sent) {
        wp_send_json_success(['message' => "Thank you! Your message has been sent. We'll be in touch shortly."]);
    } else {
        wp_send_json_error(['message' => 'Sorry, there was an error. Please call us directly at 973.477.1050']);
    }
}
add_action('wp_ajax_foxs_contact', 'foxs_handle_contact');
add_action('wp_ajax_nopriv_foxs_contact', 'foxs_handle_contact');

// Inquiry form handler (service pages)
function foxs_handle_inquiry() {
    check_ajax_referer('foxs_contact_nonce', 'nonce');
    $name    = sanitize_text_field($_POST['inquiry_name'] ?? '');
    $email   = sanitize_email($_POST['inquiry_email'] ?? '');
    $phone   = sanitize_text_field($_POST['inquiry_phone'] ?? '');
    $company = sanitize_text_field($_POST['inquiry_company'] ?? '');
    $service = sanitize_text_field($_POST['inquiry_service'] ?? '');
    $message = sanitize_textarea_field($_POST['inquiry_message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(['message' => 'Please fill in all required fields.']);
    }

    $to      = 'nicky@profoxus.com';
    $headers = ['Content-Type: text/html; charset=UTF-8', "Reply-To: {$name} <{$email}>"];
    $subj    = "Equipment Inquiry: {$service}";
    $body    = "<h2>New Equipment Inquiry</h2>
        <p><strong>Service Interest:</strong> {$service}</p>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Company:</strong> {$company}</p>
        <hr><p><strong>Message:</strong></p><p>" . nl2br($message) . "</p>";

    $sent = wp_mail($to, $subj, $body, $headers);
    if ($sent) {
        wp_send_json_success(['message' => "Thank you! Your inquiry has been received. We'll be in touch shortly."]);
    } else {
        wp_send_json_error(['message' => 'Sorry, there was an error. Please email nicky@profoxus.com directly.']);
    }
}
add_action('wp_ajax_foxs_inquiry', 'foxs_handle_inquiry');
add_action('wp_ajax_nopriv_foxs_inquiry', 'foxs_handle_inquiry');

require_once get_template_directory() . '/inc/service-helpers.php';
