<?php
/**
* Template Name: Main Dashboard Template
*/
get_header('dashboard');

echo get_the_ID();
$id =get_current_user_id();

echo $id;
echo get_avatar( $id, 96,"http://bitechx.com/fitprotest/wp-content/uploads/2019/05/5.jpg" );
//do_action('edit_user_avatar', $id);
//echo do_shortcode('[avatar_upload /]')

/*
$value = get_the_title();
if($value == "User"){
    $profile_id = um_profile_id();
   
    $all_meta_for_user = get_user_meta( $profile_id );
    
    echo "<pre>";
    //print_r( $all_meta_for_user );
    echo "</pre>";
    
     echo $profile_id."<br>";
    echo um_get_display_name( $profile_id );
    
    $arg = array(
        ""
        );
    
      echo get_avatar( $profile_id, 96,"http://bitechx.com/fitprotest/wp-content/uploads/2019/05/5.jpg" );
      //update_user_meta( $profile_id, "profile_picture", "https://i.imgur.com/JgHIWXb.jpg" );
     //echo do_shortcode('[ultimatemember form_id="1205"]');
     //echo do_shortcode('[ultimatemember_account]');
     
}
*/
//designernahiyan
?>


<iframe src="http://bitechx.com/fitprotest/test/designernahiyan/?profiletab=main&um_action=edit" style="width:100%;height:600px;overflow:hidden;border: 0px;" scrolling="no">
    
</iframe>









<?php
get_footer('dashboard');
?>
