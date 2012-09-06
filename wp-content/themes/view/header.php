<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>


<!-- Import General Stylesheet -->
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />


<?php wp_head(); ?>


<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/selectivizr.js"></script>
  <noscript><link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" /></noscript>
<![endif]--> 

<!-- Import Internet Explorer CSS to ovveride the main CSS -->
<!--[if IE]> 
<link href="<?php bloginfo('template_directory'); ?>/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>

<body>