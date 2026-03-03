<?php
/**
 * Default Page Template
 * @package CollegeTheme
 */
get_header();
?>

<div class="page-header">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span class="sep">›</span>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<div class="container section-padding">
    <div style="max-width:900px;margin:0 auto;">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div style="margin-bottom:40px;border-radius:var(--radius-lg);overflow:hidden;">
                        <?php the_post_thumbnail('large', array('style' => 'width:100%;height:auto;')); ?>
                    </div>
                <?php endif; ?>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
