<?php 
// Carrega os scripts do tema
if(!function_exists('pwp_theme_scripts')) {
function pwp_theme_scripts() {
    // Styles
    wp_enqueue_style( 'slick-theme', TEMPLATE . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'slick', TEMPLATE . '/assets/css/slick.css' );
    wp_enqueue_style('slick-fonts', TEMPLATE . '/assets/fonts/slick.ttf');
    wp_enqueue_style( 'bootstrap', TEMPLATE . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'stickyHeader', TEMPLATE . '/assets/css/sp.stickyHeader.css' );
    wp_enqueue_style( 'theme-style', TEMPLATE . '/assets/dist/all.min.css', '', PWP_THEME_VERSION );
    

    // Scripts
    wp_enqueue_script( 'theme-scripts', TEMPLATE . '/assets/dist/concat.min.js', array('jquery'), PWP_THEME_VERSION, true );
    wp_enqueue_script( 'bootstrap-js', TEMPLATE . '/assets/js/inc/bootstrap.js' );
    wp_enqueue_script( 'slick-scripts', TEMPLATE . '/assets/js/inc/slick.min.js' );
    wp_enqueue_script( 'stickyHeader', TEMPLATE . '/assets/js/inc/sp.stickyHeader.js' );
}
}
add_action( 'wp_enqueue_scripts', 'pwp_theme_scripts' );

// function optwp_object_to_array($object)
// {
//     $a = array();
//     foreach ($object as $k => $v)
//         $a[$k] = (is_array($v) || is_object($v)) ? optwp_object_to_array($v): $v;

//     return $a;
// }