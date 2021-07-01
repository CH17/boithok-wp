<?php

/****************************
# Front page template
# 
@package Boithok
# 
# 
***************************/?>
<?php get_header() ; ?>
     <!-- Page Content-->
    <div class="container-fluid p-0">
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                
                <?php
                    if( have_posts() ) :  

                        while( have_posts() ) : the_post(); ?>                     

                        <?php get_template_part( 'templates/content', 'page' ); ?>

                    <?php endwhile; ?>
                    
                    <?php else : ?>            

                       <?php get_template_part( 'templates/content-none' );  ?>
                    
                    <?php endif; 
                ?>
            </div>
        </section>
        
    </div>
 <?php get_footer() ?>
