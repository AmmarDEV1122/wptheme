<?php
function add_css()
{
   wp_register_style('bootstrapstylesheet', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrapstylesheet');

   wp_register_style('pluginstylesheet', get_template_directory_uri() . '/assets/css/plugin.min.css', false,'1.1','all');
   wp_enqueue_style( 'pluginstylesheet');

   wp_register_style('mainstylesheet', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'mainstylesheet');

   wp_register_style('responsivestylesheet', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
   wp_enqueue_style( 'responsivestylesheet');

   wp_register_style('fifthstylesheet', get_template_directory_uri() . '/assets/css/anotherstyle.css', false,'1.1','all');
   wp_enqueue_style( 'fifthstylesheet');

   wp_register_style('darkmodestylesheet', get_template_directory_uri() . '/assets/css/darkmode.css', false,'1.1','all');
   wp_enqueue_style( 'darkmodestylesheet');
}
add_action('wp_enqueue_scripts', 'add_css');


function add_script()
{
   wp_register_script('js-script1', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script1');
   wp_register_script('js-script2', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script2');
   wp_register_script('js-script3', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script3');
   wp_register_script('js-script4', get_template_directory_uri() . '/assets/js/plugin.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script4');
   wp_register_script('js-script5', get_template_directory_uri() . '/assets/js/preloader.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script5');
}
add_action('wp_enqueue_scripts', 'add_script');



