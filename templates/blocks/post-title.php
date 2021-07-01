<?php
/****************************
# Post title Block
# Must be used inside THE LOOP
#
@package Boithok
# 
***************************/
?>

<h2 class="post-title">
    <?php 
        if (is_single()) {
            esc_html( the_title() );
        }else{
            ?>
            <a href="<?php esc_url( the_permalink() );  ?>">
                <?php esc_html( the_title() ); ?> 
            </a>
            <?php        
        }
    ?>
</h2>