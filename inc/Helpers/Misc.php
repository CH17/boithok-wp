<?php
/****************************
# Helpers functions
# 
@package Boithok
# 
# 
****************************/

namespace Boithok\Helpers;

use Boithok\Traits\Singleton;

class Misc {

    use Singleton;
    
    function boithok_get_logo_url(){

        if(has_custom_logo()){

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            return $logo[0];
        }
        return false;
       
    }
}