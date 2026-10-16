<?php /* Template Name: Pulp and Paper */ get_header(); ?>
<main>
  <section class="service-hero">
    <div class="service-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1400&q=80');"></div>
    <div class="container">
      <div class="service-hero-content">
        <p class="section-eyebrow">Equipment Category</p>
        <h1>Pulp and Paper</h1>
        <p>Refiners, paper machines, screening systems, and pulp processing equipment for the paper and board manufacturing industry.</p>
        <a href="#inquiry" class="btn btn-primary">Request a Quote</a>
      </div>
    </div>
  </section>
  <section class="service-body">
    <div class="container">
      <div class="service-layout">
        <div class="service-main">
          <h2>About Pulp and Paper Equipment</h2>
          <p>The pulp and paper industry is one of the most equipment-intensive industries in manufacturing. Foxs Services has strong connections with paper mills, equipment dealers, and auction houses that allow us to source quality used equipment efficiently.</p>
          <h2>Equipment We Source</h2>
          <ul>
            <li>Disc and conical refiners</li>
            <li>Paper and board machines</li>
            <li>Pressure screens and cleaners</li>
            <li>Headboxes and forming sections</li>
            <li>Press sections and dryer cans</li>
            <li>Calenders and winders</li>
            <li>Pulp digesters and washers</li>
          </ul>
          <h2>Markets Served</h2>
          <p>Tissue, packaging board, specialty paper, newsprint, and kraft paper manufacturers — as well as recycled fiber and de-inking operations.</p>
        </div>
        <div class="service-sidebar">
          <?php echo foxs_inquiry_form('Pulp and Paper'); ?>
          <?php echo foxs_other_services('Pulp and Paper'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
