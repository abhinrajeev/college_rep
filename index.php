<?php
/**
 * Main Index Template
 * @package CollegeTheme
 */
get_header();
?>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1><?php esc_html_e('College News & Blog', 'college-theme'); ?></h1>
        <div class="breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'college-theme'); ?></a>
            <span class="sep">›</span>
            <span><?php esc_html_e('News', 'college-theme'); ?></span>
        </div>
    </div>
</div>

<div class="container section-padding">
    <div style="display:grid;grid-template-columns:2fr 1fr;gap:48px;align-items:start;">

        <!-- Main Content -->
        <main id="primary" role="main">
            <?php if ( have_posts() ) : ?>
                <div class="news-grid" style="grid-template-columns:1fr;">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('news-card'); ?> style="display:grid;grid-template-columns:280px 1fr;">
                            <div class="news-image" style="height:100%;min-height:180px;">
                                <?php if ( has_post_thumbnail() ) :
                                    the_post_thumbnail('college-card', array('style'=>'width:100%;height:100%;object-fit:cover'));
                                else : ?>
                                    <div style="width:100%;height:100%;min-height:180px;background:linear-gradient(135deg,var(--primary),var(--primary-light));display:flex;align-items:center;justify-content:center;font-size:4rem;opacity:0.4">📰</div>
                                <?php endif; ?>
                            </div>
                            <div class="news-body">
                                <?php $categories = get_the_category(); ?>
                                <div class="news-category"><?php echo esc_html( $categories ? $categories[0]->name : 'News' ); ?></div>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 30 ) ); ?></p>
                                <div class="news-footer">
                                    <span style="display:flex;gap:16px">
                                        <span><i class="far fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
                                        <span><i class="far fa-user"></i> <?php the_author(); ?></span>
                                    </span>
                                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'college-theme'); ?> →</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <?php
                    the_posts_pagination( array(
                        'prev_text' => '<i class="fas fa-chevron-left"></i>',
                        'next_text' => '<i class="fas fa-chevron-right"></i>',
                    ));
                    ?>
                </div>

            <?php else : ?>
                <div style="text-align:center;padding:64px 32px;">
                    <div style="font-size:5rem;margin-bottom:24px">📰</div>
                    <h2><?php esc_html_e('No Posts Found', 'college-theme'); ?></h2>
                    <p><?php esc_html_e('Nothing has been published yet. Check back soon!', 'college-theme'); ?></p>
                </div>
            <?php endif; ?>
        </main>

        <!-- Sidebar -->
        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>

    </div>
</div>

<?php get_footer(); ?>
