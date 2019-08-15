<?php get_header(); ?>
<div id="main-content">
   <div class="et_pb_section et_pb_section_0 et_section_regular et_pb_section_first" data-fix-page-container="on" style="padding:0px;">
      <div class="et_pb_row et_pb_row_0 blog-banner" id="all-blog-bg">

         <!-- .et_pb_column -->
         <div class="et_pb_column et_pb_column_1_1 et_pb_column_0    et_pb_css_mix_blend_mode_passthrough"  style="margin:0 auto;">
            <div class="et_pb_module et_pb_text et_pb_text_0 blog-banner-text et_pb_bg_layout_light  et_pb_text_align_center">
               <div class="et_pb_text_inner">
                  <h1 class="primary-color1 center-text-mobile"><span class="secondary-color1">THRIVING</span> ONLINE BUSINESS</h1>
                  <h5 class="primary-color1" style="text-align:center">Hone your skills and bullet-proof your mindset so you're ready for anything.</h5>
               </div>
            </div>
         </div>
         <!-- .et_pb_column -->
      </div>
      <!-- .et_pb_row -->
   </div>
   <div class="et_pb_section et_pb_section_1 et_section_regular">
      <div class="et_pb_row et_pb_row_1">
         <div class="et_pb_column et_pb_column_4_4 et_pb_column_2    et_pb_css_mix_blend_mode_passthrough et-last-child">
            <div class="et_pb_module et_pb_text et_pb_text_1 et_pb_bg_layout_light  et_pb_text_align_left">
               <div class="et_pb_text_inner">
                  <h1 class="primary-color1 " style="text-align:center;">BLOGS</h1>
               </div>
            </div>
            <!-- .et_pb_text -->
         </div>
         <!-- .et_pb_column -->
      </div>
      <!-- .et_pb_row -->
   </div>
   <div class="et_pb_section et_pb_section_2 et_section_regular" style="padding-top:0px;">
      <?php
         if ( have_posts() ) :
            global $valueIttaration ;
            $valueIttaration = 1;
            ?>
      <?php
         while ( have_posts() ) : the_post();
         ?>
      <?php
         get_template_part("template-fit-pro-blog");
         $valueIttaration++;
         ?>
      <?php
         endwhile;
         endif;
         	?>
   </div>
   <?php if( $valueIttaration%2 == 0):echo "</div>" ; endif;?>	
	<div class="all-blog-pagination">
		<?php echo paginate_links(); ?>
	</div>
   
</div>
<!-- #main-content -->
<!--<button id="ajexLoadMore" data-current ="1" data-total ="<?php echo $wp_query->max_num_pages?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">Load More</button> -->
<script>
   jQuery(document).ready( function($){
       
      $(document).on('click','#ajexLoadMore', function(){
           var that = $(this);
   	    var page = that.data('current');
   		var newPage = page+1;
   		var ajaxurl = that.data('url');
   		
   		alert(page + " "+newPage+" "+ajaxurl);
   		
   		
   		$.ajax({
   
   			url : ajaxurl,
   			type : 'post',
   			data : {
   				
   				page : page,
   				action: 'firpro_post_load_more'
   				
   			},
   			error : function( response ){
   				console.log(response);
   			},
   			success : function( response ){
   				
   				//console.log(response);
   				that.data('current', newPage);
   				$('#main-content').append( response );
   				
   			}
   
     });
   		
      });
   });
   
</script>
<?php
get_footer();