<?php /* Template Name: Converting Equipment */ get_header(); ?>
<main>
  <section class="service-hero">
    <div class="service-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?w=1400&q=80');"></div>
    <div class="container">
      <div class="service-hero-content">
        <p class="section-eyebrow">Equipment Category</p>
        <h1>Converting Equipment</h1>
        <p>Roll-to-roll converting lines, slitters, laminators, coaters, and related equipment for flexible materials manufacturing.</p>
        <a href="#inquiry" class="btn btn-primary">Request a Quote</a>
      </div>
    </div>
  </section>
  <section class="service-body">
    <div class="container">
      <div class="service-layout">
        <div class="service-main">
          <h2>About Converting Equipment</h2>
          <p>Converting equipment is used to transform rolls of substrate — film, foil, paper, nonwovens — into finished or semi-finished products. Foxs Services is one of the most active brokers of used converting equipment in North America, with a deep network of suppliers and a strong track record of fulfilling complex specifications.</p>
          <h2>Equipment We Source</h2>
          <ul>
            <li>Slitter-rewinders (duplex, turret, differential)</li>
            <li>Laminators (solvent, solventless, water-based)</li>
            <li>Coating lines (gravure, slot die, reverse roll)</li>
            <li>Flexographic and rotogravure printing presses</li>
            <li>Bag making machines</li>
            <li>Inspection and rewinding equipment</li>
            <li>Unwinds, rewinds, and tension control systems</li>
          </ul>
          <h2>Industries Served</h2>
          <p>We serve flexible packaging, label printing, tape manufacturing, medical device packaging, and specialty films — any application where roll-to-roll processing is involved.</p>
        </div>
        <div class="service-sidebar">
          <?php echo foxs_inquiry_form('Converting Equipment'); ?>
          <?php echo foxs_other_services('Converting Equipment'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
