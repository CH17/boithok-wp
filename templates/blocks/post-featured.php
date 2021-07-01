<?php
/****************************
# Post Featured Block
# Must be used inside THE LOOP
#
@package Boithok
# 
***************************/
?>

<div class="featured-image mb-4">
    <?php 

        $thum_image = 'https://picsum.photos/900/250';

        if (is_single() || is_page()) {
            
            the_post_thumbnail('large');

        }else{

            ?>

            <a href="<?php esc_url( the_permalink() );  ?>">
                <?php

                the_post_thumbnail('medium');

                ?>
            </a>

            <?php        
        }
    ?>    
    
</div>