<?php
/**
* Template Name: Fit Pro Login Redirect Template
*/
if(is_user_logged_in()){
    if(is_admin()){
        wp_redirect(site_url().'/admin/homepage.php'); exit; 
    }else{
        $user_id = get_current_user_id();
        $userinfo = get_userdata($user_id);
        
        $status = $userinfo->account_status; 
        
        
        if($status == 'approved'){
            wp_redirect(site_url().'/user/homepage.php'); exit;
        }
        elseif($status == 'spam'){
           
            wp_redirect(site_url().'/user/ban_user.php'); exit;
        }
        
         
    }
}
else{
    wp_redirect( home_url() ); exit; 
}
?>



