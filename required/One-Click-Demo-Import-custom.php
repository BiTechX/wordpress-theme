<?php


function ocdi_import_files() {
	return array(
		array(
			'import_file_name'             => 'Demo Import 1',
			'categories'                   => array( 'Category 1'),
			'local_import_file'            => trailingslashit( get_stylesheet_directory() ) . '/includes/demo-data/new.xml',
			'local_import_widget_file'     => trailingslashit( get_stylesheet_directory() ) . '/includes/demo-data/new-widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_stylesheet_directory() ) . '/includes/demo-data/new-export.dat',
			/*
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
					'option_name' => 'redux_option_name',
				),
			),
			*/
			'import_preview_image_url'     => 'http://bitechx.com/images/bitechx.svg',
			'import_notice'                => __( 'After you import this demo, you will have check the website', 'your-textdomain' ),
			'preview_url'                  => 'http://bitechx.com/images/bitechx.svg',
		),

	);
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );


function ocdi_after_import_setup() {

	//$front_page_id = get_page_by_title( 'Home' );
	//$blog_page_id  = get_page_by_title( 'All Blog' );

	//update_option( 'show_on_front', 'page' );
	//update_option( 'page_on_front', $front_page_id->ID );
	//update_option( 'page_for_posts', $blog_page_id->ID );
	//update_option( 'admin_email', "rafathaque1997@gmail.com" );
	//$value = get_option('um_options'); 
    //$value['profile_menu'] = 0;
    //update_option( 'um_options', $value );

}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );