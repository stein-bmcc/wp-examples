<?php 

//Copy and paste this into your functions.php
//Start copying after here ------------------

// Enqueue Scripts/Styles for our Lightbox
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


//stop copying before here -----------------

 ?>