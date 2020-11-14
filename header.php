<?php
/****************************
# Header Template file
# 
@package Boithok
# 
# 
****************************/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?> >
    
<?php if(function_exists('wp_body_open')) { wp_body_open(); } ?>
<?php get_template_part('template-parts/nav'); ?>