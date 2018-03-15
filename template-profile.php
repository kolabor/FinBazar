<?php
/**
 *
 * Template Name: Profile
 *
 */
if ( !is_user_logged_in()){ wp_redirect( '/login' ); exit; }
acf_form_head();
get_header(); ?>

<?php get_template_part('pageheader'); ?>
 

<div class="site-body site-pad">
 <div class="site-container loans form_box">
  
<?php 
/*User Login programaticly starts here*/
/*if(isset($_SESSION['username'])) {


    $user_login     = esc_attr($_SESSION['username']);
    $user_password  = esc_attr($_SESSION['password']);
    $user_email     = esc_attr($_SESSION['username']);
    $user_post      = esc_attr($_SESSION['posttype']);

   



    $user_data = array(
    'user_login'    =>      $user_login,
    'user_pass'     =>      $user_password,
    'user_email'    =>      $user_email,
    'role'          =>      'Author'
);


$creds = array();
$creds['user_login'] = $user_login;
$creds['user_password'] = $user_password;
$creds['remember'] = true;


$user = wp_signon( $creds, false );

$userID = $user->ID;

wp_set_current_user( $userID, $user_login );
wp_set_auth_cookie( $userID, true, false );
do_action( 'wp_login', $user_login );*/

?>

<?php if ( is_user_logged_in()  ){ ?>

<div class="site-body site-pad">
	<div class="site-container">

		<div id="primary" class="content-area">
	
			<div class="primary_menu">

				<div class="vertical-menu">
					<ul>
						<li><a href="/loan-offers">Кредити</a></li>
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
			 	<div class="horizontal-menu">
			      <ul> 
			              <li><a href="/podatoci">Обнови Профил</a></li>
			      </ul>
            <h2>Вашите барање</h2>
            <h5>Овде ги имате вашите барања ако не сте пратиле барања овде можете</h5>
            <h5>да пратите со клик на иконите со цервеното "+" </h5>
            <h5>понудите можете да ги видите со клик на иконите со зеленото "✔"</h5>
            <div class="ikonat">
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
                   { echo "<div class ='ikonat2'><a href='/loan-offers'><i class='ion-cash icon-profile' data-count='✔'></i><h4>Кредити</h4><h6>Види Понудите</h6>
                          </a></div>";}
                   else 
                   {  echo "<div class ='ikonat3'><a href='/loan-offers'><i class='ion-cash icon-profile' data-count='+'></i><h4>Кредити</h4><h6>Испрати барање</h6></a></div>"; }
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
                   { echo "<div class ='ikonat2'><a href='/deposits-offers'><i class='ion-briefcase icon-profile' data-count='✔'></i><h4>Депозити</h4><h6>Види Понудите</h6>
                          </a></div>";}
                   else 
                   {  echo "<div class ='ikonat3'><a href='/deposits-offers'><i class='ion-briefcase icon-profile' data-count='+'></i><h4>Депозити</h4><h6>Испрати барање</h6></a></div>"; }
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
                   { echo "<div class ='ikonat2'><a href='/cards-offers'><i class='ion-card icon-profile' data-count='✔'></i><h4>Карти</h4><h6>Види Понудите</h6>
                          </a></div>";}
                   else 
                   {  echo "<div class ='ikonat3'><a href='/cards-offers'><i class='ion-card icon-profile' data-count='+'></i><h4>Карти</h4><h6>Испрати барање</h6></a></div>"; }
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
                   { echo "<div class ='ikonat2'><a href='/auto-liability-offers'><i class='ion-model-s icon-profile' data-count='✔'></i><h4>Автоодговорност</h4><h6>Види Понудите</h6>
                          </a></div>";}
                   else 
                   {  echo "<div class ='ikonat3'><a href='/auto-liability-offers'><i class='ion-model-s icon-profile' data-count='+'></i><h4>Автоодговорност</h4><h6>Испрати барање</h6></a></div>"; }
          /* Check autoliability request ends here */  
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
                   { echo "<div class ='ikonat2'><a href='/casco-offers'><i class='ion-android-car icon-profile' data-count='✔'></i><h4>Каско</h4><h6>Види Понудите</h6>
                          </a></div>";}
                   else 
                   {  echo "<div class ='ikonat3'><a href='/casco-offers'><i class='ion-android-car icon-profile' data-count='+'></i><h4>Каско</h4><h6>Испрати барање</h6></a></div>"; }
          /* Check casco request ends here */  
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
                  { echo "<div class ='ikonat2'><a href='/travel-insurance-offers'><i class='ion-plane icon-profile' data-count='✔'></i><h4>Патничко Осг</h4><h6>Види Понудите</h6> 
                          </a></div>";}
                   else 
                   {  echo "<div class ='ikonat3'><a href='/travel-insurance-offers'><i class='ion-plane icon-profile' data-count='+'></i><h4>Патничко Осг</h4><h6>Испрати барање</h6></a></div>"; }
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
                   { echo "<div class ='ikonat2'><a href='/home-insurance-offers'><i class='ion-home icon-profile' data-count='✔'></i><h4>Домаќинско Осг</h4><h6>Види Понудите</h6>
                          </a></div>";}
                   else 
                   {  echo "<div class ='ikonat3'><a href='/home-insurance-offers'><i class='ion-home icon-profile' data-count='+'></i><h4>Домаќинско Осг</h4><h6>Испрати барање</h6></a></div>"; }
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
                   { echo "<div class ='ikonat2'><a href='/life-insurance-offers'><i class='ion-ios-heart icon-profile' data-count='✔'></i><h4>Животно Осг</h4><h6>Види Понудите</h6>
                          </a></div>";}
                   else 
                   {  echo "<div class ='ikonat3'><a href='/life-insurance-offers'><i class='ion-ios-heart icon-profile' data-count='+'></i><h4>Животно Осг</h4><h6>Испрати барање</h6></a></div>"; }
          /* Check lifeinsurance request ends here */  
                ?>
              </div>
 </div>
</div>
</div>


<?php
} 
?>            
<?php get_footer(); ?>