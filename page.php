<?php

/****************************
# Regular Page Template
# 
@package Boithok
# 
# 
***************************/?>
<?php get_header() ; ?>

     <!-- Page Content-->
     <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <?php
                if( have_posts() ) : ?>                                      

                <?php while( have_posts() ) : the_post(); ?>                     

                    <?php                         
                        get_template_part( 'templates/content', 'page' ); 

                    ?>

                <?php endwhile; ?>
                
                <?php else : ?>            

                   <?php get_template_part( 'templates/content', 'none');  ?>
                
                <?php endif; ?>
            </div>             
        </section>
           
        </div>

    <?php get_footer() ?>
