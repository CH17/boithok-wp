<?php
/****************************
# Theme Initialization
# 
@package Boithok
# 
# 
****************************/
namespace Boithok\Classes;

use Boithok\Traits\Singleton;

class Init{

    use Singleton; 

    protected function __construct()
    {
       Assets::get_instance();
       $this->setup_theme_hooks(); 
       Filters::get_instance();
       Menus::get_instance();
       Customizer::get_instance();
    }


    protected function setup_theme_hooks()
    {
        add_action('after_setup_theme', [ $this, 'theme_setup' ] );
    }

    public function theme_setup(){

        add_theme_support('title-tag');
      
        add_theme_support( 'custom-logo', [
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => [ 'site-title', 'site-description' ],
            'unlink-homepage-logo' => true, 
        ] );

        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support( 'html5', 
                [ 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ] );

        add_theme_support( 'editor-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support('wp-block-styles');

        global $content_width;
        if( !isset($content_width) ){
            $content_width = 1240;
        }
    }    
}