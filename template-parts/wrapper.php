<?php
    $template_arguments = get_query_var('template_arguments');
?>

<div class="<?php echo $template_arguments['class_name']; ?>">
    <?php
        foreach($template_arguments['inner_templates'] as $inner_template) {
            if(!isset($inner_template['arguments'])) {
                $inner_template['arguments'] = array();
            }
            creode_wordpress_base_theme_get_template_part($inner_template['slug'], null, $inner_template['arguments']);
        }
    ?>
</div>