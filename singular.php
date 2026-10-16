<?php get_header(); ?>
<main style="padding-top:72px;">
  <div class="container" style="padding:80px 24px;">
    <?php while (have_posts()) : the_post(); ?>
      <h1 style="color:var(--navy);font-size:2rem;font-weight:800;margin-bottom:24px;"><?php the_title(); ?></h1>
      <div style="color:var(--text);line-height:1.8;"><?php the_content(); ?></div>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
