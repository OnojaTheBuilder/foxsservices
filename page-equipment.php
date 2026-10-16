<?php /* Template Name: Categories Page */ get_header(); ?>
<main>
  <section class="equip-hero">
    <div class="container">
      <p class="section-eyebrow" style="color:rgba(255,255,255,0.5);">Equipment Catalog</p>
      <h1>Process Equipment<br>Across Every Industry</h1>
      <p>Browse our categories to find the equipment you need. Can't find it? Contact us — if it exists, we can source it.</p>
    </div>
  </section>

  <section class="featured-equip">
    <div class="container">
      <div class="featured-card">
        <div class="featured-card-image">
          <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=700&q=80" alt="Converting Equipment" loading="lazy">
        </div>
        <div class="featured-card-body">
          <p class="section-eyebrow">Featured Category</p>
          <h2>Converting Equipment</h2>
          <p>Our largest and most active category. Roll-to-roll converting, slitting, laminating, coating, and more for the flexible materials industry.</p>
          <a href="<?php echo home_url('/converting-equipment'); ?>" class="btn btn-primary">Browse Converting Equipment</a>
        </div>
      </div>
    </div>
  </section>

  <section class="all-categories">
    <div class="container">
      <p class="section-eyebrow">All Categories</p>
      <h2 class="section-title">Browse by Category</h2>
      <div class="cat-small-grid">
        <a href="<?php echo home_url('/chemical-equipment'); ?>" class="cat-small-card"><h3>Chemical Equipment</h3><p>Reactors, distillation, heat exchangers, mixers</p></a>
        <a href="<?php echo home_url('/edible-oils-fishmeal'); ?>" class="cat-small-card"><h3>Edible Oils &amp; Fishmeal</h3><p>Extraction, refining, drying and processing</p></a>
        <a href="<?php echo home_url('/pharmaceutical-equipment'); ?>" class="cat-small-card"><h3>Pharmaceutical Equipment</h3><p>GMP reactors, dryers, filtration, filling</p></a>
        <a href="<?php echo home_url('/plastics-equipment'); ?>" class="cat-small-card"><h3>Plastics Equipment</h3><p>Extruders, injection molding, thermoforming</p></a>
        <a href="<?php echo home_url('/power-generation'); ?>" class="cat-small-card"><h3>Power Generation</h3><p>Generators, turbines, transformers, switchgear</p></a>
        <a href="<?php echo home_url('/pulp-and-paper'); ?>" class="cat-small-card"><h3>Pulp and Paper</h3><p>Refiners, paper machines, screening systems</p></a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
