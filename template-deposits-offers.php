<?php
/**
 * Template Name: Deposits Offers
 *
 */

if ( !is_user_logged_in()){ wp_redirect( '/login' ); exit; }
$user_id = get_current_user_id();
$user_info = get_userdata($user_id);

acf_form_head();
get_header(); ?>

<?php get_template_part('pageheader'); ?>

<div class="site-body site-pad">
	<div class="site-container">
        
		<div id="primary" class="content-area">
	
			<div class="primary_menu">

				<div class="vertical-menu">
					<ul>
						<li><a href="/loan-offers" >Кредити</a></li>
						<li><a href="/deposits-offers" class="selected">Депозити</a></li>
						<li><a href="/cards-offers">Карти</a></li>
						<li><a href="/auto-liability-offers">Автоодговорност</a></li>
						<li><a href="/travel-insurance-offers">Патничко Осигуруванје</a></li>
						<li><a href="/casco-offers">Каско Осигуруванје</a></li>
						<li><a href="/home-insurance-offers">Домаќинско Осигуруванје</a></li>
						<li><a href="/life-insurance-offers">Животно Осигуруванје</a></li>		
					</ul>		
					<select> 
					    <option value="" selected="selected">Понуди</option> 
					    
					    <option value="/loan-offers">Кредити</option> 
					    <option value="/deposits-offers">Депозити</option> 
					    <option value="/auto-liability-offers">Автоодговорност</option> 
					    <option value="/travel-insurance-offers">Патничко Осигуруванје</option> 
					    <option value="/casco-offers">Каско Осигуруванје</option> 
					    <option value="/home-insurance-offers">Домаќинско Осигуруванје</option> 
					    <option value="/life-insurance-offers">Животно Осигуруванје</option> 
					    <option value="/cards-offers">Карти</option> 
					</select> 
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
				        'post_type' => 'deposits',
				        'author'    => $user_id,	       
				        'post_staus'=> 'publish',
				        'posts_per_page' => -1
				    );

                   $posts = new WP_Query( $args );
                   
                   $total = $posts->found_posts; 
                    
                  if($total > 0)
                   { 

                    $args_offers = array(
                       	
          			 	 'post_type' => 'depositoffer',   
           				 'post_staus'=> 'publish',
           				 'posts_per_page' => -1
           				);
           
                 	 $offers_posts = new WP_Query( $args_offers );
                    $totalo = $offers_posts->found_posts; 
				

              //loop           
           			 if( $offers_posts->have_posts()): ?>
							<ul>
							<?php while( $offers_posts->have_posts() ) : $offers_posts->the_post(); 


								$post_id = get_the_ID() ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
								<?php the_post_thumbnail(array(200,200));?> <?php the_excerpt();?></a><br/> </li>

							
							
								<li>	<?php the_field( "fieldd_banka_type", $post_id );
						 				//echo $fieldd_bank;?>
						 				
						 		</li>
						 	
						 		<li>	<?php the_field( "fieldd_rok", $post_id );
						 			//	echo $fieldd_kategory;?>
						 				 

						 		</li>
						 		<li>	<?php the_field( "fieldd_kamata", $post_id );
						 			//	echo $fieldd_kategory;?>
						 				 

						 		</li>
						 		<li>	<?php the_field( "fieldd_otvoreno", $post_id );
						 			//	echo $fieldd_kategory;?>
						 				 

						 		</li>

                                 <li>	<?php the_field( "fieldd_shtedenje", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 		   <li>	<?php the_field( "fieldd_oreceno", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 		   <li>	<?php the_field( "fieldd_minimalen_vlog", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 			   <li>	<?php the_field( "fieldd_maksimalen_vlog", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 			   <li>	<?php the_field( "fieldd_valuta", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 		</li>
						 			   <li>	<?php the_field( "fieldd_fiksna_promenliva", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 		</li>
						 			   <li>	<?php the_field( "fieldd_bonus", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 								 		
                      			<?php  endwhile; ?>
				                  	</ul><br/>	 
				               
						 <?php endif; 
 					}	        
	               else
	               {

                      echo "<div class='deposits_form'>";
                      echo "<p>".__("За да ги видете нашите понуди за депозити ве молиме дополнете го формуларот подоле!", 'acf')."</p>";
		               acf_form(array(
			                'post_content' => false,
			                'post_title' => true,
							'post_id'		=> 'new_post',
							'return' => "/deposits-offers",
							'new_post'		=> array(
								'post_type'		=> 'deposits',
								'post_status'		=> 'publish'
							),
							'submit_value'		=> 'Поднесете',
							'updated_message' => __("Ви благодараме, вашето барање е регистрирано. За вашето барање ќе бидете изестени преку емаил или преку телефон.", 'acf')
						)); 

                        echo "<input name='deposits_loged_in_name' id='deposits_loged_in_name' value='$user_info->user_login '>";
                        echo "</div>";

	               }
                   
                 ?>

			 </div>
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
		
	</div>
</div>
<?php get_footer(); ?>
