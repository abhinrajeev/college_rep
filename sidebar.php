<?php
/**
 * Sidebar Template
 * @package CollegeTheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php else : ?>

    <!-- Search Widget -->
    <div class="widget">
        <div class="widget-title"><?php esc_html_e('Search', 'college-theme'); ?></div>
        <div class="widget-body">
            <?php get_search_form(); ?>
        </div>
    </div>

    <!-- Quick Links Widget -->
    <div class="widget">
        <div class="widget-title"><?php esc_html_e('Quick Links', 'college-theme'); ?></div>
        <div class="widget-body" style="padding:16px 24px">
            <ul class="footer-links">
                <li><a href="<?php echo esc_url(home_url('/admissions')); ?>"><i class="fas fa-chevron-right"></i> Admissions</a></li>
                <li><a href="<?php echo esc_url(home_url('/programs')); ?>"><i class="fas fa-chevron-right"></i> Academic Programs</a></li>
                <li><a href="<?php echo esc_url(home_url('/faculty')); ?>"><i class="fas fa-chevron-right"></i> Faculty</a></li>
                <li><a href="<?php echo esc_url(home_url('/events')); ?>"><i class="fas fa-chevron-right"></i> Events</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>

    <!-- Contact Widget -->
    <div class="widget" style="background:var(--primary-dark);color:var(--white)">
        <div class="widget-title" style="background:var(--accent);color:var(--primary-dark)"><?php esc_html_e('Contact Us', 'college-theme'); ?></div>
        <div class="widget-body">
            <ul class="footer-contact">
                <li><span><i class="fas fa-phone" style="color:var(--accent)"></i></span> <span style="color:rgba(255,255,255,0.8)"><?php echo esc_html(college_get('college_phone', '+1 (555) 123-4567')); ?></span></li>
                <li><span><i class="fas fa-envelope" style="color:var(--accent)"></i></span> <span style="color:rgba(255,255,255,0.8)"><?php echo esc_html(college_get('college_email', 'info@college.edu')); ?></span></li>
            </ul>
            <a href="<?php echo esc_url(home_url('/apply')); ?>" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:16px">
                <?php esc_html_e('Apply Now', 'college-theme'); ?>
            </a>
        </div>
    </div>

<?php endif; ?>
