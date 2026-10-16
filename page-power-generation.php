<?php /* Template Name: Power Generation */ get_header(); ?>
<main>
  <section class="service-hero">
    <div class="service-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?w=1400&q=80');"></div>
    <div class="container">
      <div class="service-hero-content">
        <p class="section-eyebrow">Equipment Category</p>
        <h1>Power Generation</h1>
        <p>Generators, turbines, transformers, switchgear, and power distribution equipment for industrial and commercial applications.</p>
        <a href="#inquiry" class="btn btn-primary">Request a Quote</a>
      </div>
    </div>
  </section>
  <section class="service-body">
    <div class="container">
      <div class="service-layout">
        <div class="service-main">
          <h2>About Power Generation Equipment</h2>
          <p>Foxs Services sources surplus and used power generation equipment for manufacturing facilities, utilities, and infrastructure projects. We work with decommissioned power plants, industrial facilities, and equipment dealers to find what you need.</p>
          <h2>Equipment We Source</h2>
          <ul>
            <li>Diesel and gas generators (standby and prime)</li>
            <li>Gas and steam turbines</li>
            <li>Transformers (distribution and power)</li>
            <li>Switchgear and motor control centers</li>
            <li>UPS systems and battery banks</li>
            <li>Boilers and heat recovery systems</li>
            <li>Variable frequency drives (VFDs)</li>
          </ul>
          <h2>Applications</h2>
          <p>Manufacturing backup power, remote site power, cogeneration systems, peak shaving installations, and industrial power distribution upgrades.</p>
        </div>
        <div class="service-sidebar">
          <?php echo foxs_inquiry_form('Power Generation'); ?>
          <?php echo foxs_other_services('Power Generation'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
