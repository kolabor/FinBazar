<?php 
/**
 * Register credit custom post type
 *
 * @package Finmarket 1.0
 * @since Finamarket 1.0
 */

//Credit custom post type

 $args = array(
  'labels'  =>  array(

            'menu_name' => 'Forms',
          ),  
    'capabilities'  =>  array(
            'capability_type' => 'posts',
            'create_posts' => 'do_not_allow',
    ),    

  'map_meta_cap' => true, 
  'menu_position' => 5,
  'public'    =>  true

);
register_post_type( 'Forms', $args );


 $args = array(
  'labels'  =>  array(

            'menu_name' => 'Offers',
          ),      

    'capabilities'  =>  array(
            'capability_type' => 'posts',
            'create_posts' => 'do_not_allow',
    ),

  'map_meta_cap' => true,
  'menu_position' => 5,
  'public'    =>  true

);
register_post_type( 'Offers', $args );



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
        'show_in_menu' => 'edit.php?post_type=forms',
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
        'add_new_item' => __( 'Add New Casco', 'finmarket' ), 
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
        'show_in_menu' => 'edit.php?post_type=forms',
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
        'show_in_menu' => 'edit.php?post_type=forms',
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
        'show_in_menu' => 'edit.php?post_type=forms',
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
        'show_in_menu' => 'edit.php?post_type=forms',
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
        'show_in_menu' => 'edit.php?post_type=offers',
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
        'all_items' => __( 'All Deposit Offer', 'finmarket' ),
        'view_items' => __( 'Search Deposit Offer', 'finmarket' ),
        'not_found' => __( 'No Deposit Offer found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Deposit Offer found in trash', 'finmarket' ),
        'menu_name' => __( 'Deposit Offer', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'show_in_menu' => 'edit.php?post_type=offers',
        'public' => true

      );
 
    register_post_type('Deposit Offer', $args);
  }


 add_action('init', 'card_offers_custom_post_type');

function card_offers_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Card Offer', 'finmarket' ),
        'singular_name' => __( 'Card Offer', 'finmarket' ),
        'add_new'  => __( 'Add New Card Offer', 'finmarket' ),
        'add_new_item' => __( 'Add New Card Offer', 'finmarket' ), 
        'edit_item' => __( 'Edit Card Offer', 'finmarket' ),
        'new_item' => __( 'New Card Offer', 'finmarket' ),
        'all_items' => __( 'All Card Offer', 'finmarket' ),
        'view_items' => __( 'Search Card Offer', 'finmarket' ),
        'not_found' => __( 'No Card Offer found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Card Offer found in trash', 'finmarket' ),
        'menu_name' => __( 'Card Offer', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'show_in_menu' => 'edit.php?post_type=offers',
        'public' => true

      );
 
    register_post_type('Card Offer', $args);

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
        'show_in_menu' => 'edit.php?post_type=forms',
        'public' => true

      );
 
    register_post_type('Cards', $args);

}



add_action('init', 'finmarket_auto_liability_offers_custom_post_type');

function finmarket_auto_liability_offers_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Auto liability Offers', 'finmarket' ),
        'singular_name' => __( 'Auto liability Offers', 'finmarket' ),
        'add_new'  => __( 'Add New Auto liability Offers', 'finmarket' ),
        'add_new_item' => __( 'Add New Auto liability Offers', 'finmarket' ), 
        'edit_item' => __( 'Edit Auto liability Offers', 'finmarket' ),
        'new_item' => __( 'New Auto liability Offers', 'finmarket' ),
        'all_items' => __( 'All Auto liabilities Offers', 'finmarket' ),
        'view_items' => __( 'Search Auto liabilities Offers', 'finmarket' ),
        'not_found' => __( 'No Auto liabilities Offers found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Auto liabilities Offers found in trash', 'finmarket' ),
        'menu_name' => __( 'Auto liability Offers', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'show_in_menu' => 'edit.php?post_type=offers',
        'public' => true

      );
 
    register_post_type('Auto liability Offers', $args);

}
add_action('init', 'loan_custom_post_type');

function loan_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Loans', 'finmarket' ),
        'singular_name' => __( 'Loans', 'finmarket' ),
        'add_new'  => __( 'Add New Loans', 'finmarket' ),
        'add_new_item' => __( 'Add New Loans', 'finmarket' ), 
        'edit_item' => __( 'Edit Loans', 'finmarket' ),
        'new_item' => __( 'New Loans', 'finmarket' ),
        'all_items' => __( 'All Loans', 'finmarket' ),
        'view_items' => __( 'Search Loans', 'finmarket' ),
        'not_found' => __( 'No Loans found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Loans found in trash', 'finmarket' ),
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
        'show_in_menu' => 'edit.php?post_type=forms',
        'public' => true

      );
 
    register_post_type('Loans', $args);

}

add_action('init', 'deposit_custom_post_type');

function deposit_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Deposits', 'finmarket' ),
        'singular_name' => __( 'Deposits', 'finmarket' ),
        'add_new'  => __( 'Add New Deposits', 'finmarket' ),
        'add_new_item' => __( 'Add New Deposits', 'finmarket' ), 
        'edit_item' => __( 'Edit Deposits', 'finmarket' ),
        'new_item' => __( 'New Deposits', 'finmarket' ),
        'all_items' => __( 'All Deposits', 'finmarket' ),
        'view_items' => __( 'Search Deposits', 'finmarket' ),
        'not_found' => __( 'No Deposits found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Deposits found in trash', 'finmarket' ),
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
        'show_in_menu' => 'edit.php?post_type=forms',
        'public' => true

      );
 
    register_post_type('Deposits', $args);

}


add_action('init', 'finmarket_casco_offers_custom_post_type');

function finmarket_casco_offers_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Casco Offers', 'finmarket' ),
        'singular_name' => __( 'Casco Offers', 'finmarket' ),
        'add_new'  => __( 'Add New Casco Offers', 'finmarket' ),
        'add_new_item' => __( 'Add New Casco Offers', 'finmarket' ), 
        'edit_item' => __( 'Edit Casco Offers', 'finmarket' ),
        'new_item' => __( 'New Casco Offers', 'finmarket' ),
        'all_items' => __( 'All Casco Offers', 'finmarket' ),
        'view_items' => __( 'Search Cascos Offers', 'finmarket' ),
        'not_found' => __( 'No Casco Offers found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Casco Offers found in trash', 'finmarket' ),
        'menu_name' => __( 'Casco Offers', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'show_in_menu' => 'edit.php?post_type=offers',
        'public' => true

      );
 
    register_post_type('Casco Offers', $args);

}

add_action('init', 'finmarket_health_travel_offers_custom_post_type');

function finmarket_health_travel_offers_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Health Travel Offers', 'finmarket' ),
        'singular_name' => __( 'Health Travel Offers', 'finmarket' ),
        'add_new'  => __( 'Add New Health Travel Offers', 'finmarket' ),
        'add_new_item' => __( 'Add New Health Travel Offers', 'finmarket' ), 
        'edit_item' => __( 'Edit Health Travel Offers', 'finmarket' ),
        'new_item' => __( 'New Health Travel Offers', 'finmarket' ),
        'all_items' => __( 'All Health Travel Offers', 'finmarket' ),
        'view_items' => __( 'Search Health Travels Offers', 'finmarket' ),
        'not_found' => __( 'No Health Travels Offers found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Health OffersTravels found in trash', 'finmarket' ),
        'menu_name' => __( 'Health Travel Offers', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'show_in_menu' => 'edit.php?post_type=offers',
        'public' => true

      );
 
    register_post_type('Health Travel Offers', $args);

}

add_action('init', 'finmarket_houshold_offers_custom_post_type');

function finmarket_houshold_offers_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Household Offers', 'finmarket' ),
        'singular_name' => __( 'Household Offers', 'finmarket' ),
        'add_new'  => __( 'Add New Household Offers', 'finmarket' ),
        'add_new_item' => __( 'Add New Household Offers', 'finmarket' ), 
        'edit_item' => __( 'Edit Household Offers', 'finmarket' ),
        'new_item' => __( 'New Household Offers', 'finmarket' ),
        'all_items' => __( 'All Households Offers', 'finmarket' ),
        'view_items' => __( 'Search Households Offers', 'finmarket' ),
        'not_found' => __( 'No Households Offers found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Households Offers found in trash', 'finmarket' ),
        'menu_name' => __( 'Household Offers', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'show_in_menu' => 'edit.php?post_type=offers',
        'public' => true

      );
 
    register_post_type('Household Offers', $args);

}

add_action('init', 'finmarket_life_insurance_offers_custom_post_type');

function finmarket_life_insurance_offers_custom_post_type()
{
  $labels = array(

        'name'  => __( 'Life Insurance Offers', 'finmarket' ),
        'singular_name' => __( 'Life Insurance Offers', 'finmarket' ),
        'add_new'  => __( 'Add New Life Insurance Offers', 'finmarket' ),
        'add_new_item' => __( 'Add New Life Insurance Offers', 'finmarket' ), 
        'edit_item' => __( 'Edit Life Insurance Offers', 'finmarket' ),
        'new_item' => __( 'New Life Insurance Offers', 'finmarket' ),
        'all_items' => __( 'All Life Insurances Offers', 'finmarket' ),
        'view_items' => __( 'Search Life Insurances Offers', 'finmarket' ),
        'not_found' => __( 'No Life Insurances Offers found', 'finmarket' ),
        'not_found_in_trash' => __( 'No Life Insurances Offers found in trash', 'finmarket' ),
        'menu_name' => __( 'Life Insurances Offers', 'finmarket' ),

      );

      $args = array(
        'can_export' => true,
        'labels' => $labels,
        'supports'  => array('thumbnail', 'title'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'show_in_menu' => 'edit.php?post_type=offers',
        'public' => true

      );
 
    register_post_type('Life Insurance Offers', $args);

}