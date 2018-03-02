<?php
/**
 *
 * Template Name: Profile
 *
 */
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

<?php if ( is_user_logged_in() ){ ?>
<div class="vertical-menu">
		
<ul>
			
<li><a href="loans-offers">Кредити</a></li>
			
<li><a href="deposits-offers">Депозити</a></li>
			
<li><a href="auto-liability-offers">Автоодговорност</a></li>
			
<li><a href="travel-insurance-offers">Патничко Осигуруванје</a></li>
			
<li><a href="casco-offers">Каско Осигуруванје</a></li>
			
<li><a href="home-insurance-offers">Домаќинско Осигуруванје</a></li>
			
<li><a href="life-insurance-offers">Животно Осигуруванје</a></li>
			
<li><a href="cards-offers">Карти</a></li>
	
</ul>

</div>
<?php
} 
?>
               
 
 </div>
</div> 
<?php get_footer(); ?>