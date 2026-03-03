<?php
/**
 * Search Results Template
 * @package CollegeTheme
 */
get_header();
?>
<div class="page-header">
    <div class="container">
        <h1><?php printf( esc_html__('Search Results for: %s', 'college-theme'), '<span>' . esc_html(get_search_query()) . '</span>' ); ?></h1>
        <div class="breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span class="sep">›</span>
            <span>Search Results</span>
        </div>
    </div>
</div>
<div class="container section-padding">
    <div style="display:grid;grid-template-columns:2fr 1fr;gap:48px;align-items:start;">
        <main id="primary" role="main">
            <?php if ( have_posts() ) : ?>
                <p style="margin-bottom:32px;color:var(--text-light)"><?php printf(esc_html__('Found %s results', 'college-theme'), '<strong>' . $wp_query->found_posts . '</strong>'); ?></p>
                <div style="display:flex;flex-direction:column;gap:24px;">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('news-card'); ?> style="display:grid;grid-template-columns:200px 1fr;">
                        <div class="news-image" style="height:100%;min-height:140px;">
                            <?php if(has_post_thumbnail()) : the_post_thumbnail('college-thumb', array('style'=>'width:100%;height:100%;object-fit:cover'));
                            else : ?><div style="width:100%;height:100%;min-height:140px;background:var(--light);display:flex;align-items:center;justify-content:center;font-size:3rem">📄</div><?php endif; ?>
                        </div>
                        <div class="news-body">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 25)); ?></p>
                            <a href="<?php the_permalink(); ?>">Read More →</a>
                        </div>
                    </article>
                <?php endwhile; ?>
                </div>
                <div class="pagination"><?php the_posts_pagination(); ?></div>
            <?php else : ?>
                <div style="text-align:center;padding:48px;background:var(--light);border-radius:var(--radius-lg);">
                    <div style="font-size:4rem;margin-bottom:16px">🔍</div>
                    <h3><?php esc_html_e('No results found', 'college-theme'); ?></h3>
                    <p><?php esc_html_e('Try different search terms or browse our programs.', 'college-theme'); ?></p>
                    <a href="<?php echo esc_url(home_url('/programs')); ?>" class="btn btn-secondary" style="margin-top:16px">Browse Programs</a>
                </div>
            <?php endif; ?>
        </main>
        <aside class="sidebar"><?php get_sidebar(); ?></aside>
    </div>
</div>
<?php get_footer(); ?>
