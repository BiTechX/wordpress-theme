<?php  
        $next_post = get_previous_post(); 
        $prev_post = get_next_post();
        
        
        if($next_post == null){
            global $post;
            $loop = get_posts( 'numberposts=1' );
            $next_post = $loop[0];
        }
         if($prev_post == null){
            global $post;
            $loop = get_posts( 'numberposts=1&order=ASC'  );
            $prev_post = $loop[0];
        }
       
       
        $pid = $prev_post->ID ;
        $pTitle = $prev_post->post_title;
        $pcontent = $prev_post->post_content;
        $plink = get_permalink( $pid );
        $pImageLink = get_the_post_thumbnail_url($pid,'full'); 
       
       
        $nid = $next_post->ID ;
        $nTitle = $next_post->post_title;
        $ncontent = $next_post->post_content;
        $nlink = get_permalink( $nid );
        $nImageLink = get_the_post_thumbnail_url($nid,'full'); 
        
        //echo $nlink."<br>".$plink;
         

?>
    
    
    
     <div class="et_pb_row et_pb_row_2 et_pb_row_4col row-wider">
         <?php 
	if($pid) :
	?>	
	  <!--  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  -->
    		<div class="et_pb_column et_pb_column_1_4 et_pb_column_3    et_pb_css_mix_blend_mode_passthrough blog-img-col">	
    			<div class="et_pb_module et_pb_image et_pb_image_0 et_always_center_on_mobile">
    				<span class="et_pb_image_wrap ">
    				    <?php if ( $pImageLink ) : ?>
    				        <img src="<?php echo $pImageLink; ?>" alt="<?php echo $pTitle; ?>"/>
    				     <?php else:  ?>
    				        <img src="https://i.imgur.com/cUQw6ZS.jpg" alt="<?php echo $pTitle; ?>"/>
    				    <?php endif; ?>
    				</span>
    			</div>
    		</div> <!-- .et_pb_column -->
    	    <div class="et_pb_column et_pb_column_1_4 et_pb_column_4    et_pb_css_mix_blend_mode_passthrough blog-card blog-margin-right">
    			<div class="et_pb_module et_pb_text et_pb_text_2 et_pb_bg_layout_light  et_pb_text_align_left">
    				<div class="et_pb_text_inner">
    					<h5 class="primary-color1"><?php echo $pTitle;  ?></h5>
                        <p><?php echo wp_trim_words( $pcontent, 10, ' [...] ' ); ?></p>
    				</div>
    			</div> <!-- .et_pb_text -->
    			<div class="et_pb_button_module_wrapper et_pb_button_0_wrapper et_pb_button_alignment_ et_pb_module center-text-mobile">
    				<a class="et_pb_button et_pb_button_0 transparent-background-hover white theme-rounded-button secondary-color1-background secondary-color1-border secondary-color1-border-hover secondary-color1-hover et_pb_bg_layout_light" href="<?php echo $plink; ?>"><?php _e( 'READ MORE' ); ?></a>
    			</div>
    		</div> 
	<!--	</article>-->
	<?php 
	endif;
	if($nid) :
	?>	
	<!--	 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  -->
    		<div class="et_pb_column et_pb_column_1_4 et_pb_column_5    et_pb_css_mix_blend_mode_passthrough blog-img-col blog-margin-left">
    			<div class="et_pb_module et_pb_image et_pb_image_1 et_always_center_on_mobile">
    			    <span class="et_pb_image_wrap ">
    				    <?php if ( $nImageLink ) : ?>
    				        <img src="<?php echo $nImageLink; ?>" alt="<?php echo $nTitle; ?>"/>
    				     <?php else:  ?>
    				        <img src="https://i.imgur.com/cUQw6ZS.jpg" alt="<?php echo $nTitle; ?>"/>
    				    <?php endif; ?>
    				</span>
    		    </div>
    		</div> <!-- .et_pb_column -->
    		<div class="et_pb_column et_pb_column_1_4 et_pb_column_6    et_pb_css_mix_blend_mode_passthrough blog-card">
    				
    				
    			<div class="et_pb_module et_pb_text et_pb_text_3 et_pb_bg_layout_light  et_pb_text_align_left">
    				<div class="et_pb_text_inner">
    					<h5 class="primary-color1"><?php echo $nTitle;  ?></h5>
                        <p><?php echo wp_trim_words( $ncontent, 10, ' [...] ' ); ?></p>
    				</div>
    			</div> <!-- .et_pb_text -->
    			<div class="et_pb_button_module_wrapper et_pb_button_1_wrapper et_pb_button_alignment_ et_pb_module center-text-mobile" >
	                <a class="et_pb_button et_pb_button_0 transparent-background-hover white theme-rounded-button secondary-color1-background secondary-color1-border secondary-color1-border-hover secondary-color1-hover et_pb_bg_layout_light" href="<?php echo $nlink; ?>"><?php _e( 'READ MORE' ); ?></a>
    			</div>
    		</div> <!-- .et_pb_column -->
	<!--	</article>	-->	
	
	<?php 
	endif;
	?>	
	</div> <!-- .et_pb_row -->
    
    
    
    