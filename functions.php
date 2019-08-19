<?php 

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' ); 
add_filter( 'auto_update_theme', '__return_true' );

function my_enqueue_assets() { 
    //This is main CSS File
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
    wp_enqueue_style( 'style-dynamic-color', get_stylesheet_directory_uri().'/assets/css/color-change-css.php' ); 
    
    //This is main JS File
    wp_enqueue_script( 'fitpro-theme-script', get_stylesheet_directory_uri() . '/main.js',array( 'jquery' ));

} 


/*
This use to include the codestar-framework custom option make file file
*/
//require_once get_theme_file_path().'/required/plugin-update-checker.php';
require_once get_theme_file_path().'/required/codestar-framework-custom.php';
require_once get_theme_file_path().'/required/redux-framework-custom.php';
require_once get_theme_file_path().'/required/tgm-custom.php';
require_once get_theme_file_path().'/required/One-Click-Demo-Import-custom.php';





/*
function wpdocs_custom_excerpt_length( $length ) {
    return 5;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

*/

add_action( 'wp_ajax_nopriv_firpro_post_load_more', 'firpro_post_load_more' );
add_action( 'wp_ajax_firpro_post_load_more', 'firpro_post_load_more' );
function firpro_post_load_more() {
	
	$paged = $_POST["page"]+1;
	
	$query = new WP_Query( array(
		'post_type' => 'post',
		'paged' => $paged
	) );
	
	if( $query->have_posts() ):
			global $valueIttaration ;
			$valueIttaration = 0;
		while( $query->have_posts() ): $query->the_post();
		
		    get_template_part("template-fit-pro-blog");
		    $valueIttaration++;
		endwhile;
		
	endif;
	
	wp_reset_postdata();
	
	die();
	
}


function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
function new_loop_shop_per_page( $products ) {
  // Return the number of products you wanna show per page.
  $products = 1;
  return $products;
}
?>
