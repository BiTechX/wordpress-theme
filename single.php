<?php get_header(); ?>
<div id="main-content">
   
   
   
       
       
				<?php 
					
					if( have_posts() ):
						
						
						while( have_posts() ): the_post();
							
							get_template_part( 'template-fit-pro-single' );
							
						/*	
							$next_post = get_next_post();
                            $previous_post = get_previous_post();
						the_post_navigation( array(
        'next_text' => '<span class="post-title">%title</span>' . get_the_post_thumbnail($next_post->ID,'thumbnail'),
        'prev_text' => '<span class="post-title">%title</span>' . get_the_post_thumbnail($previous_post->ID,'thumbnail'),
    ) );
                    */
                        	
							if ( comments_open() ):
							    ?>
							    <div class="blog-comments " style="">
							        <?php echo " Comments ".get_comments_number() ;?>
							    </div>
							    <?php
							    
								comments_template( '', true);
							    $post_type = get_post_type();
							    if( $post_type == "post" )
							        get_template_part( 'template-fit-pro-single-section-3' );	
							
							endif;
						
						endwhile;
						
					endif;
                
				?>
       
      
   
</div><!-- #main-content -->

<?php
get_footer();


