<?php

/*
 * Proper way to enqueue scripts and styles
*/

    function imramuha_enqueue_scripts() {

        /* integration of BOOTSTRAP CSS/JS */
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );

        wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' );
    }

    add_action ('wp_enqueue_scripts', 'imramuha_enqueue_scripts');
    add_action( 'widgets_init', 'imramuha_widgets_init');

    function imramuha_widgets_init() {
        
        /*sidebar TODO*/
        
        register_sidebar( array(
            'name' => __('Sidebar widget area','imramuha'),
            'id' => 'sidebar_primary',
        ) );
    }

?>