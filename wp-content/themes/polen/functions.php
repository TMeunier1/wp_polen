<?php
    add_theme_support( 'post-thumbnails' );
    wp_register_script( 'script', get_template_directory_uri() . '/script.js' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'script' );




?>
