<?php

function sunset_script_enqueue(){
    wp_enqueue_style('customestyle', get_template_directory_uri() . "/css/awesome.css", array(),'1.0.0', 'all');
    wp_enqueue_script('customescript', get_template_directory_uri() . "/js/awesome.js", array(),'1.0.0', true);
}

add_action("wp_enqueue_scripts", "sunset_script_enqueue");

function add_produit_custom_post_type(){

    $args = array(

        "labels" => array(
            "name" => "Produit",
            "singular_name" => "Produit",
            "add_new_item" => "Add new Produit",
            "edit_item" => "Edit Produit",
            "new_item" => "New Produit",
            "view_items" => "View Produit",
            "search_items" => "Search Produit",
            "all_items" => "All Produit"
        ),
        "public" => true,
        "publicly_queryable" => true,
        "supports" => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'revisions'
        ),
        "capability_type" => "post",
        "menu_position" => 5,
        "taxonomies" => array()
    );

    register_post_type('Produit', $args);
}

add_action('init','add_produit_custom_post_type');