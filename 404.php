<?php get_header(); ?>
<div class="container section-padding" style="text-align:center;min-height:60vh;display:flex;align-items:center;justify-content:center;">
    <div>
        <div style="font-size:8rem;font-weight:700;color:var(--primary);font-family:var(--font-heading);line-height:1;margin-bottom:16px">404</div>
        <h2 style="margin-bottom:16px"><?php esc_html_e('Page Not Found', 'college-theme'); ?></h2>
        <p style="color:var(--text-light);margin-bottom:32px;max-width:500px"><?php esc_html_e("Sorry, the page you're looking for doesn't exist. It may have moved or been removed.", 'college-theme'); ?></p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                <i class="fas fa-home"></i> <?php esc_html_e('Back to Home', 'college-theme'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">
                <i class="fas fa-envelope"></i> <?php esc_html_e('Contact Us', 'college-theme'); ?>
            </a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
