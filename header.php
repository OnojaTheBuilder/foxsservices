<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header">
  <div class="container">
    <div class="header-inner">
      <a href="<?php echo home_url('/'); ?>" class="logo">
        <div class="logo-icon">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26" fill="#fff"/>
          </svg>
        </div>
        <div class="logo-text">
          FOXS SERVICES
          <span>Process Equipment Company</span>
        </div>
      </a>

      <nav class="nav-links">
        <a href="<?php echo home_url('/'); ?>" <?php echo is_front_page() ? 'class="active"' : ''; ?>>Home</a>
        <a href="<?php echo home_url('/about'); ?>" <?php echo is_page('about') ? 'class="active"' : ''; ?>>About</a>
        <a href="<?php echo home_url('/equipment'); ?>" <?php echo is_page('equipment') ? 'class="active"' : ''; ?>>Equipment</a>
        <a href="<?php echo home_url('/projects'); ?>" <?php echo is_page('projects') ? 'class="active"' : ''; ?>>Projects</a>
        <a href="<?php echo home_url('/contact-us'); ?>" <?php echo is_page('contact-us') ? 'class="active"' : ''; ?>>Contact Us</a>
      </nav>

      <a href="tel:9734771050" class="header-phone">973.477.1050</a>

      <button class="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<nav class="mobile-menu">
  <a href="<?php echo home_url('/'); ?>">Home</a>
  <a href="<?php echo home_url('/about'); ?>">About</a>
  <a href="<?php echo home_url('/equipment'); ?>">Equipment</a>
  <a href="<?php echo home_url('/projects'); ?>">Projects</a>
  <a href="<?php echo home_url('/contact-us'); ?>">Contact Us</a>
  <a href="tel:9734771050">973.477.1050</a>
</nav>
