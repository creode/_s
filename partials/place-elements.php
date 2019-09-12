<?php

namespace CreodeWordpressBaseTheme;

class PlaceElements {
    protected $templatePlaces = array();

    function __construct() {
        $this->place();
    }

    protected function place() {
        foreach($this->templatePlaces as $templatePlace) {

            // fallback values if not provided
            if(!isset($templatePlace['template_arguments'])) {
                $templatePlace['template_arguments'] = array();
            }
            if(!isset($templatePlace['priority'])) {
                $templatePlace['priority'] = 100;
            }

            add_action($templatePlace['action'], function() use ($templatePlace) {
                creode_wordpress_base_theme_get_template_part($templatePlace['template_slug'], null, $templatePlace['template_arguments']);
            }, $templatePlace['priority']);
        }
    }

}