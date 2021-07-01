<?php

/****************************
# Index page
# 
@package Boithok
# 
# 
***************************/
?>

<?php get_header() ; ?>

    <main class="container-fluid p-0 page">
        <section class="resume-section" id="main" role="main">
            <div class="resume-section-content">
            <?php
                if( have_posts() ) : 
                    while( have_posts() ) : the_post(); ?>  
                     
                    <?php get_template_part( 'templates/content' ); ?>

                <?php endwhile; ?>
                
                <?php else : ?>            

                   <?php get_template_part( 'templates/content-none' );  ?>
                
                <?php endif; ?>
            </div>
        </section>        
           
    </main>

    <?php get_footer() ?>
