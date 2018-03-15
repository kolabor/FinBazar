<?php
/**
 * Template Name: Loan Offers
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
						<li><a href="/loan-offers" class="selected">Кредити</a></li>
						<li><a href="/deposits-offers">Депозити</a></li>
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
				        'post_type' => 'loans',
				        'author'    => $user_id,	       
				        'post_staus'=> 'publish',
				        'posts_per_page' => -1
				    );

                   $posts = new WP_Query( $args );
                   
                   $total = $posts->found_posts; 


                  if ($total > 0 ) 
                   {
                    $args_offers = array(
                        
                'post_type' => 'loanoffers',   
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

       
       
        <li> <?php the_field( "fieldd_bank", $post_id );
           //echo $fieldd_bank;?>
           
         </li>
        
         <li> <?php the_field( "fieldd_kategory", $post_id );
          // echo $fieldd_kategory;?>
            

         </li>

                                 <?php  
                                 while ( have_rows('fieldd_kamatna_stapka_vo_prv_period', $post_id) ) : the_row();
                                  
                echo "<li>".the_sub_field('fieldd_kamatna_stapka')."</li>";
                echo "<li>".the_sub_field('fieldd_fiksna_promenliva')."</li>";
                echo "<li>".the_sub_field('fieldd_period_na_fiksnost')."</li>";
                 
         endwhile;?>

                                  <?php  
                                     while ( have_rows('fieldd_kamatna_stapka_vo_vtor_period', $post_id) ) : the_row();
                                  
                echo "<li>".the_sub_field('fieldd_kamatna_stapka_2')."</li>";
                echo "<li>".the_sub_field('fieldd_fiksna_promenliva_2')."</li>";
                echo "<li>".the_sub_field('fieldd_period_na_fiksnost_2')."</li>";
                 
         endwhile;?>
          <?php  
                                     while ( have_rows('fieldd_kamatna_stapka_vo_tret_period', $post_id) ) : the_row();
                                  
                echo "<li>".the_sub_field('fieldd_kamatna_stapka_3')."</li>";
                echo "<li>".the_sub_field('fieldd_fiksna_promenliva_3')."</li>";
                echo "<li>".the_sub_field('fieldd_period_na_fiksnost_3')."</li>";
                 
         endwhile;?>
         
        
                                 <li> <?php the_field( "fieldd_rok_na_kreditot", $post_id );
           //echo $fieldd_rok_na_kreditot;?>
           
         </li>
          <li> <?php the_field( "fieldd_valuta", $post_id );
          // echo $fieldd_valuta;?>
           
         </li>
           <li> <?php the_field( "fieldd_iznos_na_kredit", $post_id );
          // echo $fieldd_iznos_na_kredit;?>
           
         </li>
           <?php  
                                     while ( have_rows('fieldd_primer_presmetka_za_iznos_od_50.000_eur_240m', $post_id) ) : the_row();
                                  
                echo "<li>".the_sub_field('fieldd_rata_1_period')."</li>";
                echo "<li>".the_sub_field('fieldd_rata_2_period')."</li>";
                echo "<li>".the_sub_field('fieldd_rata_3_period')."</li>";
                echo "<li>".the_sub_field('fieldd_vkupno_kamata')."</li>";
                 
         endwhile;?>
         
                         <?php  endwhile; ?>
                       </ul><br/>  
                   
       <?php endif; 
      }
	               else
	               {

                      echo "<div class='loans_form'>";
                      echo "<p>".__("За да ги видете нашите понуди за кредити ве молиме дополнете го формуларот подоле!", 'acf')."</p>";
                      acf_form(array(
			                'post_content' => false,
			                'post_title' => true,
							'post_id'		=> 'new_post',
							'return' => "/loan-offers/",
							'new_post'		=> array( 
								'post_type'		=> 'loans',
								'post_status'		=> 'publish'
							),
							'submit_value'		=> 'Поднесете',
							'updated_message' => __("Ви благодараме, вашето барање е регистрирано. За вашето барање ќе бидете изестени преку емаил или преку телефон.", 'acf')
			            	)); 
                        echo "<input name='loans_loged_in_name' id='loans_loged_in_name' value='$user_info->user_login '>";
                        echo "</div>"; 


	               }
                   
                 ?>

			 </div>
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
		
	</div>
</div>
<?php get_footer(); ?>
