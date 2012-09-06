<?php
// Include project functions
include_once(TEMPLATEPATH.'/lib/project-functions.php'); 
 

// give the login screen a readypac logo instead of the default wordpress logo
function my_custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important;}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');


// custom excerpt more marker
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>