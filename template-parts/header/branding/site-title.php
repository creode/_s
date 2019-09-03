<?php if ( is_front_page() || is_home() ) : ?>
    <h1 class="header__site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
    </h1>
<?php else : ?>
    <p class="header__site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
    </p>
<?php endif; ?>