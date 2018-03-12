<?php
/**
 *
 * Template Name: Profile
 *
 */
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
					    
					    <option value="/loans-offers">Кредити</option> 
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
			              <li><a href="/profile-requests">Вашите барања</a></li>
			      </ul>
			  </div>

		<?php
			$user_id = get_current_user_id();
			$options = array(
			'post_id' => 'user_', // $user_profile,
			'field_groups' => array(1078),
			'submit_value' => 'Update Profile'
			);

			echo '<h5>Your username is <b>'.$current_user->user_login.'</b>. This cannot be changed.</h5>';

			acf_form( $options ); 

		?>
	</div>
<?php
} 
?>

 </div>
</div> 
<?php get_footer(); ?>
