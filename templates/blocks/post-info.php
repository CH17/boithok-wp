<?php
/****************************
# Post User Info
# Must be used inside THE LOOP
#
@package Boithok
# 
***************************/

$user_name 	= get_the_author_meta( 'user_nicename' );
$user_url 	= get_the_author_meta( 'user_url' );

?>

<div class="meta-info meta-text text-muted mt-1 mb-2">
  	<span>Published at <?php echo get_the_date( 'd M Y'); ?> </span> 
  	<span><a href="<?php echo $user_url; ?>"><?php echo $user_name;?></a></span> 
</div>