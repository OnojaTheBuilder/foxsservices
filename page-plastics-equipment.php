<?php /* Template Name: Plastics Equipment */ get_header(); ?>
<main>
  <section class="service-hero">
    <div class="service-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1567016376408-0226e4d0c1ea?w=1400&q=80');"></div>
    <div class="container">
      <div class="service-hero-content">
        <p class="section-eyebrow">Equipment Category</p>
        <h1>Plastics Equipment</h1>
        <p>Extruders, injection molding machines, blow molding equipment, thermoformers, and more for plastics processing.</p>
        <a href="#inquiry" class="btn btn-primary">Request a Quote</a>
      </div>
    </div>
  </section>
  <section class="service-body">
    <div class="container">
      <div class="service-layout">
        <div class="service-main">
          <h2>About Plastics Processing Equipment</h2>
          <p>Foxs Services sources used plastics equipment for manufacturers across packaging, automotive, consumer goods, and industrial applications. Whether you need a complete production line or a single machine, we can find it.</p>
          <h2>Equipment We Source</h2>
          <ul>
            <li>Single and twin-screw extruders</li>
            <li>Injection molding machines</li>
            <li>Blow molding machines (extrusion and injection)</li>
            <li>Thermoforming lines</li>
            <li>Film extrusion lines (blown and cast)</li>
            <li>Granulators and shredders</li>
            <li>Auxiliary equipment: dryers, hoppers, conveyors</li>
          </ul>
          <h2>Why Used Plastics Equipment?</h2>
          <p>Quality used plastics machinery typically runs at 30-60% of new cost with faster availability. Many machines are available in good working condition, recently serviced, and ready to install.</p>
        </div>
        <div class="service-sidebar">
          <?php echo foxs_inquiry_form('Plastics Equipment'); ?>
          <?php echo foxs_other_services('Plastics Equipment'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
