<?php // functions for all projects

function get_dev_env() {
	if (strpos($_SERVER["DOCUMENT_ROOT"],'Sites')) {
		$envname = 'dev';	
	} elseif (strpos($_SERVER["DOCUMENT_ROOT"],'staging.securewebengine')) {
		$envname = 'staging';	
	} else {
		$envname = 'production';
	}		
	return $envname;
}

// show dev env badge
function env_corner_badge() {
   // hide slidedeck box on posts edit screen
   global $envname;
   echo '<style type="text/css">
		   #env-corner-badge {
			   	background: url('.get_bloginfo('template_directory').'/images/'.get_dev_env().'envcorner.png) no-repeat;
				position: fixed;
				bottom: 0;
				left: 0;
				display: block;
				height: 125px;
				width: 125px;
				z-index: 1000;
			}
         </style>';
}

$envname = get_dev_env(); if ( ($envname == 'dev') || ($envname == 'staging') ) {
	add_action('login_head', 'env_corner_badge');
	add_action('wp_head', 'env_corner_badge');
	add_action('admin_head', 'env_corner_badge');
}

// add env-corner-badge div to footer of admin and theme
function add_to_footer() {
	echo '<div id="env-corner-badge"></div>';
}
add_filter('admin_footer_text', 'add_to_footer'); // this also replaces the wordpress message in the admin footer.
add_action('wp_footer','add_to_footer'); //adds to the content already in wp_footer

// hide the wordpress logo link from the admin bar
function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links', 0 );

// hide the wordpress upgrade nag message
function wphidenag() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','wphidenag');

// remove unnecessary meta boxes from the dashboard
function tidy_dashboard() {
  global $wp_meta_boxes;
 
  // remove the plugins info and news feeds for everyone
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'tidy_dashboard');

// remove menu items for non admins
function tidy_menu() {
	if (!current_user_can('administrator')) {
		global $menu;
        $restricted = array(__('Settings'));
        end ($menu);
        while (prev($menu)){
            $value = explode(' ',$menu[key($menu)][0]);
            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
        }// end while
	}	
}
add_action( 'admin_menu' , 'tidy_menu' );


// styling for the admin
function custom_admin_css() {
	global $current_user;
   	// hide welcome panel on dashboard
	echo '<style type="text/css">
           #welcome-panel {display:none;}
		   #slidedeck-sidebar {display:none;}';
	echo current_user_can('administrator') ? '' : '#postpsp {display:none;}';   
   	echo	'</style>';
}

add_action('admin_head', 'custom_admin_css');

?>