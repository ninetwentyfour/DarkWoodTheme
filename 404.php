<?php
 
$ASKAPACHE_S_C = array(
'400' => array(
  'Bad Request', 
  'Your browser sent a request that this server could not understand. Our bad.'),
'401' => array(
  'Authorization Required', 
  'This server could not verify that you are authorized to '.
  'access the document requested. Either you supplied the '.
  'wrong credentials (e.g., bad password), or your browser '.
  'doesn\'t understand how to supply the credentials required. Or we just messed up.'),
'402' => array(
  'Payment Required', 
  'INTERROR'),
'403' => array(
  'Forbidden', 
  'You don\'t have permission to access THEREQUESTURI on this '.
  'server. Ask nicely.'),
'404' => array(
  ' - Oh No! - Page Not Found'),
'405' => array(
  'Method Not Allowed', 
  'The requested method THEREQMETH is not allowed for the URL '.
  'THEREQUESTURI.'),
'406' => array(
  'Not Acceptable', 
  'An appropriate representation of the requested resource '.
  'THEREQUESTURI could not be found on this server.'),
'407' => array(
  'Proxy Authentication Required', 
  'This server could not verify that you are authorized to '.
  'access the document requested. Either you supplied the wrong '.
  'credentials (e.g., bad password), or your browser doesn\'t '.
  'understand how to supply the credentials required.'),
'408' => array(
  'Request Time-out', 
  'Server timeout waiting for the HTTP request from the client.'),
'409' => array(
  'Conflict', 
  'INTERROR'),
'410' => array(
  'Gone', 
  'The requested resourceTHEREQUESTURIis no longer available on '.
  'this server and there is no forwarding address. Please remove '.
  'all references to this resource.'),
'411' => array(
  'Length Required', 
  'A request of the requested method GET requires a valid '.
  'Content-length.'),
'412' => array(
  'Precondition Failed', 
  'The precondition on the request for the URL THEREQUESTURI '.
  'evaluated to false.'),
'413' => array(
  'Request Entity Too Large', 
  'The requested resource THEREQUESTURI does not allow request '.
  'data with GET requests, or the amount of data provided in the '.
  'request exceeds the capacity limit.'),
'414' => array(
  'Request-URI Too Large', 
  'The requested URL\'s length exceeds the capacity limit for '.
  'this server.'),
'415' => array(
  'Unsupported Media Type', 
  'The supplied request data is not in a format acceptable for '.
  'processing by this resource.'),
'416' => array(
  'Requested Range Not Satisfiable', 
  ''),
'417' => array(
  'Expectation Failed', 
  'The expectation given in the Expect request-header field could '.
  'not be met by this server. The client sent <code>Expect:</code>'),
'422' => array(
  'Unprocessable Entity', 
  'The server understands the media type of the request entity, but '.
  'was unable to process the contained instructions.'),
'423' => array(
  'Locked', 
  'The requested resource is currently locked. The lock must be released '.
  'or proper identification given before the method can be applied.'),
'424' => array(
  'Failed Dependency', 
  'The method could not be performed on the resource because the requested '.
  'action depended on another action and that other action failed.'),
'425' => array(
  'No code', 
  'INTERROR'),
'426' => array(
  'Upgrade Required', 
  'The requested resource can only be retrieved using SSL. The server is '.
  'willing to upgrade the current connection to SSL, but your client '.
  'doesn\'t support it. Either upgrade your client, or try requesting '.
  'the page using https://'),
'500' => array(
  'Internal Server Error. Our gears need oil. Try Again Soon.', 
  'INTERROR'),
'501' => array(
  'Method Not Implemented', 
  'GET to THEREQUESTURI not supported.'),
'502' => array(
  'Bad Gateway', 
  'The proxy server received an invalid response from an upstream server.'),
'503' => array(
  'Service Temporarily Unavailable. Be Back Soon', 
  'The server is temporarily unable to service your request due to '.
  'maintenance downtime or capacity problems. Please try again later.'),
'504' => array(
  'Gateway Time-out', 
  'The proxy server did not receive a timely response from the '.
  'upstream server.'),
'505' => array(
  'HTTP Version Not Supported', 
  'INTERROR'),
'506' => array(
  'Variant Also Negotiates', 
  'A variant for the requested resource <code>THEREQUESTURI</code> '.
  'is itself a negotiable resource. This indicates a configuration error.'),
'507' => array(
  'Insufficient Storage', 
  'The method could not be performed on the resource because the '.
  'server is unable to store the representation needed to successfully '.
  'complete the request. There is insufficient free space left in your '.
  'storage allocation.'),
'510' => array(
  'Not Extended', 
  'A mandatory extension policy in the request is not accepted by the '.
  'server for this resource.')
);
 
 

// prints out the html for the error, taking the status code as input
function aa_print_html ($AA_C){
    global $AA_REQUEST_METHOD, $AA_REASON_PHRASE, $AA_MESSAGE;
    
    if($AA_C == '400'||$AA_C == '403'||$AA_C == '405'||$AA_C[0] == '5'){
        @header("Connection: close",1);
        
        if($AA_C=='405')@header('Allow: GET,HEAD,POST,OPTIONS,TRACE');
        
        echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\n<html><head>";
        echo "<title>$AA_C $AA_REASON_PHRASE</title>";
        echo "<h1>$AA_REASON_PHRASE</h1>\n<p>$AA_MESSAGE<br>\n</p>\n</body></html>";
        return true;
    } else return false;
}


// Tries to determine the error status code encountered by the server
if(!isset($_REQUEST['error']))  $AA_STATUS_CODE = '404';
else  $AA_STATUS_CODE = $_REQUEST['error'];

if(isset($_SERVER['REDIRECT_STATUS']) && $_SERVER['REDIRECT_STATUS']!='200') 
$AA_STATUS_CODE = $_SERVER['REDIRECT_STATUS'];
 
 
$AA_REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
$AA_THE_REQUEST = htmlentities(strip_tags($_SERVER['REQUEST_URI']));
$AA_REASON_PHRASE = $ASKAPACHE_S_C[$AA_STATUS_CODE][0];
$AA_M_SR=array(array('INTERROR','THEREQUESTURI','THEREQMETH'),
array('The server encountered an internal error or misconfiguration '.
'and was unable to complete your request.',$AA_THE_REQUEST,$AA_REQUEST_METHOD));
$AA_MESSAGE=str_replace($AA_M_SR[0],$AA_M_SR[1],$ASKAPACHE_S_C[$AA_STATUS_CODE][1]);


// begin the output buffer to send headers and resonse
ob_start();
@header("HTTP/1.1 $AA_STATUS_CODE $AA_REASON_PHRASE",1);
@header("Status: $AA_STATUS_CODE $AA_REASON_PHRASE",1);

if(!aa_print_html($AA_STATUS_CODE)){
    ?>
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
           <a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?></a>
        </div>
        <div id="navigation">
            <noscript><nojs>THIS SITE WORKS BEST WITH JAVASCRIPT ENABLED</nojs></noscript>
            <div id="firstpane" class="menu_list">
  <p class="menu_head">Video</p>
    <div id="menu_body" <?php if ( is_page('video-examples') || is_page('video-clients'))  { echo ' class="current_page_item"'; } ?>><!-- Insert names of pages in category. This will keep current category navigation displayed -->
        <ul>
<a href="<?php bloginfo('url'); ?>/video-clients/">Clients</a>
<a href="<?php bloginfo('url'); ?>/video-examples/">Examples</a>        </ul>

    </div>
  <p class="menu_head">Web</p>
    <div id="menu_body" <?php if ( is_page('web-examples') || is_page('web-clients'))  { echo ' class="current_page_item"'; } ?>>
        
	<a href="<?php bloginfo('url'); ?>/web-clients/">Clients</a>
<a href="<?php bloginfo('url'); ?>/web-examples/">Examples</a>

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
    
<div id="content">

		
    <h1><?php _e("$AA_STATUS_CODE $AA_REASON_PHRASE"); ?></h1>
   <p> Try clicking one of the links</p>
   <p>&#60;&#60; to the left</p>
	

</div>
<div id="footer">
Dark Wood Theme Created By <a href="http://www.travisberry.com/">Travis Berry</a>

</div>
</div>
</div>




</body>
</html>
<?php } 
exit; exit();
?>

