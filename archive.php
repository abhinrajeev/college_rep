<?php
/**
 * Archive Template
 * @package CollegeTheme
 */
get_header();
?>

<div class="page-header">
    <div class="container">
        <h1><?php the_archive_title(); ?></h1>
        <div class="breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span class="sep">›</span>
            <span><?php the_archive_title(); ?></span>
        </div>
    </div>
</div>

<div class="container section-padding">
    <div style="display:grid;grid-template-columns:2fr 1fr;gap:48px;align-items:start;">
        <main id="primary" role="main">
            <?php if ( have_posts() ) : ?>
                <div style="display:flex;flex-direction:column;gap:28px;">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('news-card'); ?> style="display:grid;grid-template-columns:240px 1fr;">
                            <div class="news-image" style="height:100%;min-height:160px;">
                                <?php if ( has_post_thumbnail() ) :
                                    the_post_thumbnail('college-thumb', array('style'=>'width:100%;height:100%;object-fit:cover'));
                                else : ?>
                                    <div style="width:100%;height:100%;min-height:160px;background:linear-gradient(135deg,var(--primary),var(--primary-light));display:flex;align-items:center;justify-content:center;font-size:3rem;opacity:0.4">📄</div>
                                <?php endif; ?>
                            </div>
                            <div class="news-body">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 25)); ?></p>
                                <div class="news-footer">
                                    <span><i class="far fa-calendar"></i> <?php echo esc_html(get_the_date()); ?></span>
                                    <a href="<?php the_permalink(); ?>">Read More →</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <div class="pagination"><?php the_posts_pagination(); ?></div>
            <?php else : ?>
                <p><?php esc_html_e('No posts found.', 'college-theme'); ?></p>
            <?php endif; ?>
        </main>
        <aside class="sidebar"><?php get_sidebar(); ?></aside>
    </div>
</div>

<?php get_footer(); ?>
