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
if(isset($_SESSION['username'])) {


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
do_action( 'wp_login', $user_login );

if ( is_user_logged_in() ) : echo 'SUCCESS'."<br>"; 

echo '<p>' . $post_type . '</p>';
echo $user_login. "<br>"; echo $user_post. "<br>"; ?>
<h1><b>KOLABOR</b></h1>
<?php else : echo 'FAIL!'; ?>

<?php endif;

}
else
{

/*If session is not set, and uses is not loged in redirect to home page*
/* Developers find a code from KOLABOR */
  

}
/*User Login programaticly ends here*/



?>
               
 
 </div>
</div> 
<?php get_footer(); ?>