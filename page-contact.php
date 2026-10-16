<?php /* Template Name: Contact Page */ get_header(); ?>
<main>
  <section class="contact-hero">
    <div class="container">
      <p class="section-eyebrow">Reach Out Directly</p>
      <h1>Call or email us <span class="text-blue">directly</span> for help.</h1>
    </div>
  </section>

  <section class="contact-options">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-card">
          <p class="contact-num">01</p>
          <h2>Email Support</h2>
          <p>Shoot us an email to our support team and we'll get back to you soon.</p>
          <a href="mailto:nicky@profoxus.com" class="contact-link">nicky@profoxus.com &rarr;</a>
        </div>
        <div class="contact-card">
          <p class="contact-num">02</p>
          <h2>Call Us</h2>
          <p>Reach out to us directly via phone with any questions or concerns you may have.</p>
          <a href="tel:9734771050" class="contact-link">973.477.1050 &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-form-section">
    <div class="container">
      <div class="form-wrapper">
        <div class="form-header">
          <p class="section-eyebrow">Send a Message</p>
          <h2>Get in <span class="text-blue">touch</span></h2>
          <p class="form-subtext">Fill out the form below and we'll get back to you as soon as possible.</p>
        </div>
        <form id="contactForm" novalidate>
          <?php wp_nonce_field('foxs_contact_nonce', 'nonce'); ?>
          <div class="form-row">
            <div class="form-group"><label>Full Name *</label><input type="text" name="contact_name" placeholder="Your full name" required></div>
            <div class="form-group"><label>Email Address *</label><input type="email" name="contact_email" placeholder="your@email.com" required></div>
          </div>
          <div class="form-row">
            <div class="form-group"><label>Phone Number</label><input type="tel" name="contact_phone" placeholder="+1 (555) 000-0000"></div>
            <div class="form-group"><label>Company</label><input type="text" name="contact_company" placeholder="Your company name"></div>
          </div>
          <div class="form-group"><label>Subject *</label><input type="text" name="contact_subject" placeholder="How can we help?" required></div>
          <div class="form-group"><label>Message *</label><textarea name="contact_message" rows="6" placeholder="Tell us about your project or inquiry..." required></textarea></div>
          <div class="form-submit">
            <button type="submit" class="btn btn-primary">Send Message</button>
            <p class="form-status" id="formStatus"></p>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
