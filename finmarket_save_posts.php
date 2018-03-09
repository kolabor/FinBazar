<?php 
/**
 * Make registration or login before saving ACF post
 *
 * @package Finmarket 1.0
 * @since Finamarket 1.0
 */

function acf_save_loan_post( $post_id ) 
{

 /*Get Post type*/
 $get_post_type = get_post_type($post_id);


 if($get_post_type == 'loans') /* Check if post type equals Loans */
 {require 'finmarket_save_loans_posts.php';} 
 else 
 	
 	if ($get_post_type == 'deposits') 
 	{require 'finmarket_save_deposits_posts.php';} 
 
 else 
 	
 	if ($get_post_type == 'autoliability')
 	{require 'finmarket_save_auto-liability_posts.php';}
 
 else 

 	if ($get_post_type == 'healthtravel') 
 	{require 'finmarket_save_health-travel_posts.php';}

 else 

 	if ($get_post_type == 'household') 
 	{require 'finmarket_save_houshold_posts.php';}

 else 

 	if ($get_post_type == 'casco') 
 	{require 'finmarket_save_casco_posts.php';}

 else 

 	if ($get_post_type == 'lifeinsurance') 
 	{require 'finmarket_custom_life-insurance_fields.php';}

}
add_action('acf/save_post', 'acf_save_loan_post', 1);


?>