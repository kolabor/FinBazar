<?php
/**
 *
 * Template Name: Auto Liability Offers
 *
 */
acf_form_head();
get_header(); ?>
	


<?php get_template_part('pageheader'); ?>
<img src="/wp-content/themes/albar/images/loans_header.jpg" style="width: 100%; height: auto;" />
<div class="site-body site-pad">
	<div class="site-container loans form_box">
		<div class="acf_form_container">
               


   
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?> 
<<<<<<< HEAD
<?php endwhile; // end of the loop. ?>
<?php  
echo "<div class='cascooffers_form'>";
               acf_form(array(
	                'post_content' => false,
	                'post_title' => true,
					'post_id'		=> 'new_post',
					'return' => "/profile",
					'new_post'		=> array(
						'post_type'		=> 'cascooffers',
						'post_status'		=> 'publish'
					),
					'submit_value'		=> 'Поднесете',
					'updated_message' => __("Ви благодараме, вашето барање е регистрирано. За вашето барање ќе бидете изестени преку емаил или преку телефон.", 'acf')
				)); 

                echo "</div>";
=======
<?php endwhile; // end of the loop. ?> 
<?php 
>>>>>>> 98629323eef645bfd476d334eff0227ea8f13e6e
			
             
			?>
          
		</div>
	</div>
</div>
<?php get_footer(); ?>
