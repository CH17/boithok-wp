<?php
/****************************
# Post content Block
# Must be used inside THE LOOP
#
@package Boithok
# 
***************************/

    get_template_part( 'templates/blocks/post', 'title');  

    get_template_part( 'templates/blocks/post', 'featured');

    get_template_part( 'templates/blocks/post', 'info');
    
?>

<div class="entry-content lead">
	<?php 
        if (is_single()) {

            esc_html( the_content() );
            
        }else{
            esc_html( the_excerpt() );      

            ?>
            <div class="mt-1 text-right"> 
	            <a href="<?php esc_url( the_permalink() );  ?>" class="btn btn-outline-primary"> READ MORE </a>
	        </div>
            <?php  
        }
    ?>

</div> 

<?php
    get_template_part( 'templates/blocks/post', 'tags'); 
?>

<hr>