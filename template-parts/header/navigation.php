<?php
    $template_arguments = get_query_var('template_arguments');
    if(!isset($template_arguments['menu_location'])) {
        $template_arguments['menu_location'] = 'menu-1';
    }
?>

<div class="header__navigation-wrapper header__navigation-wrapper--<?php echo $template_arguments['menu_location']; ?>">
    <?php if(isset($template_arguments['include_toggle']) && $template_arguments['include_toggle'] == true): ?>
        <button class="header__navigation-toggle">
            Open / Close
        </button>
    <?php endif; ?>
    <nav class="header__navigation">
        <?php
            wp_nav_menu(array(
                'theme_location' => $template_arguments['menu_location']
            ));
        ?>
    </nav>
</div>