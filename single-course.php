<?php get_header(); ?>

<div class="container" style="padding:60px 0;">
  <h1><?php the_title(); ?></h1>

  <div style="margin-top:20px;">
    <?php the_content(); ?>
  </div>

  <a class="btn" href="<?php echo home_url(); ?>">← Back to Home</a>
</div>

<?php get_footer(); ?>