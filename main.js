/* Add your JavaScript code here.

If you are using the jQuery library, then don't forget to wrap your code inside jQuery.ready() as follows:

jQuery(document).ready(function( $ ){
    // Your code in here
});

--

If you want to link a JavaScript file that resides on another server (similar to
<script src="https://example.com/your-js-file.js"></script>), then please use
the "Add HTML Code" page, as this is a HTML code that links a JavaScript file.

End of comment */ 

jQuery(document).ready(function( $ ){
  
  	//keep all accordion items closed by default
    $('.et_pb_accordion .et_pb_toggle_open').addClass('et_pb_toggle_close').removeClass('et_pb_toggle_open');
 
  	//close an open accordion item on click
    $('.et_pb_toggle_title').click(function(){
      var $toggle = $(this).closest('.et_pb_toggle');
      if (!$toggle.hasClass('et_pb_accordion_toggling')) {
        var $accordion = $toggle.closest('.et_pb_accordion');
        if ($toggle.hasClass('et_pb_toggle_open')) {
          $accordion.addClass('et_pb_accordion_toggling');
          $toggle.find('.et_pb_toggle_content').slideToggle(300, function() { 
            $toggle.removeClass('et_pb_toggle_open').addClass('et_pb_toggle_close'); 

          });
        }
        else if ($toggle.hasClass('et_pb_toggle_close')) {
          $accordion.addClass('et_pb_accordion_toggling');
          $toggle.siblings('.et_pb_toggle_open').find('.et_pb_toggle_content').slideToggle(300, function() { 
             $toggle.siblings('.et_pb_toggle_open').removeClass('et_pb_toggle_open').addClass('et_pb_toggle_close');

          });
          $toggle.find('.et_pb_toggle_content').slideToggle(300, function() { 
            $toggle.removeClass('et_pb_toggle_close').addClass('et_pb_toggle_open'); 

          });

        }
        setTimeout(function(){ 
          $accordion.removeClass('et_pb_accordion_toggling'); 
        }, 350);
      }
    });






});
