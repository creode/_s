<?php if(has_custom_logo()): ?>
    <div class="header__logo">
        <?php the_custom_logo(); ?>
    </div>
<?php else: ?>
    <div class="header__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/logo.svg" alt="<?php bloginfo( 'name' ); ?>" />
        </a>
    </div>
<?php endif; ?>