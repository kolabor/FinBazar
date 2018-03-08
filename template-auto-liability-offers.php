<?php
/**
 * Template Name: Autoliability Offers
 *
 */

if ( !is_user_logged_in()){ wp_redirect( '/login' ); exit; }

get_header(); ?>

<?php get_template_part('pageheader'); ?>

<div class="site-body site-pad">
	<div class="site-container">
        
		<div id="primary" class="content-area">
	
			<div class="primary_menu">

				<div class="vertical-menu">
					<ul>
						<li><a href="loans-offers">Кредити</a></li>
						<li><a href="deposits-offers">Депозити</a></li>
						<li><a href="cards-offers">Карти</a></li>
						<li><a href="auto-liability-offers" class="selected">Автоодговорност</a></li>
						<li><a href="travel-insurance-offers">Патничко Осигуруванје</a></li>
						<li><a href="casco-offers">Каско Осигуруванје</a></li>
						<li><a href="home-insurance-offers">Домаќинско Осигуруванје</a></li>
						<li><a href="life-insurance-offers">Животно Осигуруванје</a></li>							
					</ul>		
               </div>

			 </div>
			 <div class="primary_content">
             
             <!--Content from dashboard starts here --> 
			 	<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
				
			   <?php endwhile; // end of the loop. ?>
            <!--Content from dashboard ends here -->  
            	            	 <?php 
                    
				    $args = array(
				        'post_type' => 'auto-liability',
				        'author'    => $user_id,	       
				        'post_staus'=> 'publish',
				        'posts_per_page' => -1
				    );

                   $posts = new WP_Query( $args );
                   
                   $total = $posts->found_posts; 

                  if($total > 0)
                   { 

					  echo "Show auto-liability offers here!";
	               }
	               else
	               {

                      echo "<div class='auto-liability_form'>";
                      echo "<p>".__("За да ги видете нашите понуди за депозити ве молиме дополнете го формуларот подоле!", 'acf')."</p>";
                      acf_form(array(
			                'post_content' => false,
			                'post_title' => true,
							'post_id'		=> 'new_post',
							'return' => "/auto-liability-offers/",
							'new_post'		=> array(
								'post_type'		=> 'auto-liability',
								'post_status'		=> 'publish'
							),
							'submit_value'		=> 'Поднесете',
							'updated_message' => __("Ви благодараме, вашето барање е регистрирано. За вашето барање ќе бидете изестени преку емаил или преку телефон.", 'acf')
			            	)); 
                        echo "<input name='auto-liability_loged_in_name' id='auto-liability_loged_in_name' value='$user_info->user_login '>";
                        echo "</div>";

	               }
                   
                 ?>

			 </div>
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
		
	</div>
</div>
<?php get_footer(); ?>
