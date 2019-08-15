<?php
 require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
 header("Content-type: text/css"); 

    if ( ! function_exists( 'prefix_get_option' ) ) {
      function prefix_get_option( $option = '', $default = null ) {
        $options = get_option( 'theme_setting_change' ); 
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
      }
    }
    
    
    /**
     * 
     * hex2rgb() function use to change the hex to rgb colour convert
     * it have four parameter ($colour , $opacity ,$extra )
     * 
     * $colour is the hex code (required)
     * $opacity is use to add the opacity default value is 0.0  (optional)
     * $extra is use to extra attribute of css element default value (optional)
     * 
     * For example:
     *       echo hex2rgb('<?php echo $primary_color_1_HEX;  ?>' , '0.9'  , '!important' )  //input
     *       output is : rgba(14,43,61,0.9)!important
     * 
     * 
     * 
    */
    function hex2rgb( $colour , $opacity=0.0 , $extra = '' ) {
        if ( $colour[0] == '#' ) {
                $colour = substr( $colour, 1 );
        }
        if ( strlen( $colour ) == 6 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
        } elseif ( strlen( $colour ) == 3 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
        } else {
                return false;
        }
        $r = hexdec( $r );
        $g = hexdec( $g );
        $b = hexdec( $b );
        
        return 'rgba('.$r.','.$g.','.$b.','.$opacity.')'.$extra;

    }
     
   
    $options = get_option( 'theme_setting_change' );
    $primary_color_1_HEX = $options['opt-primary-color-1'];
    $primary_color_2_HEX = $options['opt-primary-color-2'];
    $secondary_color_1_HEX = $options['opt-secondary-color-1'];
    $secondary_color_2_HEX = $options['opt-secondary-color-2'];
    
   
    //echo $primary_color_1_HEX .'  '. hex2rgb($primary_color_1_HEX , '0.9','!important' )

?>

<style>

.weird-problem
{

}
/* Primary Color 1 Navy blue */
	
.primary-color1, .primary-color1-hover:hover
{
    color:<?php echo $primary_color_1_HEX;  ?>!important;
    
}

.primary-color1-background, .primary-color1-background-hover:hover
{
	background-color:<?php echo $primary_color_1_HEX;  ?>!important;
}

.primary-color1-overlay:before
{
	background-color:<?php echo hex2rgb($primary_color_1_HEX , '0.9'); ?>;
}

.primary-color1-banner:before
{
	background-color:<?php echo $primary_color_1_HEX;  ?>;
}

.primary-color1-border, .primary-color1-border-hover:hover
{
    border: 2px solid <?php echo $primary_color_1_HEX;  ?>!important;
}


.slider-style-two .et-pb-arrow-prev,.slider-style-two .et-pb-arrow-next
{
	color: <?php echo $primary_color_1_HEX;  ?>!important;
}

.slider-style-two .et-pb-controllers .et-pb-active-control
{
	background-color: <?php echo $primary_color_1_HEX;  ?>!important;
}
	
/* Primary Color 2 Yellow */
.primary-color2
{
	color:<?php echo $primary_color_2_HEX;  ?>;
}
.primary-color2-background
{
	background-color:<?php echo $primary_color_2_HEX;  ?>;
}

.primary-color2-banner:before, .hero-section:after
{
	background-color:<?php echo $primary_color_2_HEX;  ?>;
}

.slider-style-one .et_pb_slide_description .et_pb_slide_content
{
	color:<?php echo $primary_color_1_HEX;  ?>;	
}

.slider-style-two .et-pb-controllers a
{
	background-color:<?php echo $primary_color_2_HEX;  ?>;
}
/*Primary color2 in slider */

.slider-style-one .et-pb-controllers .et-pb-active-control
{
    background-color: <?php echo $primary_color_2_HEX;  ?>;
}

.slider-style-one .et-pb-arrow-prev,.slider-style-one .et-pb-arrow-next
{
	background-color: <?php echo $primary_color_2_HEX;  ?>;
}

.primary-color2-banner:before
{
	background-color:<?php echo $primary_color_2_HEX;  ?>;
}



/* Secondary Color 1 Red */
.secondary-color1, .et_pb_slide_content a, .et_pb_text_inner a, .secondary-color1-hover:hover
{
	color:<?php echo $secondary_color_1_HEX;  ?>!important;
}

.secondary-color1-background
{
	background-color:<?php echo $secondary_color_1_HEX;  ?>;
}

.secondary-color1-banner:before
{
	background-color:<?php echo $secondary_color_1_HEX;  ?>;
}
.secondary-color1-border, .secondary-color1-border-hover:hover
{
    border: 2px solid <?php echo $secondary_color_1_HEX;  ?>!important;
}

.secondary-color1-overlay:before
{
    
	background-color:<?php echo hex2rgb($secondary_color_1_HEX , '0.9'); ?>;
}



/* Secondary Color 2 Black*/
.secondary-color2
{
	color:<?php echo $secondary_color_2_HEX;  ?>;
}

/* White color */
.white, .white-hover:hover
{
	color:#fff!important;
}

.white-background, .white-background-hover:hover
{
	background-color:#fff!important;
}

.white-overlay:before
{
	background-color:rgba(255,255,255,0.9);
}
	
.grey-border
{
    border: 2px solid rgba(0,0,0,0.1);    
}

.drop-shadow-right, .drop-shadow-right:focus
{
    box-shadow: 10px 0px 10px 0px rgba(0,0,0,0.1);   
}
	
/* Navigation */
#main-header
{
	background-color:<?php echo $primary_color_1_HEX;  ?>!important;	
	max-width:960px;
	left: calc(50% - 480px);
}
#main-header .container
{
	width:95%;
}

#top-menu-nav
{
	float: none;
	width: 80%;
	margin: 0 auto;
	text-align: center;
}

#et-top-navigation
{
	padding-left:0px!important;
	width:100%;
		
}
#top-menu, .fullwidth-menu, nav#top-menu-nav, nav.fullwidth-menu-nav
{
	float:none;
	text-align:center;
}
	
#top-menu li:nth-last-child(2)
{
	position:absolute;
	right:125px;
}
#top-menu li:nth-last-child(2) a
{
	background-color:<?php echo $secondary_color_1_HEX;  ?>!important;
	font-weight:500;
	border: 2px solid <?php echo $secondary_color_1_HEX;  ?>!important;
	border-radius: 60px!important;
}

#top-menu li:nth-last-child(2) a:hover
{
	color:<?php echo $secondary_color_1_HEX;  ?>!important;
	background-color:transparent!important;
	border: 2px solid <?php echo $secondary_color_1_HEX;  ?>!important;
	opacity:1;
}
	
#top-menu li:last-child 
{
	position:absolute;
	right:10px;
}
#top-menu li:last-child a
{
	background-color:<?php echo $primary_color_2_HEX;  ?>!important;
	color:<?php echo $primary_color_1_HEX;  ?>!important;
	font-weight:500;
	border: 2px solid <?php echo $primary_color_2_HEX;  ?>!important;
	border-radius: 60px!important;
}

#top-menu li:last-child a:hover
{
	color:<?php echo $primary_color_2_HEX;  ?>!important;
	background-color:transparent!important;
	opacity:1;
}

@media (max-width: 980px)
{
	#main-header
	{

		left: 0px;
	}

}
#top-menu-nav
{
	width:95%!important;
}
#et_top_search
{
	display:none;
}

#top-menu li 
{

	padding-right:0px;
	padding-left:0px;

}

.et_header_style_left #et-top-navigation, .et_header_style_split #et-top-navigation
{
	padding-top:20px;
	padding-bottom:20px;
}

@media (min-width: 981px)
{
	.et_header_style_left .et-fixed-header #et-top-navigation, .et_header_style_split .et-fixed-header #et-top-navigation {
			padding-top: 20px;
	}
}

#top-menu li a
{
	color:#fff!important;
	text-transform:uppercase;
	font-weight:500;
	border: 2px solid rgba(0,0,0,0);
	border-radius: 60px!important;
    padding: 0.5em 1.5em!important;
}

#top-menu li a:hover
{
	color:<?php echo $primary_color_2_HEX;  ?>!important;
	border: 2px solid <?php echo $primary_color_2_HEX;  ?>!important;
	opacity:1!important;
}
/*Mobile navigation*/
.mobile_menu_bar_toggle:before
{
	color:#fff!important;
}

#mobile_menu
{
	background-color:<?php echo $primary_color_1_HEX;  ?>!important;
	border-top:0px;
}


#mobile_menu li 
{
	text-align:center;
}

#mobile_menu li a
{
	color:#fff;
}

@media (max-width: 980px)
{
	#main-header  {
			position: fixed!important;
	}
}
/* Layouts common */
h1, h2, h3, h4, h5, h6
{
	font-weight:800!important;
}
@media (max-width: 980px)
{
	.center-text-mobile, h1, h2, h3, h4, h5, h6
	{
		text-align:center!important;
	}
}

.dark-section-centered:before, .primary-color1-overlay:before, .secondary-color1-overlay:before, .white-overlay:before, .hero-section:before
{
	content:"";
	display: block;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
}
/* Dark layouts */
.dark-section-centered:before
{
	background-color: rgba(0, 0, 0, .6);
}

.dark-section-centered p, .dark-section-centered h1, .dark-section h1
{
	color:#fff;
}


/* Layouts */
@media(max-width:767px)
{
	.et_pb_section, .et_pb_section *
	{
		animation:none !important;
	}
}
	
.fullscreen
{
	min-height:100vh;
	display:flex;
	align-items:center;
}

.desktop-fullscreen
{
	display:flex;
	align-items:center;	
}

.padding-20px
{
	padding:20px;
}

@media (min-width: 1101px)
{
	.desktop-fullscreen
	{
		min-height:100vh;

	}
}


@media (min-width: 981px)
{
	.padding-top-large-screen
	{
		padding-top:120px!important;

	}
}


.theme-rounded-button
{
	border-radius: 60px!important;
	padding: 1em 3.5em!important; 
	font-size:10px!important; 
	text-align: center;
}

.transparent-background, .transparent-background-hover:hover
{
	background-color:transparent!important;
}
.theme-rounded-button:after
{
	display:none;
}
.max-width-960px
{
	max-width:960px;
}
/* Hero section */
.hero-section .banner-image-column
{
	padding-bottom:0px!important;
}


.hero-section:before
{
	background-image:linear-gradient(to bottom, rgba(255,255,255,0.85) , rgba(255,255,255,1));
}


@media (min-width: 981px)
{
	.hero-button-column
	{
		max-width:200px!important;
		margin-right:0px!important;
	}	
	
	/* Opacity of the banner */
	.hero-section:after
	{
		opacity:0.8;
	}
}

@media (max-width: 980px) and (min-width:768px)
{
	.hero-button-column
	{
		width:45%!important;
	}	
	
	.hero-button-column:nth-child(1)
	{
		margin-right:10%!important;
	}
	
	.hero-button-row
	{
		max-width: 400px;
    	margin: 0 auto;
	}
}

@media (max-width: 980px)
{
	.hero-single-button .et_pb_button_module_wrapper
	{
		text-align:center!important;
	}
	

}
	
@media (max-width: 767px)
{
	.hero-button-column .et_pb_button_module_wrapper
	{
		text-align:center;
	}
	
	.hero-button-row
	{
		max-width: 400px;
    	margin: 0 auto;
	}
}
	
.hero-section-image
{
	padding-bottom:0px;
}


/* Slider Style 1 */
.slider-style-one .et_pb_slide
{
	background-color:transparent!important;	
}

.slider-style-one .et_pb_slide_image
{
	margin-top: 50px!important;
    position: relative;
    margin-left: auto;
    margin-right: auto;	
}

.slider-style-one .et_pb_slide_description
{
	float: inherit;
	padding-top:0px;

    padding: 20px;
	background: #fff;
	margin-bottom: 75px;
}

.slider-style-one .et-pb-controllers, .slider-style-two .et-pb-controllers
{
    bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slider-style-one .et-pb-controllers a
{
	background-color:#fff;
}

.slider-style-one .et-pb-arrow-prev,.slider-style-one .et-pb-arrow-next
{
    color: #fff!important;
    border-radius: 50px;
    width: 45px;
    height: 45px;
    padding-left: 13px;
    padding-top: 12px;
	
}


.slider-style-one .et-pb-arrow-prev:before
{
	content:"\44";
}

.slider-style-one .et-pb-arrow-next:before
{
	content:"\45";
}

.slider-style-one .et-pb-arrow-prev:before, .slider-style-one .et-pb-arrow-next:before
{
	font-size:20px;	
}

.slider-style-one .et-pb-controllers .et-pb-active-control, .slider-style-two .et-pb-controllers .et-pb-active-control
{
    width: 10px;
    height: 10px;
}

.slider-style-one h5
{
	color: <?php echo $primary_color_1_HEX;  ?>!important;
}
	
@media (max-width: 767px)
{
	.slider-style-one .et_pb_slide_image, .slider-style-one .et_pb_slide_video {
	    display: block!important;
	}
}

.et_pb_slide_content
{
	font-size:14px;
}
	
@media(min-width:768px){
.et_pb_slide_description {
   width: 47.25%;
   text-align: center;
}
.slider-style-one .et_pb_slide_description {
  width: 47.25%;
  text-align: center;
}
}
	
/* Theme Accordion */
.et_pb_accordion .et_pb_toggle_open h5:before, .et_pb_accordion .et_pb_toggle_close h5:before
{
	transform:rotate(0deg);
	display:block!important;
	right:auto;
	left:0;
	content: "\43";
	font-size:30px;
	
	-webkit-transition: transform 0.2s ease-out;
    -moz-transition: transform 0.2s ease-out;
    -o-transition: transform 0.2s ease-out;
    transition: transform 0.2s ease-out;
}

.et_pb_accordion .et_pb_accordion_item:nth-child(odd).et_pb_toggle_open h5:before, .et_pb_accordion .et_pb_accordion_item:nth-child(odd).et_pb_toggle_close h5:before
{
	color:#fff;
}

.et_pb_accordion .et_pb_accordion_item:nth-child(even).et_pb_toggle_open h5:before, .et_pb_accordion .et_pb_accordion_item:nth-child(even).et_pb_toggle_close h5:before
{
	color:<?php echo $primary_color_1_HEX;  ?>;
}
	
.et_pb_accordion .et_pb_toggle_close h5:before
{
	transform:rotate(-90deg);
}
.et_pb_accordion .et_pb_toggle.et_pb_text_align_left .et_pb_toggle_title, .et_pb_accordion .et_pb_toggle.et_pb_text_align_left h5.et_pb_toggle_title, .et_pb_accordion.et_pb_text_align_left .et_pb_toggle_title, .et_pb_accordion.et_pb_text_align_left h5.et_pb_toggle_title, .et_pb_toggle .et_pb_toggle_title, .et_pb_toggle h5.et_pb_toggle_title, .et_pb_toggle.et_pb_text_align_left .et_pb_toggle_title, .et_pb_toggle.et_pb_text_align_left h5.et_pb_toggle_title
{
	padding:0px 0px 0px 50px;
}

.et_pb_toggle_content
{
	padding:10px 0px 0px 80px;
}
.et_pb_accordion_item:nth-child(odd)
{
	background-color:<?php echo $secondary_color_1_HEX;  ?>;
	border: 1px solid <?php echo $secondary_color_1_HEX;  ?>;
}

.et_pb_accordion_item:nth-child(odd) .et_pb_toggle_title, .et_pb_accordion_item:nth-child(odd) .et_pb_toggle_content
{
	color:#fff;
}
.et_pb_accordion_item:nth-child(even)
{
	background-color:<?php echo $primary_color_2_HEX;  ?>;
	border: 1px solid <?php echo $primary_color_2_HEX;  ?>;
}
.et_pb_accordion_item:nth-child(even) .et_pb_toggle_title, .et_pb_accordion_item:nth-child(even) .et_pb_toggle_content
{
	color:<?php echo $primary_color_1_HEX;  ?>;
}

.et_pb_accordion h5
{
	text-align:left!important;
}
/* Flipping module */
.flip-card-section
{
	text-align:center;
	margin: 0 auto;
	
}

.flip-card-section .divider_row
{
	padding:0px;
	margin:0px;
}

.flip-card-section .et_pb_divider
{
	height: 0px;
    opacity: 0;	
}

.flip-card {
  background-color: transparent;
  height: 200px;
  perspective: 1000px;
	display:inline-block;
	padding:0px!important;
}

.flip-card-2-column {
  background-color: transparent;
  height: 300px;
  perspective: 1000px;
	display:inline-block;
	padding:0px!important;
}
	
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
 
}

.flip-card:hover  .flip-card-inner, .flip-card-2-column:hover .flip-card-inner {
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
}


.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}

.flip-card-front {
  transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg); 
}

.flip-card-back {
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  z-index: 1;
}

.flip-card
{
	margin:10px;
	max-width:300px;
}
	
.flip-card-2-column
{
	margin:10px;
	max-width:450px;
}
	
.flip-card-front {
	display: flex;
	justify-content: center;
	align-items: center;
}

.flip-card-front img {
	max-width:70px;
}

.flip-card-front h6 {
	max-width: 180px;
}

.flip-card .flip-card-back .et_pb_text_inner
{
	height:160px;
	overflow-y:auto;
}
	
.flip-card-2-column .flip-card-back .et_pb_text_inner
{
	height:240px;
	overflow-y:auto;

}

.flip-card-back {
  padding:20px;
}
	
/*scrollbar behind card */
.flip-card .flip-card-back .et_pb_text_inner::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.flip-card .flip-card-back .et_pb_text_inner::-webkit-scrollbar
{
	width: 6px;
	background-color: #F5F5F5;
	
}


.flip-card .flip-card-back .et_pb_text_inner::-webkit-scrollbar-thumb 
{
	background-color: <?php echo $secondary_color_1_HEX;  ?>!important;	
}	
	
.flip-card-2-column .flip-card-back .et_pb_text_inner::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.flip-card-2-column .flip-card-back .et_pb_text_inner::-webkit-scrollbar
{
	width: 6px;
	background-color: #F5F5F5;
	
}


.flip-card-2-column .flip-card-back .et_pb_text_inner::-webkit-scrollbar-thumb 
{
	background-color: <?php echo $primary_color_2_HEX;  ?>!important;	
}
	


/* Banner section */

@media (min-width: 981px)
{
	.banner-section-left:before, .banner-section-right:before, .hero-section:after
	{
		content: "";
		max-width: 500px;
    	width: 45vw;
		position: absolute;
		height: 100%;
		top: 0px;
		color: #f0f0f0;

	}
	.banner-section-left:before
	{
		transform: skew(30deg); 
		-webkit-transform: skew(30deg);
		left: 0px;
	}	
	.banner-section-right:before, .hero-section:after
	{
		transform: skew(-30deg); 
		-webkit-transform: skew(-30deg);		
		right: 0px;
	}
	
}

.banner-section-right, .hero-section
{
	max-width: 100%;
    overflow: hidden;
}
.banner-text-column
{
	max-width:600px;
}

.banner-section, .simple-banner
{
	height:960px;
	display:flex;
	align-items:center;
}

@media (max-width: 767px)
{
	.banner-section, .simple-banner 
	{
		height:100vh;
	}
	
}

@media (min-width: 768px)
{
	.banner-section img, .about-us-section img
	{
		height:640px;
		object-fit:cover;
		object-position:top;
	}
	
	.banner-section.contain-image img
	{
		object-fit:contain;
	}
	.image-stick-bottom, .image-stick-bottom .et_pb_row
	{
		padding-bottom:0px!important;
		margin-bottom:0px!important;
	}
}

@media (max-width: 980px)
{
	.banner-row
	{
		height: 100%;
	}
	.banner-text-column, .banner-image-column
	{
    display: flex;
    align-items: center;	
	height: 800px;
	}
	.banner-text-column
	{
		z-index: 10;
    position: absolute;
    
	}
	

	.banner-section img
	{
		opacity:0.1;
	}

}

/* Enroll form section */


@media (max-width: 980px)
{
	.enroll-div
	{
		margin:0 auto;
	}
	.enroll-form-column
	{
		flex-wrap: wrap;
	}
	
	.banner-section.enroll-banner-section
	{
		height:auto;
	}
}
	

/* Exclusive About us section */

@media (max-width: 980px)
{
	.about-us-section .et_pb_image_wrap 
	{
		height: 220px;
		width: 220px;
		overflow: hidden;
		border-radius: 140px;
		border: 3px solid <?php echo $secondary_color_1_HEX;  ?>;
	}

}



/*Before after testimonial*/
.twentytwenty-before, .twentytwenty-after
{
	height: 300px;
    width: 100%;
    object-fit: cover;
    object-position: top;
}

.testimonial-before-after .testimonial-description .et_pb_text_inner
{
	padding:20px;
	background-color:#fff;
}

.baie_before_after_image
{
	margin-bottom:0px!important;
}

/*Footer*/
#main-footer
{
	background-color:<?php echo $secondary_color_2_HEX;  ?>;
}

#main-footer .container
{
	max-width:940px!important;
}
.footer-widget a
{
	color:#fff;
}
#footer-bottom
{
	display:none;
}

@media (max-width: 767px)
{
	.footer-widget, .fwidget
	{
		text-align:center;
		width:100%;
		margin:0;
	}
	
}
	
.footer-widget:nth-child(3) .widget_text
{
	width: 100%;
}

/* Video */
.fullscreen-video
{
	padding:0px;
}
.fullscreen-video .et_pb_row
{
	height:600px;
	box-shadow: 57px 57px 139px 0px <?php echo hex2rgb($primary_color_1_HEX , '0.18'); ?>; 
	text-shadow: 57px 57px 139px <?php echo hex2rgb($primary_color_1_HEX , '0.18'); ?>; 
	padding:0px;
	z-index:1;
}

@media (max-width: 767px)
{
	.video-section .et_pb_row
	{
		padding: 0px!important;
		width: 100%;
	}
	/*because this row has no padding */
	.video-section .et_pb_text_inner
	{
		width:80%;
		margin:0 auto;
	}
}

@media (min-width: 981px)
{
	.video-height600px	iframe
    {
        height:600px!important;
    }
    
    .video-height600px	.fluid-width-video-wrapper
    {
        padding-top:70%!important;
    }
}

/* Animatable button */
.animatable-button-arrow {
    border-style: dashed;
    border-color: transparent;
    border-width: 0.20em;
    display: -moz-inline-box;
    display: inline-block;
    /* Use font-size to control the size of the arrow. */
    font-size: 100px;
    background-color:transparent; /* change background color acc to bg color */ 
	position:absolute;
    border-left-color: <?php echo $primary_color_1_HEX;  ?>!important;
	opacity:1;
	margin-left: -1px;
	-webkit-transition: opacity 0.2s ease-out;
	-moz-transition: opacity 0.2s ease-out;
	-o-transition: opacity 0.2s ease-out;
	transition: opacity 0.2s ease-out;
	-webkit-touch-callout: none; /* iOS Safari */
	-webkit-user-select: none; /* Safari */
	-khtml-user-select: none; /* Konqueror HTML */
	-moz-user-select: none; /* Firefox */
	-ms-user-select: none; /* Internet Explorer/Edge */
	user-select: none; /* Non-prefixed version, currently
	supported by Chrome and Opera */
    
}

.animatable-button
{
	width:100%;
	height: 40px;
	
	cursor:pointer;
	color: <?php echo $primary_color_2_HEX;  ?>;
    

}

.animatable-button-inner
{
	width:85%;
	height: 40px;
	
	display:inline-block;
	vertical-align:top;
	-webkit-transition: width 0.3s ease-out;
	-moz-transition: width 0.3s ease-out;
	-o-transition: width 0.3s ease-out;
	transition: width 0.3s ease-out;
	
}

.animatable-button:hover .animatable-button-inner
{
	width:100%;

}

.animatable-button:hover .animatable-button-arrow
{
	opacity:0;
	-webkit-transition: opacity 0.2s ease-out;
	-moz-transition: opacity 0.2s ease-out;
	-o-transition: opacity 0.2s ease-out;
	transition: opacity 0.2s ease-out;
	
}

.animatable-button-arrow:before
{
	font-family: ETmodules!important;
    content: '\45';
    display: block;
    position: absolute;
    top: -18px;
    left: -45px;
    font-size: 35px;
    -webkit-transition: 0.5s ease-out;
    transition: 0.5s ease-out;
}

.animatable-button-text
{
    text-align: center;
    margin-top: -29px;
	font-weight: 700;
}

/* Contact form 7 */
.contact-form-button
{
	width: 100%;
    text-align: inherit;
    color: inherit!important;
    padding: 0px;
    border: 0px;
}
#wpcf7-f747-p875-o1{
	box-shadow: 40px 10px 35px -15px rgba(0,0,0,0.1);
	border: 1px solid rgba(0,0,0,0.1);
	padding-top:20px;
	
}

.wpcf7-not-valid-tip{
	display:flex;
	justify-content:center;
	text-align:center !important;
}
#wpcf7-f747-p875-o1 p{
	padding-bottom:3px;
}
#wpcf7-f747-p875-o1 p:not(.has-background):last-of-type{
	padding-bottom:0px !important;
}
.wpcf7-form-control{
	width:90%;
	background:#fafafa !important;
	height:40px;
	text-align:center !important;
	display:flex;
	border-color:#ccc;
	margin:auto !important;
	
}
.wpcf7-response-output {
	text-align:center !important;
}
.wpcf7-form-control:focus{
	background:#fefbee !important;
	border-color:<?php echo $primary_color_1_HEX;  ?>;
}
blockquote{
	border-color:<?php echo $primary_color_1_HEX;  ?>!important;
}
	
/* Comment section */
.wpdiscuz-form-bottom-bar,.wpd-field-rating,.wpdiscuz-form-top-bar,.wpdiscuz-front-actions,.wpd_label__check,.wpd_label,.wc-comment-link,.wc-comment-label,.wc_editable_comment,.wc_stick_btn,.wc_close_text
{
	display:none !important;
}
.wpd-form-col-right,#wpcomm .button{
	float:left !important;
}
.wc-comment-left img,.wc-field-avatararea img{
	border-radius:50% !important
}
#wcThreadWrapper{
	box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);	
}
#wpcomm .button,.wc-reply-button {
border-radius: 60px!important;
    padding: 1em 3.5em!important;
    font-size: 10px;
    text-align: center;
	border: 2px solid <?php echo $secondary_color_1_HEX;  ?>!important;
	background-color: <?php echo $secondary_color_1_HEX;  ?> !important;
	color:#fff !important;
	
}
.comments-area{
	width:80% !important;
	margin:auto;
}
.comments-area{width:auto;}
.wc-comment-right{
	
	
}
.wc-reply-button{
	display:table !important;
	margin:15px 0px !important;
}
#wpcomm .wc-comment-header {
     border-top: none !important;
}
#wpcomm .button:hover,.wc-reply-button:hover,.wc-cta-button:hover{
	color: <?php echo $secondary_color_1_HEX;  ?>!important;
	background-color: transparent!important;
    border: 2px solid <?php echo $secondary_color_1_HEX;  ?>!important;
}
#wc-main-form-wrapper-0_0{
box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);	
	height:200px;
}
#wc-textarea-0_0{
	height:250px;
	width:80%;
}
.wpdiscuz-textarea-wrap{
	height:127px;
	border-color:#fbfcfc !important;
}
.custom_field_5cc84a82e166d-wrapper{
	display:none !important;
}

#wcThreadWrapper
{
	padding:30px;	
}

/*----end comment section--*/
.wpcf7-text{
	margin:auto;
}
.center-inner{
	display:flex;
	margin:auto;
}
	
/* Blog */
.blog-banner{
	display:flex;
	height:400px;
	align-items:center;
}
.blog-banner-text{
	text-align: center;
    max-width: 500px;
    margin: auto;
}

#all-blog-bg,#single-blog-bg{
	
	min-width:100% ;
	height:400px;
	padding: 0px;
}
#all-blog-bg{
	background-image: url(http://bitechx.com/fitprotest/wp-content/uploads/2019/04/Layer-9.png) !important;
	
}
.single-blog-cover img{
	width:100%;
	height:600px;
	object-fit:cover;
	
}
.single-blog-para{
	max-width:960px;
	margin:auto;
}
@media(min-width:981px){
	.blog-card{
	padding: 0px 20px;
    height: 300px;
    width: 25% !important;
    display: grid;
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
    align-content: center;
}
	.blog-margin-right{
		margin-right:4.125% !important;
	}
	.blog-margin-left{
		margin-left:4.125% !important;;
	}
	.blog-img-col{
		margin-right: 0px !important;
    max-height: 300px;
	}
	.blog-img-col img {
		height:300px;
		object-fit:cover;
		width:100%;
	}
	.centarize{
		display:flex;
		margin:0 auto;
	}
}
.blog-card{
	padding: 0px 20px;
    height: 300px;
       display: grid;
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
    align-content: center;
}
@media(min-width:768px ) and (max-width:980px){
	.blog-img-col{
		margin-right: 0px !important;
        margin-left:auto !important;
		max-height:300px;
	}
	.blog-banner-text{
	max-width:400px;	
	}
	.blog-margin-right{
	margin-bottom:60px !important;
	}
	.blog-img-col img {
		height:300px;
		width:100%;
		object-fit:cover;
	}
	.blog-card{
	margin-right:auto !important;
	}
}
@media(max-width:767px){
	.blog-img-col{
		margin-bottom: 0px !important;
	}
	
	.row-wider{
		width:100% !important;
		padding:0px 20px !important;
	}
	.blog-img-col img {
		height:300px;
		width:100%;
		object-fit:cover;
	}
	.blog-card{
	margin-bottom:60px !important;	
	}
}
@media(max-width:767px) and (min-width:480px){
	.blog-img-col{
		margin-bottom: 0px !important;
     	width:80% !important;
		margin:auto !important;
	}
	.blog-card{
	width:80% !important;
		margin:auto !important;
		margin-bottom:20px !important;
	}
	.row-wider{
		width:100% !important;
		padding:20px !important;
	}
	.blog-img-col img {
		height:300px;
		width:100%;
		object-fit:cover;
	}
}
.et_pb_row .et_pb_column.et-last-child, .et_pb_row .et_pb_column:last-child, .et_pb_row_inner .et_pb_column.et-last-child, .et_pb_row_inner .et_pb_column:last-child {
   margin-right: inherit!important;
}

/* Testimonial Section CSS*/

.row-900px{
	max-width:900px;
}
.testimonial-card{
	width:80%;
	
	display: inline-flex;
}
.drop-shadow{
	box-shadow: 8px 8px 12px 8px rgba(0,0,0,0.05);
}
.testimonial-img{
	width: 38% ;
	display: flex;
	justify-content: center;
	
}
.testimonial-img img{
	height: 300px;
    object-fit: cover;
    width: 100%;
    padding: 40px;
}
.testimonial-text{
	width: 58% ;
	padding: 40px 20px;
}
.testimonial-section{
display:grid;
justify-content:center;
}
@media(max-width: 767px){
	.testimonial-img{
	width: 100%;
	
}
	.testimonial-img img{
	
    padding: 25px;
}
.testimonial-text{
	width: 100%;
	padding: 0px 25px;
	padding-bottom:25px;
}
.testimonial-card{
	display: inherit;
	}
}



		/*----Height and random css---*/


.light-section h1{
	/*color:#f5d35d !important;*/
}
.light-section:before{
	background-color: rgba(255, 255, 255, 0.8) !important;
	/*filter: grayscale(100%);*/
}
.height-down{
	height:650px !important;
}
.height-down2{
	height:720px !important;
}
.height-down3{
	height:775px !important;
}
	
			/*-----Comment Section CSS------*/
#wc-main-form-wrapper-0_0{
<?php echo logged_in_user_css_control( 'display:block ;' , 'display:none ;' ) ; ?>
		
}


.wc_comm_submit {
	margin-left: 20px !important;
    margin-top: -10px !important;
}
.single-post .et_pb_text_inner p
{
color:#0e2b3d!important
}
.padding-0-top{
	padding-top:0px;
}

.by-wpdiscuz
{
	display:none!important;
}
#wpcomm .wc-form-footer{
    padding-bottom: 30px;
   /* margin-top: 20px;*/
	background-color:#D1545B!important;
	border-bottom:none !important;
}
#wpcomm .button, .wc-reply-button {
   
    border: 2px solid #fff!important;
    background-color: transparent !important;
    color: #d1545b !important;
}
#wpcomm .wc-cta-active{
	background-color:transparent !important;
	color: #FFFFFF !important;
}
#wpcomm input[type="submit"] {
background-color:#fff !important;
	margin-top: 10px !important;
	color: #d1545b !important;
}
#wpcomm .button:hover , .wc-reply-button:hover {
   
   
   border: 2px solid #fff!important;
    background-color: #d1545b !important;
    color: #fff !important;
}
.wc-comment-footer{
	padding-top:5px !important;
}
.far {
	display:none !important;
}
.wpdiscuz-textarea-wrap{
	box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.05);
    margin-bottom: 30px;
} 
.wpd-form-col-right{
	margin-top:14px !important;
}
.wc-comment-right{
    background:#fff !important;	
	box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.05)!important;
    margin-bottom: 30px!important;
	
}
.wpd-field{
	padding: 25px 78px 0px 85px !important;
}


.wc-vote-result-like,.wc-vote-result-dislike{
	color:#0e2b3d!important;
	border-right-color: #0e2b3d!important;
}
.wpd-field::placeholder{
	color:#0e2b3d!important;
}
#wpcomm .wc-field-textarea textarea{
	color:#0e2b3d!important;
}
.fa-thumbs-up,.fa-thumbs-down{
 /*c: #0e2b3d !important; */
	color:#D1545B!important;
}
.wc-comment-text{
	padding:20px !important;
}
.wc-comment-text,.wc-comment-date{
	color:#0e2b3d !important;
}
#wpcomm {
border-top:none !important;
}
.wc-reply-button {
	margin-top:25px !important;
}
.wc-thread-wrapper {
	margin-top:40px !important;
	box-shadow: 4px 4px 4px 4px rgba(0,0,0,0.05) !important;
	padding:15px !important;
}

#wc-main-form-wrapper-0_0 {
	/*box-shadow: 4px 4px 4px 4px rgba(0,0,0,0.05) !important;*/
	min-height:214px !important;
}
#wpcomm .wpdiscuz-textarea-wrap {
    border: none !important;
    box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.05) !important;
}

.wc_self_vote,.wc_vote_only_one_time,.wc_invalid_field{
	color: #fff!important;
	border-color:#D1545B!important;
	background-color: #D1545B!important;
}
.wc_held_for_moderate{
	color: #0e2b3d !important;
	border-color:#f5d35d !important;
	background-color: #f5d35d !important;
}
.fa-rss{
	display:none !important;
}
.blog-comments{
	padding:30px 0px;
	color:#0e2b3d;
	max-width:950px;
	margin:auto;
	width:80%;
	text-transform:uppercase;
	font-weight:bold;
	font-size:30px;
}
@media(max-width: 767px)
{
	.testimonial-text{
	text-align: center;
	}
	.blog-comments{
		text-align:center;
	}
	
}



		/*-----Login And Register Page CSS----*/

.um-page-login article h1,.um-page-register article  h1{
	color: #0e2b3d!important;
	text-align:center !important;

}
.um-page-loggedin .um-misc-with-img{
	border:none !important;
	text-align:center !important;
	color: #d1545b!important;
    text-transform: uppercase;
	font-size:20px !important;
}
#theme_login_page{
	color: #d1545b!important;
	text-align:center;
	font-size: 16px;
    margin-bottom: 20px;
}
#login-page .um-misc-ul{
	list-style-type: none !important;
     margin: auto !important; 
	padding:0px !important;
     display: table !important; 
     text-align: center !important; 
     justify-content: center !important; 
	color: #0e2b3d!important;
	line-height:32px !important;
}
#login-page .um-misc-ul a{
text-decoration:none !important;
color:#0e2b3d!important;
	font-size: 18px;
    font-weight: 600;
}
#login-page .um-misc-ul a:hover{
text-decoration:none !important;
color:#d1545b!important;
	
}
#theme_login_page ::placeholder{
	color: #0e2b3d!important;
	opacity:0.6 !important;
}
#login-page ::placeholder{
	color: #0e2b3d!important;
	opacity:0.6 !important;
}
#theme_login_page .entry-title .main_title {
	color: #0e2b3d!important;
	text-align:center !important;

}
#theme_login_page .um .um-form input[type=text], .um .um-form input[type=tel], .um .um-form input[type=password], .um .um-form textarea {
    color: #0e2b3d !important;
}
.um-form .um-field .um-field-area input.um-form-field.um-validate-not-matched, .um-form .um-field .um-field-area input.um-form-field.um-validate-not-matched:focus, .um-form .um-field .um-field-area input.um-form-field.um-validate-username-exists, .um-form .um-field .um-field-area input.um-form-field.um-validate-username-exists:focus {
    border-color: #d1545b!important;
}
#theme_login_page .select2-selection__placeholder {
color: #0e2b3d !important;
	opacity:0.6 !important;
}
.select2-results li.select2-results__option.select2-results__option--highlighted {
    background: none !important;
    background:  #0e2b3d !important;
    color: #fff!important;
}
.select2-results li {
 
    font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif !important;
    /*background: #0e2b3d !important;*/
    color: #0e2b3d  !important;
}
#theme_login_page .select2-results__option[aria-selected]{
	color: #0e2b3d !important;
}
#theme_login_page .um .um-field-label{
	color: #0e2b3d!important;
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif !important;
}

#theme_login_page .um-faicon-calendar,.um-icon-help-circled {
color: #0e2b3d!important;
}
#theme_login_page .um-field-text .um-field-area:focus{

	
}
#theme_login_page .um-col-alt{
	margin:50px 0px 0px 0px !important;
}
#login-page .um-col-alt{
	margin:40px 0px 0px 0px !important;
}
#theme_login_page .um-left .um-button, #login-page .um-left .um-button{
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif !important;
	background-color: #d1545b!important;
    font-weight: 500 !important;
    border: 2px solid #d1545b!important;
    border-radius: 60px!important;
	text-transform:uppercase !important;
}
#theme_login_page .um-left .um-button:hover,#login-page .um-left .um-button:hover{
	color: #d1545b!important;
    background-color: transparent!important;
    border: 2px solid #d1545b!important;
	opacity:1;
}
#theme_login_page .um-right .um-button,#login-page .um-right .um-button{
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif !important;
	background-color: #f5d35d!important;
    color: #0e2b3d!important;
    font-weight: 500 !important;
	border-radius: 60px!important;
    border: 2px solid #f5d35d!important;
	text-transform:uppercase !important;
}
#theme_login_page .um-right .um-button:hover,#login-page .um-right .um-button:hover{
color: #f5d35d!important;
    background-color: transparent!important;
	opacity: 1;
}
 #login-page .um-field-checkbox-option,#login-page .um-field-checkbox-state i,#login-page .um-field-radio-state i ,#login-page .um-icon-android-checkbox-outline:before{
	color:#0e2b3d !important;
}
#login-page .um-icon-android-checkbox-outline:before{
color:#d1545b!important;
}
#login-page a.um-link-alt{
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif !important;
	color:#0e2b3d!important;
}
#login-page a.um-link-alt:hover{
	text-decoration:none !important;
	color:#d1545b!important;
	
}
#theme_login_page .um .um-form input[type=text]:focus,#theme_login_page .um .um-form input[type=email]:focus,#theme_login_page .um .um-form  input[type=password]:focus,#theme_login_page .um .um-form input[type=tel]:focus,#login-page .um .um-form input[type=text]:focus,#login-page .um .um-form  input[type=password]:focus{
	border:none !important;
	box-shadow:none !important;
}
#theme_login_page .um-field-radio-option,#theme_login_page .um-field-checkbox-state i,#theme_login_page .um-field-radio-state i {
	color: #0e2b3d!important;
}
#theme_login_page .um-form input[type=number]{
	width:100% !important;
	/*padding:0px !important;*/
	height:40px !important;
	 border: 1px solid rgba(0,0,0,0.1)!important;
}
#theme_login_page input.text, input.title, input[type=email], input[type=password], input[type=tel], input[type=text], select, textarea,#login-page input.text {
	 border: 1px solid rgba(0,0,0,0.1)!important;
}
.um .um-form input[type=text], .um .um-form input[type=tel], .um .um-form input[type=number], .um .um-form input[type=password], .um .um-form textarea, .um .upload-progress, .select2-container .select2-choice, .select2-drop, .select2-container-multi .select2-choices, .select2-drop-active, .select2-drop.select2-drop-above {
    /* border: 2px solid #ddd !important; */
	color: #0e2b3d !important;
	 border: 1px solid rgba(0,0,0,0.1)!important;
}
#theme_login_page .um-field-text .um-field-area,#theme_login_page .um-field-password .um-field-area,#theme_login_page .um-field-country .um-field-area,#theme_login_page .um-field-date .um-field-area,#theme_login_page .um-field-number .um-field-area,#login-page .um-field-text .um-field-area,#login-page .um-field-password .um-field-area

{

    border-radius: 0px !important;;
  
    margin-bottom: 10px!important;
    width: 100%;  
    font-size: 1rem;
	display: block;
    width: 100%;
    font-size: 1rem;
    line-height: 1.5; 
    background-color: #fff;
    background-clip: padding-box; 
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

}
#login-page .um .um-field-label {
    color: #0e2b3d !important;
}


@media(min-width:768px){
.lead-padding-0{
padding:0px !important;	

}
.row-hide{
display:none !important;		
}	
}

			/*----Profile Page CSS---*/



#profile-picture-page{
	display:flex;
	height:100% !important;
	align-items:center;
}
#profile-picture-page .um-header {
	border:none !important;
	border-bottom:none !important;
}
#profile-picture-page .um-form{
	padding:20px;
}
#profile-picture-page .um-faicon-check{
	color:#0e2b3d!important;
}
#profile-picture-page .um-button{
	border-radius: 60px!important;
    font-size:16px !important;
    
    text-align: center;
	border: 2px solid #d1545b!important;
	background-color:  #d1545b!important;
}
#profile-picture-page .um-button:hover{
background-color:  transparent!important;
	color:  #d1545b!important;
}

@media(min-width:992px){
	
			/* comment page css*/
	
	.wc-comment-right{
	padding:20px !important;
	padding-bottom:0px !important;
	}
	.wc_comment_level-1{
	padding:30px;
}
	
			/*---profile page css---*/
	
	#profile-picture-page .um-form{
	box-shadow: 3px 3px 8px 3px rgba(0,0,0,0.09);
		padding:50px;
	}
	
	.um-profile-edit.um-profile-headericon
	{
		display:none;
	}
}
	

@media(max-width:767px){
	.height-down{
	height:750px !important;
}
.height-down2{
	height:770px !important;
}
.height-down3{
	height:510px !important;
}	
	.txt-cntr{
		text-align:center;
	}
	
}
@media(max-width:991px) and (min-width:768px){
	
	.height-down3{
	height:600px !important;
}
}
@media(max-width:991px){
	.no-padding-top{
		padding-top:0px !important;
	}
	
}
@media(min-width:768px){
		/* ----login and register page----*/
	.um-page-register article, .um-page-login article{
	max-width:960px;
	box-shadow: 1px 3px 8px 1px rgba(0,0,0,0.09);
    padding: 50px;
    margin: 40px auto;
}
}

/*Cart css*/
 .transparent-hover:hover{
     background:transparent !important;
     
 }
 .restore-item {
     color: #f5d35d!important;
 }
 .coupon-btn{
       color:#d1545b !important;
    }
    .coupon-btn:hover , .woocommerce-error{
        color:#fff;
      background-color:#d1545b !important;
    }
    .woocommerce a.remove:hover{
        background:#d1545b!important;
    }
    .woocommerce .woocommerce-error, .woocommerce .woocommerce-info, .woocommerce .woocommerce-message {
    background: #d1545b !important;
   }
    .input-text{
       background-color: #0e2b3d!important;
       width:170px !important;
       height:70px;
    }
    .product-name *{
        color: #0e2b3d!important;
       
    }
     .woocommerce-cart table.cart td.actions .coupon .input-text{
         height:40px !important;
     }
    .woocommerce-page .quantity input.qty {
    
      /*  background-color:#d1545b !important; */
    }
    .product-quantity *{
     /*    background-color:#d1545b !important;*/
    }
    input.qty {
         width:80px !important;
       /*  background-color:#d1545b !important; */
    }
    .woocommerce a.remove {
    color:#d1545b !important;
        
    }
    @media(max-width:768px){
        .woocommerce-page table.cart td.actions .coupon .button{
            width:100% !important;
        }
        .woocommerce-cart table.cart td.actions .button, .woocommerce-cart table.cart td.actions .coupon .input-text {
            width: 100% !important; 
            text-align:center;
    
        }    
        
        
    }
    


</style>