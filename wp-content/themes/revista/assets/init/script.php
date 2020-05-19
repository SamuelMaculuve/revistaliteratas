<?php
function isu_enqueue_script()
{

    wp_enqueue_script('animsition', get_template_directory_uri().'/assets/src/vendor/animsition/js/animsition.min.js',array(),array(),'4.7.0','all');

    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/src/vendor/jquery/jquery-3.2.1.min.js',array(),'3.3.1',false,false);

    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/js/main.js',array(),'4.2.1','all');

    wp_enqueue_script('wowslider', get_template_directory_uri().'/assets/vendor/bootstrap/js/a.js',array(),'4.7.0','all');

    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/main.js',array(),'4.7.0','all');

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/js/popper.js',array(),'4.2.1',false);

    wp_enqueue_script('popper', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.min.js',array(),'1.14.6',true);

    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/vendor/jquery/jquery-3.2.1.min.js',array(),'4.2.1','all');

    wp_enqueue_style('fontawesome',get_template_directory_uri().'/assets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css',array(),'4.7.0','all');

    wp_enqueue_style('custom',get_template_directory_uri().'/assets/css/main.css',array(),'4.7.0','all');

    wp_enqueue_style('tryy',get_template_directory_uri().'/assets/css/util.min.css',array(),'4.7.0','all');

}
add_action('wp_enqueue_scripts','isu_enqueue_script');
