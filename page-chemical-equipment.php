<?php /* Template Name: Chemical Equipment */ get_header(); ?>
<main>
  <section class="service-hero">
    <div class="service-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1563514227147-6d2ff665a6a0?w=1400&q=80');"></div>
    <div class="container">
      <div class="service-hero-content">
        <p class="section-eyebrow">Equipment Category</p>
        <h1>Chemical Equipment</h1>
        <p>Reactors, distillation columns, heat exchangers, mixers, and more for chemical processing and manufacturing operations.</p>
        <a href="#inquiry" class="btn btn-primary">Request a Quote</a>
      </div>
    </div>
  </section>
  <section class="service-body">
    <div class="container">
      <div class="service-layout">
        <div class="service-main">
          <h2>About Chemical Process Equipment</h2>
          <p>Chemical process equipment forms the backbone of manufacturing operations across specialty chemicals, petrochemicals, agrochemicals, and more. Foxs Services sources quality used and surplus chemical equipment from decommissioned plants, surplus dealers, and equipment brokers worldwide.</p>
          <h2>Equipment We Source</h2>
          <ul>
            <li>Reactors (glass-lined, stainless steel, Hastelloy)</li>
            <li>Distillation columns and trayed towers</li>
            <li>Heat exchangers (shell and tube, plate and frame)</li>
            <li>Industrial mixers and agitators</li>
            <li>Centrifuges and filtration equipment</li>
            <li>Pumps, compressors, and valves</li>
            <li>Storage tanks and pressure vessels</li>
          </ul>
          <h2>Why Source Used Chemical Equipment?</h2>
          <p>Quality used chemical equipment can deliver significant cost savings over new — often 40-70% less — with lead times that are a fraction of new manufacturing. Our team evaluates condition and specs carefully so you receive equipment that performs to expectations.</p>
        </div>
        <div class="service-sidebar">
          <?php echo foxs_inquiry_form('Chemical Equipment'); ?>
          <?php echo foxs_other_services('Chemical Equipment'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
