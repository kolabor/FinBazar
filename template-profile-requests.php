<?php
/**
 * Template Name: Profile request
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
              
              <option value="loans-offers">Кредити</option> 
              <option value="deposits-offers">Депозити</option> 
              <option value="auto-liability-offers">Автоодговорност</option> 
              <option value="travel-insurance-offers">Патничко Осигуруванје</option> 
              <option value="casco-offers">Каско Осигуруванје</option> 
              <option value="home-insurance-offers">Домаќинско Осигуруванје</option> 
              <option value="life-insurance-offers">Животно Осигуруванје</option> 
              <option value="cards-offers">Карти</option> 
          </select>     
               </div>

       </div>
 
      
    
      <div class="horizontal-menu">
      <ul> 
              <li><a href="/profile">Профил</a></li>
            
      </ul>
  </div>


       <div class="primary_content">

      <?php 
          /* Check Loan request starts here */       
           $args = array(
                'post_type' => 'loans',
                'author'    => $user_id,         
                'post_staus'=> 'publish',
                'posts_per_page' => -1
            );

                   $posts = new WP_Query( $args );                
                   $total = $posts->found_posts; 

                  if($total > 0)
                   { echo "<p>Вие сте испратиле барање за Кредит. <b><a href='/loan-offers'>Види Кредитните понуди.</a></b></p>";}
                   else 
                   {  echo "<p>Вие не сте испратиле барање за Кредит. <b><a href='/loan-offers'>Испрати барање.</a></b></p>"; }
          /* Check Loan request ends here */  
                ?>
          <?php 
          /* Check Deposits request starts here */       
           $args = array(
                'post_type' => 'deposits',
                'author'    => $user_id,         
                'post_staus'=> 'publish',
                'posts_per_page' => -1
            );

                   $posts = new WP_Query( $args );                
                   $total = $posts->found_posts; 

                  if($total > 0)
                   { echo "<p>Вие сте испратиле барање за Депозити. <b><a href='/deposits-offers'>Види понудите за Депозити.</a></b></p>";}
                   else 
                   {  echo "<p>Вие не сте испратиле барање за Депозити. <b><a href='/deposits-offers'>Испрати барање.</a></b></p>"; }
          /* Check Deposits request ends here */  
                ?>
                 <?php 
          /* Check cards request starts here */       
           $args = array(
                'post_type' => 'cards',
                'author'    => $user_id,         
                'post_staus'=> 'publish',
                'posts_per_page' => -1
            );

                   $posts = new WP_Query( $args );                
                   $total = $posts->found_posts; 

                  if($total > 0)
                   { echo "<p>Вие сте испратиле барање за Картички. <b><a href='/cards-offers'>Види Картичките понуди.</a></b></p>";}
                   else 
                   {  echo "<p>Вие не сте испратиле барање за Картички. <b><a href='/cards-offers'>Испрати барање.</a></b></p>"; }
          /* Check cards request ends here */  
                ?>

                <?php 
          /* Check autoliability request starts here */       
           $args = array(
                'post_type' => 'autoliability',
                'author'    => $user_id,         
                'post_staus'=> 'publish',
                'posts_per_page' => -1
            );

                   $posts = new WP_Query( $args );                
                   $total = $posts->found_posts; 

                  if($total > 0)
                   { echo "<p>Вие сте испратиле барање за Автоодговорност. <b><a href='/auto-liability-offers'>Види понудите за Автоодговорност.</a></b></p>";}
                   else 
                   {  echo "<p>Вие не сте испратиле барање за Автоодговорност. <b><a href='/auto-liability-offers'>Испрати барање.</a></b></p>"; }
          /* Check autoliability request ends here */  
                ?>
             <?php 
          /* Check healthtravel request starts here */       
           $args = array(
                'post_type' => 'healthtravel',
                'author'    => $user_id,         
                'post_staus'=> 'publish',
                'posts_per_page' => -1
            );

                   $posts = new WP_Query( $args );                
                   $total = $posts->found_posts; 

                  if($total > 0)
                  { echo "<p>Вие сте испратиле барање за Здаствено Патничко Осг. <b><a href='/travel-insurance-offers'>Види понудите за Здаствено Патничко Осг.</a></b></p>";}
                   else 
                   {  echo "<p>Вие не сте испратиле барање за Здаствено Патничко Осг. <b><a href='/travel-insurance-offers'>Испрати барање.</a></b></p>"; }
          /* Check healthtravel request ends here */  
                ?>

                   <?php 
          /* Check household request starts here */       
           $args = array(
                'post_type' => 'household',
                'author'    => $user_id,         
                'post_staus'=> 'publish',
                'posts_per_page' => -1
            );

                   $posts = new WP_Query( $args );                
                   $total = $posts->found_posts; 

                  if($total > 0)
                   { echo "<p>Вие сте испратиле барање за Домаќинско Осг. <b><a href='/home-insurance-offers'>Види понудите за Домаќинско Осг.</a></b></p>";}
                   else 
                   {  echo "<p>Вие не сте испратиле барање за Домаќинско Осг. <b><a href='/home-insurance-offers'>Испрати барање.</a></b></p>"; }
          /* Check household request ends here */  
                ?>

                         <?php 
          /* Check lifeinsurance request starts here */       
           $args = array(
                'post_type' => 'lifeinsurance',
                'author'    => $user_id,         
                'post_staus'=> 'publish',
                'posts_per_page' => -1
            );

                   $posts = new WP_Query( $args );                
                   $total = $posts->found_posts; 

                  if($total > 0)
                   { echo "<p>Вие сте испратиле барање за Животно Осг. <b><a href='/life-insurance-offers'>Види понудите за Животно Осг.</a></b></p>";}
                   else 
                   {  echo "<p>Вие не сте испратиле барање за Животно Осг. <b><a href='/life-insurance-offers'>Испрати барање.</a></b></p>"; }
          /* Check lifeinsurance request ends here */  
                ?>

                              <?php 
          /* Check casco request starts here */       
           $args = array(
                'post_type' => 'casco',
                'author'    => $user_id,         
                'post_staus'=> 'publish',
                'posts_per_page' => -1
            );

                   $posts = new WP_Query( $args );                
                   $total = $posts->found_posts; 

                  if($total > 0)
                   { echo "<p>Вие сте испратиле барање за Каско. <b><a href='/casco-offers'>Види понудите за Каско.</a></b></p>";}
                   else 
                   {  echo "<p>Вие не сте испратиле барање за Каско. <b><a href='/casco-offers'>Испрати барање.</a></b></p>"; }
          /* Check casco request ends here */  
                ?>



             
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
                

       </div>
    </div><!-- #primary -->
    
  </div>
</div>
<?php get_footer(); ?>
