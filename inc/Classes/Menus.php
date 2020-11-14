<?php

/****************************
# Register Menus
# 
@package Boithok
# 
# 
****************************/
namespace Boithok\Classes;


use Boithok\Traits\Singleton;

class Menus {

    use Singleton;

    protected function __construct()
    {
        $this->setup_menus();
    }

    protected function setup_menus(){
        add_action( 'init', [ $this, 'register_menus' ] );
    }

    public function register_menus()
    {
        register_nav_menus([
               'boithok_header_menu' => esc_html__('Main Menu', TEXT_DOMAIN)
        ]);
    }

    public function get_menu_id($location){
        $menu_locations = get_nav_menu_locations();
        $menu_id = $menu_locations[$location];
        return !empty ( $menu_id) ? $menu_id : '';
    }

    public function get_children( $menu_array, $parent)
    {
        $children = [];

        if( !empty( $menu_array ) && is_array( $menu_array )){
            foreach( $menu_array as $menu ){

                if( intval($menu->menu_item_parent) === $parent ){
                    array_push( $children, $menu);
                }
            }
        }

        return $children;

    }
}