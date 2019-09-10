<footer class="footer">
    <?php
        add_action('footer_content', function() {
            creode_wordpress_base_theme_get_template_part('template-parts/footer/navigation', null, array(
                'menu_location' => 'menu-1'
            ));
        }, 100);
    ?>
    <?php do_action('footer_content'); ?>
</footer>