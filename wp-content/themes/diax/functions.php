<?php


/* enqueue script for parent theme stylesheet */        
function childtheme_parent_styles() {
 
 // enqueue style
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );

wp_enqueue_script( 'main', get_stylesheet_directory_uri().'/js/main.js', array(), '', true );

}

add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');


// remove contact form 7 br

add_filter( 'wpcf7_autop_or_not', '__return_false' );



// function add_google_fonts() {
// wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css?family=Open+Sans:300,400', false );}
// add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

?>

