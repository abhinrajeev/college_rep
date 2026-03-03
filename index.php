<?php get_header(); ?>

<div class="container" style="padding:60px 0;">
  <h1>Latest News</h1>

  <?php if(have_posts()):
    while(have_posts()): the_post(); ?>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>