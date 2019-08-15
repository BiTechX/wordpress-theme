<?php 
//get_header('dashboard');
show_admin_bar( false );
wp_head();
//get_header();
?>

<div id="main-content">
   
   
				<?php 
					
					if( have_posts() ):
						
						while( have_posts() ): the_post();
							
						
							if ( comments_open() ):
							    ?>
							    <div class="blog-comments " style="">
							        <?php echo " Comments ".get_comments_number() ;?>
							    </div>
							    <?php
							    
								comments_template( '', true);
							
							    
							
							endif;
						
						endwhile;
						
					endif;
                
				?>
       
      
   
</div><!-- #main-content -->


<?php
//get_footer('dashboard');
wp_footer();

//get_footer();