<?php
/****************************
# Singleton Traits to instantiate classes
# 
@package Boithok
# 
# 
****************************/
namespace Boithok\Traits;

trait Singleton {

    public function _construct(){

    }

    public function _clone(){

    }

    final public static function get_instance(){
        
        static $instance = [];

        $class = get_called_class();
        if( !isset( $instance[$class] ) ){
            $instance[$class] = new $class();
            do_action( sprintf( 'boithok_singleton_init%s', $class ) );
        }

        return $instance[ $class ];
    }


}