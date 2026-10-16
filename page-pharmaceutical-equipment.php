<?php /* Template Name: Pharmaceutical Equipment */ get_header(); ?>
<main>
  <section class="service-hero">
    <div class="service-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1400&q=80');"></div>
    <div class="container">
      <div class="service-hero-content">
        <p class="section-eyebrow">Equipment Category</p>
        <h1>Pharmaceutical Equipment</h1>
        <p>GMP-compliant reactors, dryers, filtration systems, and filling equipment for pharmaceutical and biotech manufacturing.</p>
        <a href="#inquiry" class="btn btn-primary">Request a Quote</a>
      </div>
    </div>
  </section>
  <section class="service-body">
    <div class="container">
      <div class="service-layout">
        <div class="service-main">
          <h2>About Pharmaceutical Process Equipment</h2>
          <p>Pharmaceutical manufacturing demands equipment that meets strict GMP and regulatory standards. Foxs Services has extensive experience sourcing used pharmaceutical equipment from decommissioned facilities, plant upgrades, and surplus dealers — equipment that has been verified for GMP compliance and condition.</p>
          <h2>Equipment We Source</h2>
          <ul>
            <li>Stainless steel reactors (jacketed, glass-lined)</li>
            <li>Agitated nutsche filters (ANFDs)</li>
            <li>Spray dryers and fluid bed dryers</li>
            <li>Lyophilizers (freeze dryers)</li>
            <li>Tablet presses and capsule fillers</li>
            <li>Filling and packaging lines</li>
            <li>Cleanroom HVAC and process utilities</li>
          </ul>
          <h2>Compliance and Documentation</h2>
          <p>We provide available documentation including equipment histories, calibration records, and prior use information to support your qualification process. Our team understands FDA and EMA requirements and can help ensure equipment sourced meets your facility's needs.</p>
        </div>
        <div class="service-sidebar">
          <?php echo foxs_inquiry_form('Pharmaceutical Equipment'); ?>
          <?php echo foxs_other_services('Pharmaceutical Equipment'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
