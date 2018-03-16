<?php
/**
 * Template Name: Cards Offers
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
						<li><a href="/deposits-offers">Депозити</a></li>
						<li><a href="/cards-offers" class="selected">Карти</a></li>
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
				        'post_type' => 'cards',
				        'author'    => $user_id,	       
				        'post_staus'=> 'publish',
				        'posts_per_page' => -1
				    );

                   $posts = new WP_Query( $args );
                   
                   $total = $posts->found_posts; 

                    if($total > 0)
                   { 

                    $args_offers = array(
                       	
          			 	 'post_type' => 'cardoffer',   
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

							
							
								<li>	<?php the_field( "fieldd_izdavac", $post_id );
						 				//echo $fieldd_bank;?>
						 				
						 		</li>
						 	
						 		<li>	<?php the_field( "fieldd_naziv", $post_id );
						 			//	echo $fieldd_kategory;?>
						 				 

						 		</li>
						 		<li>	<?php the_field( "fieldd_foto", $post_id );
						 			//	echo $fieldd_kategory;?>
						 				 

						 		</li>
						 		
						 		   <li> <?php  
                                 while ( have_rows('fieldd_nacin_na_otplata', $post_id) ) : the_row();
                                  

              						  echo "<li>".the_sub_field('fieldd_1')."</li>";
             						  echo "<li>".the_sub_field('fieldd_2')."</li>";
             						  
                 
         						endwhile;?></li>

         						<li>	<?php the_field( "fieldd_kamata", $post_id );
						 			//	echo $fieldd_kategory;?>
						 				 

						 		</li>


                                 <li>	<?php the_field( "fieldd_provizija_za_podiganje_na_sredstvata_od_prodazno_mesto", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 		   <li>	<?php the_field( "fieldd_provizija_za_podiganje_od_bankomati", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 		   <li>	<?php the_field( "fieldd_godishna_clenarina", $post_id );
						 				//echo $fieldd_rok_na_kreditot;?>
						 				
						 		</li>
						 			  						 								 		
                      			<?php  endwhile; ?>
				                  	</ul><br/>	 
				               
						 <?php endif; 
 					}	        
	               else
	               {

                      echo "<div class='cards_form'>";
                      echo "<p>".__("За да ги видете нашите понуди за картички ве молиме дополнете го формуларот подоле!", 'acf')."</p>";
		               acf_form(array(
			                'post_content' => false,
			                'post_title' => true,
							'post_id'		=> 'new_post',
							'return' => "/cards-offers",
							'new_post'		=> array(
								'post_type'		=> 'cards',
								'post_status'		=> 'publish'
							),
							'submit_value'		=> 'Поднесете',
							'updated_message' => __("Ви благодараме, вашето барање е регистрирано. За вашето барање ќе бидете изестени преку емаил или преку телефон.", 'acf')
						)); 

		                echo "</div>";
                        echo "<input name='cards_loged_in_name' id='cards_loged_in_name' value='$user_info->user_login '>";
                        echo "</div>";

	               }
                   
                 ?>

			 </div>
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
		
	</div>
</div>
<?php get_footer(); ?>
