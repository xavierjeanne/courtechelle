<?php


////////////////////////////////////////////////////////
////////// AJOUT PAGES D'OPTION ///////////////////
//////////////////////////////////////////////////////

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Paramètres personnel',
        'menu_title'	=> 'Paramètres WP',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Réseaux sociaux',
        'menu_title'	=> 'Réseaux',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Pages d\'accueil',
        'menu_title'	=> 'Acceuil',
        'parent_slug'	=> 'theme-general-settings',
    ));

}


// Remove the admin menu items
function stop_access_by_role()
{
    $user = wp_get_current_user();
    if (in_array('client_admin', (array)$user->roles)) {
        // TODO => Widgets
        remove_menu_page('tools.php');
        remove_menu_page('widgets.php');
        remove_menu_page('customize.php'); // Appearance / Edit
        remove_menu_page('edit-comments.php');
        remove_menu_page('options-general.php');
        remove_menu_page('options-writing.php');
        remove_menu_page('options-reading.php');
        remove_menu_page('options-discussion.php');
        remove_menu_page('options-media.php');
        remove_menu_page('options-permalink.php');
        remove_menu_page('cptui_main_menu');
        remove_submenu_page('pmxi-admin-home', 'pmxi-admin-import');
        remove_submenu_page('pmxi-admin-home', 'pmxi-admin-settings');
        remove_menu_page('edit.php?post_type=acf-field-group'); // ACF menu item
    }
    if (in_array('role2', (array)$user->roles)) {
        // TODO => Widgets
        remove_menu_page('edit.php?post_type=entreprise'); // ACF menu item
        remove_menu_page('tools.php');
        remove_menu_page('wpcf7');
        remove_menu_page('theme-general-settings');
        remove_menu_page('edit-comments.php');
    }
}

add_action( 'admin_init', 'stop_access_by_role' );

////////////////////////////////
////// Move Yoast to bottom
////////////////////////////////
///
function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

function remove_menu_items() {
	global $menu;
	$restricted = array(__('Links'), __('Comments'), __('Media'),
	__('Plugins'), __('Tools'), __('Users'),__('Posts'));
	end ($menu);
	while (prev($menu)){
	$value = explode(' ',$menu[key($menu)][0]);
	
	if (in_array($value[0] != NULL?$value[0]:"" , $restricted)){
		unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menu_items');