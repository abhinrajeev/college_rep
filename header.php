<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Site Header -->
<header id="masthead" class="site-header" role="banner">

    <!-- Header Top Bar -->
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <div class="header-top-links">
                    <?php $phone = college_get('college_phone', '+1 (555) 123-4567'); ?>
                    <?php $email = college_get('college_email', 'info@college.edu'); ?>
                    <?php if ($phone) : ?>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>">
                            <i class="fas fa-phone"></i> <?php echo esc_html($phone); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($email) : ?>
                        <a href="mailto:<?php echo esc_attr($email); ?>">
                            <i class="fas fa-envelope"></i> <?php echo esc_html($email); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="header-top-links">
                    <a href="<?php echo esc_url(home_url('/student-portal')); ?>">Student Portal</a>
                    <a href="<?php echo esc_url(home_url('/faculty-portal')); ?>">Faculty Portal</a>
                    <a href="<?php echo esc_url(home_url('/library')); ?>">Library</a>
                </div>
            </div>
        </div>
    </div><!-- .header-top -->

    <!-- Header Main -->
    <div class="header-main">
        <div class="container">
            <div class="header-main-inner">

                <!-- Site Branding -->
                <div class="site-branding">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="site-logo-placeholder">
                            <div style="width:56px;height:56px;background:var(--primary);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                                <span style="color:var(--accent);font-size:1.6rem;font-family:var(--font-heading);font-weight:700;">C</span>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div>
                        <div class="site-title">
                            <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </div>
                        <div class="site-tagline">
                            <?php echo esc_html( college_get('college_tagline', get_bloginfo('description')) ); ?>
                        </div>
                    </div>
                </div><!-- .site-branding -->

                <!-- Navigation -->
                <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'college-theme'); ?>">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => 'college_fallback_menu',
                    ));
                    ?>
                </nav>

                <!-- Header CTA -->
                <div class="header-cta">
                    <a href="<?php echo esc_url( home_url('/apply') ); ?>" class="btn btn-primary">
                        <i class="fas fa-graduation-cap"></i>
                        <?php esc_html_e('Apply Now', 'college-theme'); ?>
                    </a>
                </div>

                <!-- Mobile Toggle -->
                <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle menu', 'college-theme'); ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>
        </div>
    </div><!-- .header-main -->

</header><!-- #masthead -->
