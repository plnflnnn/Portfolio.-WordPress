<?php 
    add_action('wp_enqueue_scripts', 'topforum_styles');

    add_action('wp_enqueue_scripts', 'topforum_scripts');

    function topforum_styles() {
        wp_enqueue_style('topforum-style', get_stylesheet_uri());
    };

    function topforum_scripts() {
        wp_enqueue_script('topforum-scripts', get_template_directory_uri() . '/assets/bundle.js', array(), null, true);
    };


    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );


    add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3 );

    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if($args->menu === 'First') {
            $atts['class'] = 'dropbtn';

            if($item->current) {
                $atts['class'] .= ' active';
            }

            if ( $item->ID === 242 && ( in_category('sponsor') )){
                $atts['class'] .= ' active';
            }

            if ( $item->ID === 243 && ( in_category('exhibitor') )){
                $atts['class'] .= ' active';
            }

            if ( $item->ID == 244 && ( in_category('speaker') )){
                $atts['class'] .= ' active';
            }

            if ( $item->ID == 245  && ( in_category('media') )){
                $atts['class'] .= ' active';
            }

        }
        return $atts;

    }
?>