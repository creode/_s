<?php
    $template_arguments = get_query_var('template_arguments');
    if(!isset($template_arguments['menu_location'])) {
        $template_arguments['menu_location'] = 'menu-1';
    }
?>

<div class="footer__navigation-wrapper footer__navigation-wrapper--<?php echo $template_arguments['menu_location']; ?>">
    <nav class="footer__navigation">
        <?php
            wp_nav_menu(array(
                'theme_location' => $template_arguments['menu_location']
            ));
        ?>
    </nav>
</div>