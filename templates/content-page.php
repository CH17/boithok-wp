<?php
/****************************
# Excerpt Block
# Must be used inside THE LOOP
#
@package Boithok
# 
***************************/
?>
     
<article class="excerpt-block  mb-5">

    <h1 class="page-title mb-3"> <?php echo esc_html( get_the_title() ); ?> </h1>

    <?php
        get_template_part( 'templates/blocks/post', 'featured');  
    ?>  

    <div class="lead">       
        <?php esc_html( the_content() ); ?>
    </div>
     
    <hr>
</article>