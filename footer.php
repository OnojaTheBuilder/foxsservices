<footer id="footer">
  <div class="container">
    <div class="footer-grid">

      <div class="footer-nav-card">
        <div class="footer-logo">
          <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
            <div style="width:32px;height:32px;background:#2563EB;border-radius:6px;display:flex;align-items:center;justify-content:center;">
              <svg viewBox="0 0 24 24" width="16" height="16"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26" fill="#fff"/></svg>
            </div>
            <span style="font-weight:700;color:#fff;font-size:0.95rem;">FOXS SERVICES</span>
          </div>
          <span>Process Equipment Company</span>
          <p>Sourcing and supplying process equipment across industries worldwide.</p>
        </div>

        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('/equipment'); ?>">Equipment</a></li>
            <li><a href="<?php echo home_url('/projects'); ?>">Projects</a></li>
            <li><a href="<?php echo home_url('/contact-us'); ?>">Contact Us</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="mailto:nicky@profoxus.com">nicky@profoxus.com</a></li>
            <li><a href="tel:9734771050">973.477.1050</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-cta-card">
        <h3>See available equipment for procurement</h3>
        <p>Browse our full catalog of process equipment across all categories, ready for immediate sourcing.</p>
        <a href="<?php echo home_url('/equipment'); ?>" class="btn btn-outline">Browse Equipment</a>
      </div>

    </div>

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Foxs Services. All rights reserved.</p>
      <p>Made by <a href="https://makeitandmarket.com" target="_blank">makeitandmarket.com</a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
