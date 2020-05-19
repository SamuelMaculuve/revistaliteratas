<?php


########################################################################################################################

########################################################################################################################
/***->include init files **/
require trailingslashit(get_template_directory()). "/assets/init/init.php";
/*** include init files<-*/
########################################################################################################################

/** Methods **/
require trailingslashit(get_template_directory()). "/assets/tools/method/method.php";
/** Methods **/
########################################################################################################################


/** Hook for admin page options theme **/
require trailingslashit(get_template_directory()). '/assets/tools/hook/OptionTheme/OptionTheme.php';
/** Hook for admin page options theme **/
add_action( 'admin_menu', function() {
  if ( ! current_user_can( 'manage_options' ) && function_exists( 'PLL' ) ) {
      add_menu_page( __( 'Strings translations', 'polylang' ), __( 'Languages', 'polylang' ), 'edit_pages', 'mlang_strings', array( PLL(), 'languages_page' ), 'dashicons-translation' );
  }
} );

function wpb_custom_new_mwnu(){
  register_nav_menu('my-custom-menu',_('My Custom Menu'));

}
add_action( 'init', 'wpb_custom_new_mwnu');
########################################################################################################################

/*function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Footer area one',
      'id'            => 'footer_area_one',
      'description'   => 'This widget area discription',
      'before_widget' => '<section class="footer-area footer-area-one">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));

  }

  add_action( 'widgets_init', 'register_widget_areas' );*/

  function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );

function wpb_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );


// Below declares woocommerce support when added to a theme or child theme functions.php - from the official WooCommerce Github (August 2018)
// Posted by Robin Scott of Silicon Dales here https://silicondales.com/tutorials/woocommerce/declare-woocommerce-support-theme/ to benefit the Open Source community. Free to share and distribute for any purpose.
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
