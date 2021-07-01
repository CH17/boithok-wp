<?php
/****************************
# Header navigation
# 
@package Boithok
# 
# 
****************************/
$menus = \Boithok\Classes\Menus::get_instance();
$menu_id = $menus->get_menu_id('boithok_header_menu');
$header_menu_items = wp_get_nav_menu_items($menu_id);      

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">

<?php get_template_part('templates/partials/logo'); ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <?php 
            if( !empty( $header_menu_items ) && is_array( $header_menu_items )){ ?>
                <ul class="navbar-nav">
                <?php 
                foreach( $header_menu_items as $item){
                    if( ! $item->menu_item_parent ){
                        $child_menu_items = $menus->get_children($header_menu_items, $item->ID);
                        $has_children = !empty( $child_menu_items ) && is_array( $child_menu_items );

                        if( $has_children ){ ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle <?php echo $menus->active_menu($item); ?>" href="<?php echo esc_url($item->url); ?>" data-toggle="dropdown"> 
                                    <?php echo esc_html($item->title); ?>  </a>
                                <ul class="dropdown-menu">
                                    <?php 
                                        foreach($child_menu_items as $child){ ?>
                                            <li class="nav-item"><a class="nav-link dropdown-item <?php echo $menus->active_menu($item); ?>"
                                                 href="<?php echo esc_url($child->url) ; ?>">
                                                 <?php echo esc_html($child->title); ?></a>
                                                </li>
                                    <?php    }
                                    ?>
                                </ul>
                           </li>

                        <?php }else{ ?>

                            <li class="nav-item"><a class="nav-link <?php echo $menus->active_menu($item); ?>" href="<?php echo esc_url($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>

                     <?php   }
                    }

                }
                ?>
                </ul>

        <?php } ?>
    </div>
</nav>