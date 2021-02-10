<?php
/****************************
# Sidebar Logo
# 
@package Boithok
# 
# 
****************************/


$helpers = \Boithok\Helpers\Misc::get_instance();
$logo_url = $helpers->boithok_get_logo_url();

?>

<a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>" 
            title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
            rel="home">
<span class="d-block d-lg-none"><?php bloginfo( 'name' ); ?></span>
    <?php if( $logo_url ):  ?>

            <span class="d-none d-lg-block">

                <img src="<?php echo esc_url( $logo_url ); ?>" 
                    class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

            </span>
        <?php else: ?>
            <span class="d-none d-lg-block"><?php bloginfo( 'name' ); ?></span>
        <?php endif; ?>
</a>
