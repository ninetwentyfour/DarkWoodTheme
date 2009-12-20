<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> &middot; <?php bloginfo('description'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/darkwoodtheme/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/darkwoodtheme/js/slider.js"></script>
<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/darkwoodtheme/ie.css" type="text/css" media="screen" />
<![endif]-->
		<?php wp_head(); ?>
		</head>
<body>
<div id ="container">
    <div id="backgrounds">
       
        <div id="header">
           <a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?></a>
        </div>
        <div id="navigation">
            <noscript><nojs>THIS SITE WORKS BEST WITH JAVASCRIPT ENABLED</nojs></noscript>
            <div id="firstpane" class="menu_list">
  <p class="menu_head">Video</p>
    <div id="menu_body" <?php if ( is_page('video-examples') || is_page('video-clients'))  { echo ' class="current_page_item"'; } ?>><!-- Insert names of pages in category. This will keep current category navigation displayed -->
        <ul>
	    <!-- ... -->
<a href="<?php bloginfo('url'); ?>/video-clients/" class='fade'>Clients</a>
<!-- ... -->
<!-- ... -->
<a href="<?php bloginfo('url'); ?>/video-examples/" class='fade'>Examples</a>
	<!-- ... -->
	</ul>

    </div>
  <p class="menu_head">Web</p>
    <div id="menu_body" <?php if ( is_page('web-examples') || is_page('web-clients'))  { echo ' class="current_page_item"'; } ?>>
        <!-- ... -->
	<a href="<?php bloginfo('url'); ?>/web-clients/" class='fade'>Clients</a>
	<!-- ... -->
	<!-- ... -->
<a href="<?php bloginfo('url'); ?>/web-examples/" class='fade'>Examples</a>
<!-- ... -->

    </div>
  <p class="menu_head">Print</p>
    <div id="menu_body" <?php if ( is_page('print-examples') || is_page('print-clients'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/print-clients/">Clients</a>
<a href="<?php bloginfo('url'); ?>/print-examples/">Examples</a>
   </div>
    <p class="menu_head">Photography</p>
    <div id="menu_body" <?php if ( is_page('photography-examples') || is_page('photography-clients'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/photography-clients/">Clients</a>
<a href="<?php bloginfo('url'); ?>/photography-examples/">Examples</a>
    </div>
    <p class="menu_head">Contact</p>
    <div id="menu_body" <?php if ( is_page('contact') || is_page('social-networks'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/contact/">Contact Form</a>
<a href="<?php bloginfo('url'); ?>/social-networks/">Social Networks</a>
    </div>
</div>
<!-- slides the element with class "menu_body" when paragraph with class "menu_head" is clicked -->
<script type="text/javascript">$("#firstpane p.menu_head").click(function()
{
    $(this).next("#menu_body").slideToggle(300).siblings("#menu_body").slideUp("slow");
     
});

</script>

<noscript><link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/darkwoodtheme/nojs.css" type="text/css" media="screen" /></noscript>
        </div>
    