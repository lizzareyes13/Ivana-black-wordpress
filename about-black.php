<?php
			/*
				Template Name: html2wp-about-black
			*/

			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title><?php  wp_title( '|', true, 'right' );  ?>
</title>

<!-- CSS -->
<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/colorbox.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/main-black.css" type="text/css" media="screen">
<link href="<?php  bloginfo('template_url');  ?>/css/jquery.mCustomScrollbar-black.css" rel="stylesheet" type="text/css">
<link href="<?php  bloginfo('template_url');  ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/fonts.css" type="text/css" media="screen">

 <!-- JS scripts  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/jquery.mousewheel.min.js"></script>
<?php  wp_head();  ?>
</head>

<body>

<div class="colorbox-title">ABOUT US</div>


<!-- content block -->
<div id="mcs_container">
	<div class="customScrollBox">
		<div class="container">
    		<div class="content">



	<div>
	<!--Portfolio item-->
    <div style="float: left; padding-right: 15px; padding-bottom: 4px"><img src="<?php  bloginfo('template_url');  ?>/img/2.jpg" alt="Blog"></div>
    </div>

			<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas ssit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
			<p></p>
			<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>



	    </div>
		</div>
		<div class="dragger_container">
    		<div class="dragger"></div>
		</div>
	</div>
    <a href="<?php  bloginfo('template_url');  ?>/#" class="scrollUpBtn"></a> <a href="<?php  bloginfo('template_url');  ?>/#" class="scrollDownBtn"></a>
</div>

<!-- content to show if javascript is disabled -->
<noscript>
	<style type="text/css">
		#mcs_container .customScrollBox{overflow:auto;}
		#mcs_container .dragger_container{display:none;}
	</style>
</noscript>

<script type="text/javascript">
$(window).load(function() {
	mCustomScrollbars();
});

function mCustomScrollbars(){
	/*
	malihu custom scrollbar function parameters:
	1) scroll type (values: "vertical" or "horizontal")
	2) scroll easing amount (0 for no easing)
	3) scroll easing type
	4) extra bottom scrolling space for vertical scroll type only (minimum value: 1)
	5) scrollbar height/width adjustment (values: "auto" or "fixed")
	6) mouse-wheel support (values: "yes" or "no")
	7) scrolling via buttons support (values: "yes" or "no")
	8) buttons scrolling speed (values: 1-20, 1 being the slowest)
	*/
	$("#mcs_container").mCustomScrollbar("vertical",200,"easeOutCirc",1.05,"fixed","yes","yes",15);
}

/* function to fix the -10000 pixel limit of jquery.animate */
$.fx.prototype.cur = function(){
    if ( this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null) ) {
      return this.elem[ this.prop ];
    }
    var r = parseFloat( jQuery.css( this.elem, this.prop ) );
    return typeof r == 'undefined' ? 0 : r;
}

/* function to load new content dynamically */
function LoadNewContent(id,file){
	$("#"+id+" .customScrollBox .content").load(file,function(){
		mCustomScrollbars();
	});
}
</script>
<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/jquery.mCustomScrollbar.js"></script>

<?php  wp_footer();  ?>
</body>
</html>
