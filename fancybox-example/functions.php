<?php 


//====================================================
//Adding FancyBox


//this removes the default styling the WP gives to the galleries.
add_filter( 'use_default_gallery_style', '__return_false' );


//Using Fancybox to add lightbox for images and galleries
// we need to Enqueue our javascript and css files
function add_fancybox() {
    wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/fancybox/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
    wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/fancybox/jquery.fancybox.css' );

    //this is our code that sets up fancybox to use in WP
    wp_enqueue_script( 'fancybox-wp-init', get_template_directory_uri() . '/fancybox/fancybox-wp-init.js', array( 'fancybox-js' ), false, true );

    //this lets you see other images as thumbs
    wp_enqueue_script( 'fancybox-thumbs', get_template_directory_uri() . '/fancybox/helpers/jquery.fancybox-thumbs.js', array( 'fancybox-js' ), false, true );
    wp_enqueue_style( 'fancybox-style-thumbs', get_template_directory_uri() . '/fancybox/helpers/jquery.fancybox-thumbs.css', array('fancybox-style') );
}
add_action( 'wp_enqueue_scripts', 'add_fancybox' );

//end fancybox
//====================================================

?>