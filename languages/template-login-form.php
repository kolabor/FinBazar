<?php
/**
 *
 * Template Name: Login Formm
 *
 */
acf_form_head();
get_header(); ?>
	


<?php get_template_part('pageheader'); ?>
<div class="site-body site-pad">
	<div class="site-container loans form_box">
		<div class="acf_form_container_kolabor">
			<form id='login' action='profile.php' method='post' accept-charset='UTF-8'>


   
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?> 
<?php endwhile; // end of the loop. ?> 
<?php 
			
             
			?>
          
		</div>
	</div>
</div>
<?php get_footer(); ?>
