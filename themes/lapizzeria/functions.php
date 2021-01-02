<?php


function lapizzeria_styles(){

    wp_enqueue_style('normalize','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',array(),'8.0.1');
    wp_enqueue_style('style',get_stylesheet_uri(),array('normalize'),'1.0.0');


}
add_action('wp_enqueue_scripts','lapizzeria_styles');