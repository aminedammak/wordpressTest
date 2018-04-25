<?php

function sunset_script_enqueue(){
    wp_enqueue_style('customestyle', get_template_directory_uri() . "/css/awesome.css", array(),'1.0.0', 'all');
    wp_enqueue_script('customescript', get_template_directory_uri() . "/js/awesome.js", array(),'1.0.0', true);
}

add_action("wp_enqueue_scripts", "sunset_script_enqueue");