<div class="et_pb_section et_pb_section_0 et_section_regular et_pb_section_first" data-fix-page-container="on" style="padding-top:0px;">
	<div id="single-blog-bg" class="et_pb_row et_pb_row_0">
			<div class="et_pb_column et_pb_column_4_4 et_pb_column_0    et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty">
			    
			    
			    <span class="et_pb_image_wrap single-blog-cover">
    				    <?php if ( has_post_thumbnail() ) : ?>
    				        <?php the_post_thumbnail(); ?>
    				     <?php else:  ?>
    				        <img src="https://i.imgur.com/cUQw6ZS.jpg" alt="<?php the_title_attribute(); ?>"/>
    				    <?php endif; ?>
    				</span>
			    
			</div> <!-- .et_pb_column -->
	</div> <!-- .et_pb_row -->
</div>
<div class="et_pb_section et_pb_section_1 et_section_regular">
	<div class="et_pb_row et_pb_row_1">
		<div class="et_pb_column et_pb_column_4_4 et_pb_column_1    et_pb_css_mix_blend_mode_passthrough et-last-child">
			<div class="et_pb_module et_pb_text et_pb_text_0 single-blog-para et_pb_bg_layout_light  et_pb_text_align_left">
				<div class="et_pb_text_inner">
					<h1 class="primary-color1 center-text-mobile " style="margin:25px 0px;"><?php the_title(); ?></h1>
				<i class="fa fa-calendar" aria-hidden="true" style="letter-spacing:8px;display:inline-flex;">	<h5 class="primary-color1 " style="margin-bottom:20px;letter-spacing:0px;"><?php the_time('F jS, Y'); ?> </h5></i>
	               <?php the_content(); ?>
				</div>
			</div> <!-- .et_pb_text -->
		
		</div> <!-- .et_pb_text -->
	</div> <!-- .et_pb_column -->
				
				
</div> <!-- .et_pb_row -->




    