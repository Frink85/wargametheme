<?php
/*
    Theme initialisation
    Load all scripts and styles
    Set theme configuration
*/

function frontend_assets(){
    /* FRONTEND STYLES*/
    //wp_enqueue_style('main', get_template_directory_uri().'/dist/css/bootstrap.min.css', false, 1, 'screen');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', false, 1, 'screen');
    
    //wp_enqueue_style('lightbox', get_template_directory_uri().'/css/colorbox.css', false, 1, 'screen');
    //wp_enqueue_style('carousel', get_template_directory_uri().'/css/style-ajustements.css', false, 1, 'screen');
    //wp_enqueue_style('datepicker','http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css', false, 1, 'screen');
    
    /* FRONTEND SCRIPTS*/
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/dist/js/vendor/jquery.min.js', false, true);
    //wp_enqueue_script('bootstrap', get_template_directory_uri().'/dist/js/bootstrap.min.js', false, true);
    
    // Inside the js folder
    //wp_enqueue_script('custom',  get_template_directory_uri().'/js/custom.js', false, '1', true);
    //wp_enqueue_script('lightbox',  get_template_directory_uri().'/js/jquery.colorbox-min.js', array('jquery'), '1', true);
    //wp_enqueue_script('carousel',  get_template_directory_uri().'/js/jquery.carouFredSel-6.2.0-packed.js', array('jquery'), '1', true);
    //wp_enqueue_script('social',  get_template_directory_uri().'/js/social.js', false, '1', true);
    //wp_enqueue_script('menu',  get_template_directory_uri().'/js/menu.js', array('jquery'), '1', true);
    //wp_enqueue_script('jqueryUi',  get_template_directory_uri().'/js/jquery.carouFredSel-6.2.0-packed.js', array('jquery'), '1', true);
    
    // Check the library website and download the lastest version.
    //wp_enqueue_script('datepickertradfr',  get_template_directory_uri().'/js/datepicker_fr.js', false, '1', true);
    //wp_enqueue_script('jqueryui', ("http://code.jquery.com/ui/1.10.2/jquery-ui.js"), false, '1.10.2', true);
    
}

add_action( 'wp_enqueue_scripts', 'frontend_assets');

?>