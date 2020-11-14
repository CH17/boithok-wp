<?php
/****************************
# Necessary Filters 
# 
@package Boithok
# 
# 
****************************/
namespace Boithok\Classes;

use Boithok\Traits\Singleton;

class Filters {

    use Singleton;

    protected function __construct()
    {
        $this->setup_filters();
    }

    protected function setup_filters(){
        add_filter( 'get_custom_logo', [ $this, 'change_logo_class' ] );
    }

    public function change_logo_class($classes)
    {
        $classes = str_replace( 'custom-logo-link', '', $classes );
        $classes = str_replace( 'custom-logo', 'img-fluid img-profile rounded-circle mx-auto mb-2', $classes );
       

        return $classes; 
    }
}