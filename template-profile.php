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

    $user_data = array(
    'user_login'    =>      $user_login,
    'user_pass'     =>      $user_password,
    'user_email'    =>      $user_email,
    'role'          =>      'Administrator'
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

if ( is_user_logged_in() ) : echo 'SUCCESS'; ?>
echo $userID."<br>";
<h1>Html for logged in user </h1>
<?php else : echo 'FAIL!'; ?>

<?php endif; 

}
else
{

/*If session is not set, and uses is not loged in redirect to home page*
/* Developers find a code from KOLABOR */
  

}
/*User Login programaticly ends here*/


if(isset($_SESSION['username'])) {

	echo "Session set!<br>";
    $username = $_SESSION['username'];
    $pass = $_SESSION['password'];
    $userid = $_SESSION['user_id'];

    echo $username;
    echo "<br>";
    echo $pass;


    /* 1. User login (Find wordpress function for user login)*/

    /* 2. Find Loans, deposid, casco .... and show for given user (use wordpress post loop) */


}
else
{
	echo "Session not set!<br>";
}

?>
               
 
	</div>
</div>
<?php get_footer(); ?>