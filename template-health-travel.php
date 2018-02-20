<?php
/**
 *
 * Template Name: Health Travel
 *
 */
acf_form_head();
get_header(); ?>
	


<?php get_template_part('pageheader'); ?>
<img src="/wp-content/themes/albar/images/loans_header.jpg" style="width: 100%; height: auto;" />
<div class="site-body site-pad">
	<div class="site-container loans form_box">
		<div class="acf_form_container">
               
  <?php 
     if(isset($_GET['updated']) && $_GET['updated'] == true)
     { 
     	  echo '<h2>'.__( 'Вашето барање е регистрирано!', 'albar' ).'</h2>';
     	  echo '<p>'.__( '<p>Ви благодариме, нашиот тим од <b>Finmarket</b> внимателно и професионално ќе го прегледа вашето барање и ќе ве контактира!</p>', 'albar' ).'</p>';

     	}
      else 
      {

?>      
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?> 
<?php endwhile; // end of the loop. ?>
<?php  

echo "<div class='healthtravel_form'>";
               acf_form(array(
	                'post_content' => false,
	                'post_title' => true,
					'post_id'		=> 'new_post',
					'return' => "/profile",
					'new_post'		=> array(
						'post_type'		=> 'healthtravel',
						'post_status'		=> 'publish'
					),
					'submit_value'		=> 'Поднесете',
					'updated_message' => __("Ви благодараме, вашето барање е регистрирано. За вашето барање ќе бидете изестени преку емаил или преку телефон.", 'acf')
				)); 

                echo "</div>";
			
             }
			?>
          
		</div>
		<div class="acf_sidebar_container">
	       <?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>