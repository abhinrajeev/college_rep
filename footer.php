<!-- Footer -->
<footer id="colophon" class="site-footer" role="contentinfo">

    <!-- Footer Main -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">

                <!-- Brand Column -->
                <div class="footer-brand">
                    <div class="site-title">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </div>
                    <p><?php echo wp_kses_post( college_get('footer_about', 'We are committed to providing world-class education that prepares students for the challenges of tomorrow. Join us and be part of something extraordinary.') ); ?></p>

                    <!-- Social Links -->
                    <div class="footer-social">
                        <?php $socials = array(
                            'college_facebook'  => array('fa-facebook-f',   'Facebook'),
                            'college_twitter'   => array('fa-x-twitter',    'Twitter / X'),
                            'college_instagram' => array('fa-instagram',     'Instagram'),
                            'college_linkedin'  => array('fa-linkedin-in',   'LinkedIn'),
                            'college_youtube'   => array('fa-youtube',       'YouTube'),
                        );
                        foreach ( $socials as $key => $data ) :
                            $url = college_get($key);
                            if ( $url ) : ?>
                                <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr($data[1]); ?>">
                                    <i class="fab <?php echo esc_attr($data[0]); ?>"></i>
                                </a>
                            <?php endif;
                        endforeach; ?>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-widget">
                    <h4><?php esc_html_e('Quick Links', 'college-theme'); ?></h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('About Us', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/programs')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Academic Programs', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/admissions')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Admissions', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/campus-life')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Campus Life', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/research')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Research', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/alumni')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Alumni', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/careers')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Careers', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Contact Us', 'college-theme'); ?></a></li>
                    </ul>
                </div>

                <!-- Academic -->
                <div class="footer-widget">
                    <h4><?php esc_html_e('Academics', 'college-theme'); ?></h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/programs/undergraduate')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Undergraduate', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/programs/postgraduate')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Postgraduate', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/programs/phd')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('PhD Programs', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/programs/online')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Online Learning', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/academic-calendar')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Academic Calendar', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/faculty')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Our Faculty', 'college-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/library')); ?>"><i class="fas fa-chevron-right"></i> <?php esc_html_e('Library', 'college-theme'); ?></a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-widget">
                    <h4><?php esc_html_e('Contact Us', 'college-theme'); ?></h4>
                    <ul class="footer-contact">
                        <?php $address = college_get('college_address', '123 College Ave, City, State 12345'); ?>
                        <?php if ($address) : ?>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <span><?php echo esc_html($address); ?></span>
                            </li>
                        <?php endif; ?>
                        <?php $phone = college_get('college_phone', '+1 (555) 123-4567'); ?>
                        <?php if ($phone) : ?>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <span><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" style="color:rgba(255,255,255,0.75)"><?php echo esc_html($phone); ?></a></span>
                            </li>
                        <?php endif; ?>
                        <?php $email = college_get('college_email', 'info@college.edu'); ?>
                        <?php if ($email) : ?>
                            <li>
                                <span><i class="fas fa-envelope"></i></span>
                                <span><a href="mailto:<?php echo esc_attr($email); ?>" style="color:rgba(255,255,255,0.75)"><?php echo esc_html($email); ?></a></span>
                            </li>
                        <?php endif; ?>
                        <li>
                            <span><i class="fas fa-clock"></i></span>
                            <span><?php esc_html_e('Mon-Fri: 8:00 AM - 5:00 PM', 'college-theme'); ?></span>
                        </li>
                    </ul>
                </div>

            </div><!-- .footer-grid -->
        </div><!-- .container -->
    </div><!-- .footer-main -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;">
            <p style="margin:0;color:rgba(255,255,255,0.5);font-size:0.85rem;">
                <?php echo wp_kses_post( college_get('footer_copyright', '© ' . date('Y') . ' ' . get_bloginfo('name') . '. All Rights Reserved.') ); ?>
            </p>
            <div style="display:flex;gap:20px;">
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>"><?php esc_html_e('Privacy Policy', 'college-theme'); ?></a>
                <a href="<?php echo esc_url(home_url('/terms')); ?>"><?php esc_html_e('Terms of Use', 'college-theme'); ?></a>
                <a href="<?php echo esc_url(home_url('/accessibility')); ?>"><?php esc_html_e('Accessibility', 'college-theme'); ?></a>
            </div>
        </div>
    </div>

</footer><!-- #colophon -->

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop" aria-label="<?php esc_attr_e('Back to top', 'college-theme'); ?>">
    <i class="fas fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
