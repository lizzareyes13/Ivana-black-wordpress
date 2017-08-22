<?php
			/*
				Template Name: html2wp-front-page
			*/

			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title><?php  wp_title( '|', true, 'right' );  ?>
</title>
		
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/main-black.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/supersized.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/supersized.shutter.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/colorbox.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/fonts.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/prettyPhoto.css" type="text/css">
		
		<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/demo.css" type="text/css" media="screen">

	
        <!-- JS scripts  -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/jquery.easing.min.js"></script>
		

		<!-- begin supersized script-->	
		
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/supersized.shutter.min-black.js"></script>
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   0,			// Start slide (0 is random)
					stop_loop				:	0,			// Pauses slideshow on last slide
					random					: 	0,			// Randomize slide order (Ignores start slide)
					slide_interval          :   3000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition
					new_window				:	1,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   1,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
					// Size - Position						   
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   1,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components							
					slide_links				:	'false',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					thumb_links				:	1,			// Individual thumb links for each slide
					thumbnail_navigation    :   0,			// Thumbnail navigation
					slides 					:  	[			// Slideshow Images
														{image : 'http://www.wallpaperhi.com/thumbnails/detail/20120627/black%20and%20white%20cars%20grayscale%20bmw%20m3%202808x1872%20wallpaper_www.wallpaperhi.com_56.jpg' , title : 'Image Credit: Something Default'},
														{image : 'http://wallpaper-million.com/Wallpapers/f/BMW/BMW-M3-Coupe-E92-rims-closeup-in-black-and-white-wallpaper_2707.jpg' , title : 'Image Credit: Best Photography'},  
														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-SA-1280x960.jpg' , title : 'Image Credit: Lazy Women' },
												        {image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},
														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},
														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},
														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},
														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},

														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},

														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},

														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},

														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},

														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},

														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},

														{image : 'http://www.seriouswheels.com/pics-2006/2006-BMW-Z4-M-Coupe-BW-FA-1280x960.jpg', title : 'Image Credit: Siesto'},




												],
												
					// Theme Options			   
					progress_bar			:	1,			// Timer for each slide							
					mouse_scrub				:	0
					
				});
		    });
		    
		</script>
		

		<!-- begin Colorbox script-->	
		
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/jquery.colorbox.js"></script>
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/colorbox-fade.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".iframe").colorbox({iframe:true, width:"760", height:"372"});
				$(".inline").colorbox({inline:true, width:"760", height:"350"});
			});
		</script>
		
		<!-- begin Other scripts-->	
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/prettyPhoto.js"></script>
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/jquery.countdown.js"></script>
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/twitter/jquery.tweet.js"></script>
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/jquery.tipsy.js"></script>
		
		<!-- begin Custom script-->	
		<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/scriptblack.js"></script>

		
	
<?php  wp_head();  ?>
</head>
	


<body>

    <!--Thumbnail Navigation-->
	<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!-- begin Main Block-->
	<div class="main-frame"> 
	<div class="top-main">COMING SOON</div>
	<div class="main">
	<div id="Countdown2"><div id="Countdown"><!-- Countdown inserted using jQuery - launch.js --></div></div>
	<div class="main-text">We will get back as soon as possible<span>.</span>
</div>
	</div>
	
	<!-- begin Navigation panel -->
    <div id="navigationpanel">
    <div id="panel">

	<ul>
	<li><a href="<?php  html2wp_the_page_link( 'about-black.php' );  ?>" class="iframe">ABOUT US</a></li>
	<li><a href="<?php  bloginfo('template_url');  ?>/#inline" class="inline">PORTFOLIO</a></li>
	<li class="last"><a href="<?php  bloginfo('template_url');  ?>/contact/index-black.php" class="iframe">CONTACT</a></li>
	</ul>
      
    </div>
<!-- close #panel -->
    
    <div style="left: 0px; display: block;" class="panel_button"><img alt="expand" src="<?php  bloginfo('template_url');  ?>/img/open.png"></div> <!-- close #panel_button -->
    <div style="left: 0px; display: none;" class="panel_button hide_button">
<img alt="collapse" src="<?php  bloginfo('template_url');  ?>/img/close.png"> </div> <!-- close #panel_button -->

    </div>
	<!-- endNavigation panel -->

    </div>
    <!-- end Main Block-->

	
	<div class="wrapper">
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	</div>
	
	<!-- begin Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--begin Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">

	<!--begin Twitter-->
	<div class="twitterf">
<span style="float: left">LATEST TWEET: </span>
	<div id="twitter" style="float: left; margin-left: 0px; padding-top: 1px">
	
	<script type="text/javascript">
    $(document).ready(function() {
    $('#twitter').tweet({
    modpath: 'js/twitter/',
    count: 1,
	username: ["thememaniac"],
    loading_text: 'loading twitter feed...',
    /* etc... */
    });
	});
    </script>
    <div id="twitter" class="query"></div>

	</div>
	</div>
	
	     <!--begin Social icons-->
		<div class="social-icons">
		<ul>
		<li><a title="Facebook" href="http://facebook.com/#"><img src="<?php  bloginfo('template_url');  ?>/img/facebook.png" alt="Facebook" width="17"></a></li>
	    <li><a title="YouTube" href="http://youtube.com/#"><img src="<?php  bloginfo('template_url');  ?>/img/youtube.png" alt="Youtube" height="17"></a></li>
	    <li><a title="Twitter" href="http://twitter.com/#"><img src="<?php  bloginfo('template_url');  ?>/img/twitter.png" alt="Twitter" width="21"></a></li>
		</ul>
		</div>
		<!--end Social icons-->	
			
			
		<!--begin Slide counter and captions-->
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span>/<span class="totalslides"></span>
			</div>

			<!--Thumb Tray button-->
			<a id="tray-button" href=""><img id="tray-arrow" src="<?php  bloginfo('template_url');  ?>/img/button-tray-up.png" alt="button"></a>
 
    </div>
	</div>
	<!--end Control Bar-->

	
    <!-- begin inline Portfolio-->
    <div style="display: none">
    <div id="inline" style="height: 330px"> 

    <div class="colorbox-inline-title">PORTFOLIO</div>
	
	<!-- begin Portfolio line-->
    <div class="portfolio-line">
	
	<!--Portfolio item-->
    <div class="hover-port">
    <div class="img-post"><a href="http://vimeo.com/11998763" rel="prettyPhoto" title="Real estate"><img src="<?php  bloginfo('template_url');  ?>/img/1.jpg" alt="Blog">
    </a></div>
    <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
    </div>
	
	<!--Portfolio item-->
    <div class="hover-port">
    <div class="img-post"><a href="<?php  bloginfo('template_url');  ?>/img/blog2.jpg" rel="prettyPhoto" title="Real estate"><img src="<?php  bloginfo('template_url');  ?>/img/2.jpg" alt="Blog">
    </a></div>
    <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
    </div>
	
	<!--Portfolio item-->
    <div class="hover-port last">
    <div class="img-post"><a href="<?php  bloginfo('template_url');  ?>/img/blog2.jpg" rel="prettyPhoto" title="Real estate"><img src="<?php  bloginfo('template_url');  ?>/img/3.jpg" alt="Blog">
    </a></div>
    <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
    </div>

    </div>
	<!-- end Portfolio line-->

    <div class="portfolio-line">
	

    </div>
	
    </div>
    </div>
	<!-- end inline Portfolio-->


<?php  wp_footer();  ?>
</body>
</html>
