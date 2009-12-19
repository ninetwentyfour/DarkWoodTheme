<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> &middot; <?php bloginfo('description'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/darkwoodtheme/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/darkwoodtheme/js/slider.js"></script>
		
 

	<!-- End JavaScript -->

<!--<script src="<?php bloginfo('url'); ?>/coda-slider.1.1.1.pack.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/jquery-easing.1.2.pack.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>
-->


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
    <div id="menu_body" <?php if ( is_page('tudor') || is_page('victorian') || is_page('craftsman') || is_page('georgian') || is_page('contemporary') || is_page('cottage'))  { echo ' class="current_page_item"'; } ?>><!-- Insert names of pages in category. This will keep current category navigation displayed -->
        <ul>
<a href="<?php bloginfo('url'); ?>/clients/">Clients</a>
<a href="<?php bloginfo('url'); ?>/examples/">Examples</a>        </ul>

    </div>
  <p class="menu_head">Web</p>
    <div id="menu_body" <?php if ( is_page('general-contracting') || is_page('owner-rep') || is_page('home-management') || is_page('green-building'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/clients/">Clients</a>
<a href="<?php bloginfo('url'); ?>/examples/">Examples</a>

    </div>
  <p class="menu_head">Print</p>
    <div id="menu_body" <?php if ( is_page('tst') || is_page('one'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/clients/">Clients</a>
<a href="<?php bloginfo('url'); ?>/examples/">Examples</a>
   </div>
    <p class="menu_head">Photography</p>
    <div id="menu_body" <?php if ( is_page('video') || is_page('news'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/clients/">Clients</a>
<a href="<?php bloginfo('url'); ?>/examples/">Examples</a>
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
    