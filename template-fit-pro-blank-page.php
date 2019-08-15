<?php
/**
* Template Name: Fit Pro Blank Page Template
*/
wp_head();
?>


<div id="main-content">
   
   
   
       
       
				<?php 
					
					if( have_posts() ):
						
						
						while( have_posts() ): the_post();
							
						
					        the_content();
						
						endwhile;
						
					endif;
                
				?>
       
      
   
</div><!-- #main-content -->



<?php
wp_footer();
