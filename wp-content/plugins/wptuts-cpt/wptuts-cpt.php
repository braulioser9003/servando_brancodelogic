<?php
/*
   Plugin name: WPTUTS Cpt
 */

function cptui_register_my_cpts() {


    /**
     * Post Type: Exposiciones.
     */

    $labels = [
        "name" => __( "Exposiciones", "sydney" ),
        "singular_name" => __( "Exposicione", "sydney" ),
    ];

    $args = [
        "label" => __( "Exposiciones", "sydney" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "exposicione", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "taxonomies" => [ "exposicion" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "exposicione", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
