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