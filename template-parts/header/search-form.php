<?php
    $template_arguments = get_query_var('template_arguments');
?>

<div class="header__search-form-wrapper">
    <?php if(isset($template_arguments['include_toggle']) && $template_arguments['include_toggle'] == true): ?>
        <button class="header__search-form-toggle">
            Open / Close
        </button>
    <?php endif; ?>
    <form action="/" method="get" class="header__search-form">
        <input type="text" name="s" />
        <input type="submit" />
    </form>
</div>