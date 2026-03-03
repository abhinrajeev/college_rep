<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <h1>Welcome to Our College</h1>
    <p>Explore B.Tech and Degree Programs</p>
  </div>
</section>

<div class="container" style="padding:60px 0;">
  <h2>Our Courses</h2>

  <div class="course-grid">

  <?php
  $courses = new WP_Query(array(
    'post_type'=>'course',
    'posts_per_page'=>6
  ));

  if($courses->have_posts()):
    while($courses->have_posts()): $courses->the_post();
  ?>

    <div class="course-card">
      <span class="course-tag">
        <?php echo esc_html(get_field('course_type') ?: 'Course'); ?>
      </span>

      <h3><?php the_title(); ?></h3>
      <p><?php echo wp_trim_words(get_the_excerpt(),20); ?></p>
      <a class="btn" href="<?php the_permalink(); ?>">View Details</a>
    </div>

  <?php endwhile; wp_reset_postdata(); endif; ?>

  </div>
</div>

<?php get_footer(); ?>