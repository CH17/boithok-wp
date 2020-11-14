<?php
/****************************
# Enqueue assets
# 
@package Boithok
# 
# 
****************************/

namespace Boithok\Classes;

use Boithok\Traits\Singleton;

class Assets {

    use Singleton;

    protected function __construct()
    {
        $this->setup_assets_hooks();
    }

    protected function setup_assets_hooks()
    {
        add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
        add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);
    }

    public function register_styles()
    {
        //Styles
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime( BOITHOK_DIR.'/style.css'), 'all');
        wp_register_style('bootstrap-css', BOITHOK_ASSETS_URI.'/src/css/bootstrap.min.css', [], false, 'all' );
        wp_register_style('theme-css', BOITHOK_ASSETS_URI.'/src/css/main.css', [], filemtime( BOITHOK_ASSETS_DIR.'/src/css/main.css'), 'all' );

        wp_enqueue_style( 'style-css');
        wp_enqueue_style( 'bootstrap-css');
        wp_enqueue_style( 'theme-css');
        
    }

    public function register_scripts()
    {
         //Scripts
        wp_register_script('bootstrap-js', BOITHOK_ASSETS_URI.'/src/js/bootstrap.min.js', ['jquery'], false, true);
        wp_register_script('theme-js', BOITHOK_ASSETS_URI.'/src/js/main.js', [], filemtime( BOITHOK_ASSETS_DIR.'/src/js/main.js'), true);        

        wp_enqueue_script( 'bootstrap-js' );
        wp_enqueue_script( 'theme-js' );
    }
 }