<?php

/*
 * agregando un nuevo menu al  Admin Control Panel
 */
 
// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
add_action( 'admin_menu', 'wee_Add_My_Admin_Link' );

// agregar un nuevo top  menu link para el ACP
function wee_Add_My_Admin_Link()
{
    add_menu_page(
        'Extencion para elementor', // Title of the page
        'Elementor Extencion by necrowolf', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        plugin_dir_path(__FILE__) . '/admin/wee-acp-page.php' // The 'slug' - file to display when clicking the link
        );
}

?>