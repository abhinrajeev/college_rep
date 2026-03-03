<?php
/**
 * Single Post Template
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
            <a href="<?php echo esc_url(home_url('/news')); ?>">News</a>
            <span class="sep">›</span>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<div class="container section-padding">
    <div style="display:grid;grid-template-columns:2fr 1fr;gap:48px;align-items:start;">
        <main id="primary" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div style="margin-bottom:32px;border-radius:var(--radius-lg);overflow:hidden;">
                            <?php the_post_thumbnail('large', array('style' => 'width:100%;height:auto;')); ?>
                        </div>
                    <?php endif; ?>

                    <div style="display:flex;gap:16px;align-items:center;margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid var(--gray-light)">
                        <span style="font-size:0.9rem;color:var(--text-light)"><i class="far fa-calendar"></i> <?php echo esc_html(get_the_date()); ?></span>
                        <span style="font-size:0.9rem;color:var(--text-light)"><i class="far fa-user"></i> <?php the_author(); ?></span>
                        <span style="font-size:0.9rem;color:var(--text-light)"><i class="far fa-folder"></i> <?php the_category(', '); ?></span>
                    </div>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                    <div style="margin-top:32px;padding-top:24px;border-top:1px solid var(--gray-light)">
                        <?php the_tags('<div style="display:flex;gap:8px;flex-wrap:wrap;align-items:center"><span><i class="fas fa-tags"></i> Tags:</span>', ' ', '</div>'); ?>
                    </div>
                </article>

                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <?php comments_template(); ?>
                <?php endif; ?>

            <?php endwhile; ?>
        </main>

        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
