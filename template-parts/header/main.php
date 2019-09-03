<header id="masthead" class="header">
    <?php creode_wordpress_base_theme_get_template_part('template-parts/header/branding/main'); ?>
    <?php creode_wordpress_base_theme_get_template_part('template-parts/header/navigation', null, array(
        'include_toggle' => true,
        'menu_location' => 'menu-1'
    )); ?>
    <?php creode_wordpress_base_theme_get_template_part('template-parts/header/search-form', null, array(
        'include_toggle' => true
    )); ?>
</header>