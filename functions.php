<?php
/****************************
# Functions File
# 
@package Boithok
# 
# 
****************************/

if(! defined('BOITHOK_DIR')) { 
    define('BOITHOK_DIR', untrailingslashit( get_template_directory() ));
}

if(! defined('BOITHOK_URI')) { 
    define('BOITHOK_URI', untrailingslashit( get_template_directory_uri() ));
}

if(! defined('BOITHOK_ASSETS_URI')) { 
    define('BOITHOK_ASSETS_URI', untrailingslashit( get_template_directory_uri().'/assets' ));
}

if(! defined('BOITHOK_ASSETS_DIR')) { 
    define('BOITHOK_ASSETS_DIR', untrailingslashit( get_template_directory().'/assets' ));
}

if(! defined('TEXT_DOMAIN')) { 
    define('TEXT_DOMAIN', "boithok");
}

require_once BOITHOK_DIR.'/vendor/autoload.php'; 

 function boithok_theme_instanace()
 {
     \Boithok\Classes\Init::get_instance();
 }

boithok_theme_instanace();


// function vince_check_active_menu( $menu_item ) {
//     $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//     if ( $actual_link == $menu_item->url ) {
//         return 'active';
//     }
//     return '';
// }