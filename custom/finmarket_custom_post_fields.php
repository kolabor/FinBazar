<?php 
/**
 * Register credit custom post type
 *
 * @package Finmarket 1.0
 * @since Finamarket 1.0
 */

//Credit custom post type
add_action('init', 'finmarket_credit_custom_post_type');

function finmarket_credit_custom_post_type()
{
  $labels = array(

      	'name'  => __( 'Loans', 'finmarket' ),
      	'singular_name' => __( 'Loan', 'finmarket' ),
      	'add_new'  => __( 'Add New Loan', 'finmarket' ),
      	'add_new_item' => __( 'Add New Loan', 'finmarket' ), 
      	'edit_item' => __( 'Edit Loan', 'finmarket' ),
      	'new_item' => __( 'New Loan', 'finmarket' ),
      	'all_items' => __( 'All Loans', 'finmarket' ),
      	'view_items' => __( 'Search Loans', 'finmarket' ),
      	'not_found' => __( 'No Loans found', 'finmarket' ),
      	'not_found_in_trash' => __( 'No clinic found in trash', 'finmarket' ),
      	'menu_name' => __( 'Loans', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
      	'labels' => $labels,
      	'supports'  => array('thumbnail', 'title'),
      	'menu_icon' => 'dashicons-welcome-write-blog',
      	'hierarchical' => false,
      	'show_ui' => true,
      	'show_in_nav_menus' => false,
      	'menu_position' => 4,
      	'public' => true

      );
 
    register_post_type('Loans', $args);

}

add_action('init', 'finmarket_deposits_custom_post_type');

function finmarket_deposits_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Deposits', 'finmarket' ),
        'singular_name' => __( 'Deposit', 'finmarket' ),
        'add_new'  => __( 'Add New Deposit', 'finmarket' ),
        'add_new_item' => __( 'Add New Deposit', 'finmarket' ), 
        'edit_item' => __( 'Edit Deposit', 'finmarket' ),
        'new_item' => __( 'New Deposit', 'finmarket' ),
        'all_items' => __( 'All Deposits', 'finmarket' ),
        'view_items' => __( 'Search Deposits', 'finmarket' ),
        'not_found' => __( 'No Deposits found', 'finmarket' ),
        'not_found_in_trash' => __( 'No clinic found in trash', 'finmarket' ),
        'menu_name' => __( 'Deposits', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Deposit', $args);

}

add_action('init', 'finmarket_auto_liability_custom_post_type');

function finmarket_auto_liability_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Auto liability', 'finmarket' ),
        'singular_name' => __( 'Auto liability', 'finmarket' ),
        'add_new'  => __( 'Add New Auto liability', 'finmarket' ),
        'add_new_item' => __( 'Add New Auto liability', 'finmarket' ), 
        'edit_item' => __( 'Edit Auto liability', 'finmarket' ),
        'new_item' => __( 'New Auto liability', 'finmarket' ),
        'all_items' => __( 'All Auto liabilities', 'finmarket' ),
        'view_items' => __( 'Search Auto liabilities', 'finmarket' ),
        'not_found' => __( 'No Auto liabilities found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Auto liabilities found in trash', 'finmarket' ),
        'menu_name' => __( 'Auto liability', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Auto liability', $args);

}


add_action('init', 'finmarket_casco_custom_post_type');

function finmarket_casco_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Casco', 'finmarket' ),
        'singular_name' => __( 'Casco', 'finmarket' ),
        'add_new'  => __( 'Add New Casco', 'finmarket' ),
        'add_new_item' => __( 'Add New Cascoy', 'finmarket' ), 
        'edit_item' => __( 'Edit Casco', 'finmarket' ),
        'new_item' => __( 'New Casco', 'finmarket' ),
        'all_items' => __( 'All Cascos', 'finmarket' ),
        'view_items' => __( 'Search Cascos', 'finmarket' ),
        'not_found' => __( 'No Cascos found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Cascos found in trash', 'finmarket' ),
        'menu_name' => __( 'Casco', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Casco', $args);

}


add_action('init', 'finmarket_health_travel_custom_post_type');

function finmarket_health_travel_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Health Travel', 'finmarket' ),
        'singular_name' => __( 'Health Travel', 'finmarket' ),
        'add_new'  => __( 'Add New Health Travel', 'finmarket' ),
        'add_new_item' => __( 'Add New Health Travel', 'finmarket' ), 
        'edit_item' => __( 'Edit Health Travel', 'finmarket' ),
        'new_item' => __( 'New Health Travel', 'finmarket' ),
        'all_items' => __( 'All Health Travel', 'finmarket' ),
        'view_items' => __( 'Search Health Travels', 'finmarket' ),
        'not_found' => __( 'No Health Travels found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Health Travels found in trash', 'finmarket' ),
        'menu_name' => __( 'Health Travel', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Health Travel', $args);

}



add_action('init', 'finmarket_houshold_custom_post_type');

function finmarket_houshold_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Household', 'finmarket' ),
        'singular_name' => __( 'Household', 'finmarket' ),
        'add_new'  => __( 'Add New Household', 'finmarket' ),
        'add_new_item' => __( 'Add New Household', 'finmarket' ), 
        'edit_item' => __( 'Edit Household', 'finmarket' ),
        'new_item' => __( 'New Household', 'finmarket' ),
        'all_items' => __( 'All Households', 'finmarket' ),
        'view_items' => __( 'Search Households', 'finmarket' ),
        'not_found' => __( 'No Households found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Households found in trash', 'finmarket' ),
        'menu_name' => __( 'Household', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Household', $args);

}

add_action('init', 'finmarket_life_insurance_custom_post_type');

function finmarket_life_insurance_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Life Insurance', 'finmarket' ),
        'singular_name' => __( 'Life Insurance', 'finmarket' ),
        'add_new'  => __( 'Add New Life Insurance', 'finmarket' ),
        'add_new_item' => __( 'Add New Life Insurance', 'finmarket' ), 
        'edit_item' => __( 'Edit Life Insurance', 'finmarket' ),
        'new_item' => __( 'New Life Insurance', 'finmarket' ),
        'all_items' => __( 'All Life Insurances', 'finmarket' ),
        'view_items' => __( 'Search Life Insurances', 'finmarket' ),
        'not_found' => __( 'No Life Insurances found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Life Insurances found in trash', 'finmarket' ),
        'menu_name' => __( 'Life Insurances', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Life Insurance', $args);

}

add_action('init', 'loan_offers_custom_post_type');

function loan_offers_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Loan Offer', 'finmarket' ),
        'singular_name' => __( 'Loan Offer', 'finmarket' ),
        'add_new'  => __( 'Add New Loan Offer', 'finmarket' ),
        'add_new_item' => __( 'Add New Loan Offer', 'finmarket' ), 
        'edit_item' => __( 'Edit Loan Offer', 'finmarket' ),
        'new_item' => __( 'New Loan Offer', 'finmarket' ),
        'all_items' => __( 'All Loan Offers', 'finmarket' ),
        'view_items' => __( 'Search Loan Offers', 'finmarket' ),
        'not_found' => __( 'No Loan Offers found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Loan Offers found in trash', 'finmarket' ),
        'menu_name' => __( 'Loan Offers', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Loan Offers', $args);

}

add_action('init', 'deposit_offers_custom_post_type');

function deposit_offers_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Deposit Offer', 'finmarket' ),
        'singular_name' => __( 'Deposit Offer', 'finmarket' ),
        'add_new'  => __( 'Add New Deposit Offer', 'finmarket' ),
        'add_new_item' => __( 'Add New Deposit Offer', 'finmarket' ), 
        'edit_item' => __( 'Edit Deposit Offer', 'finmarket' ),
        'new_item' => __( 'New Deposit Offer', 'finmarket' ),
        'all_items' => __( 'All Deposit Offers', 'finmarket' ),
        'view_items' => __( 'Search Deposit Offers', 'finmarket' ),
        'not_found' => __( 'No Deposit Offer found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Deposit Offers found in trash', 'finmarket' ),
        'menu_name' => __( 'Deposit Offers', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Deposit Offers', $args);

}

add_action('init', 'cards_custom_post_type');

function cards_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Cards', 'finmarket' ),
        'singular_name' => __( 'Cards', 'finmarket' ),
        'add_new'  => __( 'Add New Cards', 'finmarket' ),
        'add_new_item' => __( 'Add New Cards', 'finmarket' ), 
        'edit_item' => __( 'Edit Cards', 'finmarket' ),
        'new_item' => __( 'New Cards', 'finmarket' ),
        'all_items' => __( 'All Cards', 'finmarket' ),
        'view_items' => __( 'Search Cards', 'finmarket' ),
        'not_found' => __( 'No Cards found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Cards found in trash', 'finmarket' ),
        'menu_name' => __( 'Cards', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 4,
        'public' => true

      );
 
    register_post_type('Cards', $args);

}