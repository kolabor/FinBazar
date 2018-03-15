<?php
/**
 *
 * Template Name: Profile- requests
 *
 */
acf_form_head();
get_header(); ?>

<?php get_template_part('pageheader'); ?>
 

<div class="site-body site-pad">
 <div class="site-container loans form_box">
  


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
                    <li><a href="/profile">Вашите Барања</a></li>
            </ul>
        </div>

        <?php /*update user profile form */
        $user_id = get_current_user_id();
        $options = array(
        'post_id' => 'user_'.$user_id, // $user_profile,
        /*'field_groups' => array(1078,1091),*/
        'field_groups' => array(1460,1470,1475),
        'submit_value' => 'Обнови Профил'
        );

        echo '<h4>Твоето корисничко име е <b>'.$current_user->user_login.'</b>. Ова не може да се обнови.</h4>';

        acf_form( $options ); 
        ?>
<?php
} 
?>

 </div>
</div> 
<?php get_footer(); ?>