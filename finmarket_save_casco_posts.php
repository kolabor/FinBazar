<?php
	  $email =   $_POST['acf']['field_5a781ec0865b7']['field_5a781ec0afaf6'];
    $pass =    $_POST['acf']['field_5a781ec0865b7']['field_5a781ec0afba5'];
    $name =    $_POST['acf']['field_5a781ec0865b7']['field_5a781ec0afc54'];
    $surname = $_POST['acf']['field_5a781ec0865b7']['field_5a781ec0afd00'];
    $website = "http://finbazar.com.mk";



   $_SESSION['username'] = $email;
   $_SESSION['password'] = $pass;


    $userdata = array(
    'user_login'  =>  $name,
    'user_email'  =>  $email,
    'user_url'    =>  $website,
    'user_pass'   =>  $pass,
    'first_name'  =>  $name,
    'last_name'   =>  $surname,
    'role' => "author" // When creating an user, `user_pass` is expected.
  );
  $user_id = wp_insert_user( $userdata );

 /** Assign post to newly created  user **/
  $arg = array(
      'ID' => $post_id,
      'post_author' => $user_id,
   );
 wp_update_post($arg);




?>