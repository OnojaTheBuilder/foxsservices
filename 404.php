<?php get_header(); ?>
<main style="padding-top:72px;">
  <section style="padding:120px 0;text-align:center;background:var(--gray);">
    <div class="container">
      <p style="font-size:5rem;font-weight:800;color:var(--blue);line-height:1;">404</p>
      <h1 style="color:var(--navy);font-size:2rem;font-weight:700;margin:16px 0 12px;">Page Not Found</h1>
      <p style="color:var(--text-light);margin-bottom:32px;">The page you're looking for doesn't exist or has been moved.</p>
      <a href="<?php echo home_url('/'); ?>" class="btn btn-primary">Back to Home</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>
