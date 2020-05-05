<?php

add_filter('show_admin_bar', '__return_false');
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );
add_filter( 'big_image_size_threshold', '__return_false' );

define('REVEIL_THEME_VERSION','1.0.0');
if ( ! function_exists('REVEIL_theme_setup')){
    function REVEIL_theme_setup(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails');
        add_theme_support( 'html5');
    }

}
add_action ( 'after_setup_theme','REVEIL_theme_setup' );
//déclaration de la fonction
if ( ! function_exists( 'REVEIL_theme_enqueue_scripts') ) {
    function REVEIL_theme_enqueue_scripts() {
        // Déclaration du Thème
        wp_enqueue_style(
            'REVEIL-theme-style',
            get_theme_file_uri('/public/css/style.css'),
            [],
            'REVEIL_THEME_VERSION'
        );
        // Déclaration du JS
        wp_enqueue_script( 
            'REVEIL-theme-script',
            get_theme_file_uri('public/js/app.js'),
            [],
            'REVEIL_THEME_VERSION',
            true
        );
    }
}
add_action ('wp_enqueue_scripts','REVEIL_theme_enqueue_scripts' );

function montheme_init(){
    register_taxonomy('bien-être', 'post',[
        'labels' => [
            'name'=> 'bien-être',
        'singular_name'     => 'bien-être',
        'plural_name'     => 'bien-être',
        'search_items'      => 'rechercher bien-être',
        'all_items'         => 'tous bien-être',
        'edit_item'         => 'editer le bien-être',
        'update_item'       => 'Mettre à jour le bien-être',
        'add_new_item'      => 'ajouter un nouveau bien-être',
        'new_item_name'     => 'ajouter un nouveau bien-être',
        'menu_name'         => 'bien-être',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
}
add_action ('init','montheme_init' );


if ( ! function_exists(
    'reveil_register_nav_menus')){

function reveil_register_nav_menus() {
    /**
     * J'ajoute mes emplacements de menu
     *
     * @link https://developer.wordpress.org/themes/functionality/navigation-menus/
     */
    register_nav_menus(
        [
            'header-menu' => 'Menu top',
            'social-network-menu' => 'Menus des réseaux sociaux',
        ]
    );
}
}

add_action( 'init', 'reveil_register_nav_menus' );

// Classe CSS menu HEADER

if ( ! function_exists(
    'reveil_nav_menu_css_class')){

function reveil_nav_menu_css_class( $classes) {

    $classes[]='section_link';
    
    return $classes;
}
    }

add_filter( 'nav_menu_css_class', 'reveil_nav_menu_css_class');

if ( ! function_exists(
    'reveil_nav_menu_link_class')){

function reveil_nav_menu_link_class($attributes) {


    $attributes['class']='nav__link';
    $attributes['class']=ltrim($attributes['class']);


    return $attributes;
}
}

add_filter( 'nav_menu_link_attributes', 'reveil_nav_menu_link_class');


