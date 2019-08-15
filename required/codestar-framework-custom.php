<?php
require_once get_theme_file_path() .'/includes/codestar-framework/codestar-framework.php';

if( class_exists( 'CSF' ) ) {

  
  
  
  
    //$prefix = 'dynamic_color_change';
    $prefix = 'theme_setting_change';
   //Set a unique slug-like ID





  //
  // Create options
  CSF::createOptions( $prefix, array(
    'framework_title'           => 'Fit Pro theme <small>by </small>Bitechx',
    'menu_title'                => 'Theme Color',
    'menu_slug'                 => 'fitPro-themne-plugin-color-change',
    'menu_position'             => 1,
    'menu_type'                 => 'menu',
    'menu_capability'           => 'manage_options',
  ) );

  
  
  
 
  
  
  CSF::createSection( $prefix, array(
        'title'  => 'Color Change Part',
        'fields' => array(
        
        array(
          'id'      => 'opt-primary-color-1',
          'type'    => 'color',
          'title'   => 'Primary Color 1',
          'default' => '#0e2b3d'
        ),
        array(
          'id'      => 'opt-primary-color-2',
          'type'    => 'color',
          'title'   => 'Primary Color 2',
          'default' => '#f5d35d'
        ),
        array(
          'id'      => 'opt-secondary-color-1',
          'type'    => 'color',
          'title'   => 'Secondary Color 1',
          'default' => '#d1545b'
        ),
        array(
          'id'      => 'opt-secondary-color-2',
          'type'    => 'color',
          'title'   => 'Secondary Color 2',
          'default' => '#19191e'
        ),

    )
  ) );
    CSF::createSection( $prefix, array(
        'id'    => 'primary_tab', // Set a unique slug-like ID
        'title' => 'Background Image Change',
        'fields' => array(
        
      array(
          'id'      => 'opt-text-homepage-image-link',
          'type'    => 'text',
          'title'   => 'Homepage Image Link:',
          'default' => 'https://fitprobizlaunch.com/wp-content/uploads/2019/05/Layer-1.png'
        ),    
    array(
          'id'      => 'opt-text-courseprogress-image-link',
          'type'    => 'text',
          'title'   => 'Courses Progress Background:',
          'default' => 'http://fitprobizlaunch.com/resources/images/progress-bg.png'
        ),    

     )
     
      ));


}