<?php




if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id' => 'sidebar-1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));



    function my_scripts() {
      wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
      wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/setting.js', array( 'jquery' ), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );

function twpp_enqueue_scripts() {
  wp_enqueue_script( 
    'main-script', 
    get_template_directory_uri() . '/script.js' 
  );
}

add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );