<?php
/****************************
# No Content Block
# 
@package Boithok
# 
# 
***************************/
?>
<section class="no-result">
    <header> 
        <h2 class="page-title">
            <?php esc_html_e("Nothing found!", TEXT_DOMAIN); ?>
        </h2>
    </header>
    <div class="lead mt-5">
        <?php if( is_home() && current_user_can('publish_posts') ) : ?>
            <p> 
                <?php
                    printf(
                        wp_kses(
                            __('Publsh you first post. <a href="%s"> Get Started </a>', TEXT_DOMAIN),
                            [
                                "a" => [ 'href' => [] ]
                            ]

                            ),
                            esc_url( admin_url('post-new.php'))
                    );
                ?>
            </p>
        <?php elseif( is_search() ) : ?>    
            <p class="mt-2">        
            <?php 
                esc_html_e("Looks like your search term doesn't find our content. Try different keyword!", TEXT_DOMAIN); 
                get_search_form();            
            ?>
            </p>
        <?php else: ?>    
            <p class="mt-2"> 
            <?php  
                esc_html_e("Looks like we can not find what you are looking for, try searching!", TEXT_DOMAIN); 
                get_search_form(); 
            ?>
            </p>
        <?php endif; ?>        
    </div>
</section>