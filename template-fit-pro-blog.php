<?php 	global $valueIttaration;  ?>
 <!--
 	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	   
			<h2><?php the_title();  ?></h2>
			<?php echo " ".$valueIttaration ;?>
   </article>
   
   -->

 		

	    
	<?php 
	if($valueIttaration%2 != 0) :?>	
	
	 <div class="et_pb_row et_pb_row_2 et_pb_row_4col row-wider">
	  <!--  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  -->
    		<div class="et_pb_column et_pb_column_1_4 et_pb_column_3    et_pb_css_mix_blend_mode_passthrough blog-img-col">	
    			<div class="et_pb_module et_pb_image et_pb_image_0 et_always_center_on_mobile">
    				<span class="et_pb_image_wrap ">
    				    <?php if ( has_post_thumbnail() ) : ?>
    				        <?php the_post_thumbnail(); ?>
    				     <?php else:  ?>
    				        <img src="https://i.imgur.com/cUQw6ZS.jpg" alt="<?php the_title_attribute(); ?>"/>
    				    <?php endif; ?>
    				</span>
    			</div>
    		</div> <!-- .et_pb_column -->
    	    <div class="et_pb_column et_pb_column_1_4 et_pb_column_4    et_pb_css_mix_blend_mode_passthrough blog-card blog-margin-right">
    			<div class="et_pb_module et_pb_text et_pb_text_2 et_pb_bg_layout_light  et_pb_text_align_left">
    				<div class="et_pb_text_inner">
    					<h5 class="primary-color1"><?php the_title();  ?></h5>
                        <p><?php echo wp_trim_words( get_the_content(), 10, ' [...] ' ); ?></p>
    				</div>
    			</div> <!-- .et_pb_text -->
    			<div class="et_pb_button_module_wrapper et_pb_button_0_wrapper et_pb_button_alignment_ et_pb_module center-text-mobile">
    				<a class="et_pb_button et_pb_button_0 transparent-background-hover white theme-rounded-button secondary-color1-background secondary-color1-border secondary-color1-border-hover secondary-color1-hover et_pb_bg_layout_light" href="<?php the_permalink(); ?>"><?php _e( 'READ MORE' ); ?></a>
    			</div>
    		</div> 
	<!--	</article>-->
		 
	<?php else :?>		
	<!--	 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  -->
    		<div class="et_pb_column et_pb_column_1_4 et_pb_column_5    et_pb_css_mix_blend_mode_passthrough blog-img-col blog-margin-left">
    			<div class="et_pb_module et_pb_image et_pb_image_1 et_always_center_on_mobile">
    			    <span class="et_pb_image_wrap ">
    			       <?php if ( has_post_thumbnail() ) : ?>
    				       <?php the_post_thumbnail(); ?>
    				        <?php else:  ?>
    				        <img src="https://i.imgur.com/cUQw6ZS.jpg" alt="<?php the_title_attribute(); ?>"/>
    				    <?php endif; ?>
    			     </span>
    		    </div>
    		</div> <!-- .et_pb_column -->
    		<div class="et_pb_column et_pb_column_1_4 et_pb_column_6    et_pb_css_mix_blend_mode_passthrough blog-card">
    				
    				
    			<div class="et_pb_module et_pb_text et_pb_text_3 et_pb_bg_layout_light  et_pb_text_align_left">
    				<div class="et_pb_text_inner">
    					<h5 class="primary-color1"> <?php the_title();  ?></h5>
                        <p><?php echo wp_trim_words( get_the_content(), 10, ' [...] ' ); ?></p>
    				</div>
    			</div> <!-- .et_pb_text -->
    			<div class="et_pb_button_module_wrapper et_pb_button_1_wrapper et_pb_button_alignment_ et_pb_module center-text-mobile" >
	                <a class="et_pb_button et_pb_button_0 transparent-background-hover white theme-rounded-button secondary-color1-background secondary-color1-border secondary-color1-border-hover secondary-color1-hover et_pb_bg_layout_light" href="<?php the_permalink(); ?>"><?php _e( 'READ MORE' ); ?></a>
    			</div>
    		</div> <!-- .et_pb_column -->
	<!--	</article>	-->	
	</div> <!-- .et_pb_row -->
	<?php endif ;?>		