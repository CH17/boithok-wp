<?php
/****************************
# Excerpt Block
# Must be used inside THE LOOP
#
@package Boithok
# 
***************************/
?>
     
<article class="excerpt-block mb-5">

    <?php get_template_part( 'templates/blocks/post', 'title' );  ?>

    <div class="featured-image">
        <img src="https://picsum.photos/900/250" alt="">
    </div>
    
    <div class="meta-info meta-text text-muted mt-1 mb-2">
        <span> Published at 31st Nov 2020 </span> <span><a href="#">Author Name</a></span> 
    </div>

    <div class="lead">
        
        <?php esc_html( the_excerpt() ); ?>

        <div class="mt-1 text-right"> 
            <a href="<?php esc_url( the_permalink() );  ?>" class="btn btn-outline-primary"> READ MORE </a>
        </div>

    </div>

    <div class="meta-tags">
        <span><a href="#" class="badge"> University</a></span> 
       <span><a href="#" class="badge"> Jobs</a></span> 
       <span><a href="#" class="badge"> School</a></span> 
       <span><a href="#" class="badge"> Research</a></span>        
    </div>
    <hr>
</article>