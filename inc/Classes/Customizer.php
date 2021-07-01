<?php
/****************************
# Customizer Objectes
# 
@package Boithok
# 
# 
****************************/

namespace Boithok\Classes;

use Boithok\Traits\Singleton;

class Customizer{

	use Singleton; 


	protected function __construct()
    {
        $this->setup_customize_register();
    }

    protected function setup_customize_register(){
        add_action( 'customize_register', [ $this, 'baithok_customize_register' ] );
    }


    public function baithok_customize_register($wp_customize)
    {
        $wp_customize->add_panel('front_page_settings', array(
        	'title' => __('Front Page Settings'),
        	'description' => '',
        	'priority' => 10,
        )); 

        $wp_customize->add_section('designation', array(
        	'title' => 'Designation',
        	'panel' => 'front_page_settings',
        )); 
        $wp_customize->add_setting('deg_title', array(
        	'type' => 'theme_mod',
        	'capability' => 'edit_theme_options', 
        	'default' => '',
        	'transport' => 'refresh',
        	'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('deg_title', array(
        	'label' => __('Menu Background'),
        	'type' => 'text',
        	'section' => 'designation',
        ));
    }



}