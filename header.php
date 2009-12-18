<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> &middot; <?php bloginfo('description'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
<?php wp_head(); ?>
</head>
<body>
<div id ="container">
    <div id="backgrounds">
       
        <div id="header">
            <?php bloginfo('name'); ?>
        </div>
        <div id="navigation">
            <noscript><nojs>THIS SITE WORKS BEST WITH JAVASCRIPT ENABLED</nojs></noscript>
            <div id="firstpane" class="menu_list">
  <p class="menu_head">Projects</p>
    <div id="menu_body" <?php if ( is_page('tudor') || is_page('victorian') || is_page('craftsman') || is_page('georgian') || is_page('contemporary') || is_page('cottage'))  { echo ' class="current_page_item"'; } ?>><!-- Insert names of pages in category. This will keep current category navigation displayed -->
        <ul>
	<?php wp_list_pages('include=2,146,190,143&title_li='); ?><!-- insert page id numbers for category -->
        </ul>

    </div>
  <p class="menu_head">Services</p>
    <div id="menu_body" <?php if ( is_page('general-contracting') || is_page('owner-rep') || is_page('home-management') || is_page('green-building'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/general-contracting/">General Contracting</a>
<a href="<?php bloginfo('url'); ?>/owner-rep/">Owner Rep / Consulting</a>
<a href="<?php bloginfo('url'); ?>/home-management/">Home Management</a>
<a href="<?php bloginfo('url'); ?>/green-building/">Green Building / Energy Efficiency</a>
    </div>
  <p class="menu_head">Team</p>
    <div id="menu_body" <?php if ( is_page('owner') || is_page('employees'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/owner/">Owner</a>
<a href="<?php bloginfo('url'); ?>/employees/">Employees</a>
   </div>
    <p class="menu_head">Media</p>
    <div id="menu_body" <?php if ( is_page('video') || is_page('news'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/video/">Video</a>
<a href="<?php bloginfo('url'); ?>/news/">News</a>
    </div>
    <p class="menu_head">Contact</p>
    <div id="menu_body">
        
	<a href="<?php bloginfo('url'); ?>/contact/">Contact</a>
<a href="<?php bloginfo('url'); ?>/location/">Location</a>
    </div>
</div>
<!-- slides the element with class "menu_body" when paragraph with class "menu_head" is clicked -->
<script>$("#firstpane p.menu_head").click(function()
{
    $(this).next("#menu_body").slideToggle(300).siblings("#menu_body").slideUp("slow");
     
});

</script>


<noscript><link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/darkwoodtheme/nojs.css" type="text/css" media="screen" /></noscript>
        </div>
    