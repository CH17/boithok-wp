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
                if( have_posts() ) : ?>

                    <?php if( is_home() && ! is_front_page() ){ ?>
                        <h1 class="page-title mb-5"> <?php esc_html( single_post_title() ); ?> </h1>
                    <?php } ?>                    

                <?php while( have_posts() ) : the_post(); ?>  

                    <?php get_template_part( 'templates/content-excerpt' ); ?>

                <?php endwhile; ?>
                
                <?php else : ?>            

                   <?php get_template_part( 'templates/content-none' );  ?>
                
                <?php endif; ?>
            </div>
        </section>
           
        </main>

    <?php get_footer() ?>
