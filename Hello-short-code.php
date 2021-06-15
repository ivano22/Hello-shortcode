<?php
/*
Plugin Name: greeting-short-code
Plugin URI: http://techhub.com
description: Shortcode to show appreciation.
Version: 1.2
Author: Ivan
Author URI: http://techhub.com
 
*/
// function that runs when shortcode is called
 
function wp_hello_shortcode( $attr) { 
    $args = shortcode_atts( array(
     
        'name' => 'Ivan',
         

    ), $attr );
     // Things that you want to do. 
    $output= 'Hi'.' ' . $args['name'] .','.'this is a nice shortcode';

    
     
    // Output needs to be return
    return $output;
    } 
    // register shortcode name [greeting]
    add_shortcode('greeting', 'wp_hello_shortcode');  
      
     
 