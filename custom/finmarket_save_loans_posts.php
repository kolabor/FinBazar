<?php
	$email =   $_POST['acf']['field_5a3e9915d2465']['field_5a3e9957d2466'];
    $pass =    $_POST['acf']['field_5a3e9915d2465']['field_5a3ea307bfcd1'];
    $name =    $_POST['acf']['field_5a3e9915d2465']['field_5a3e9a1604b3d'];
    $surname = $_POST['acf']['field_5a3e9915d2465']['field_5a3e9a4ee23e2'];
    $website = "http://finbazar.com.mk";



   $_SESSION['username'] = $email;
   $_SESSION['password'] = $pass;
   $_SESSION['posttype'] = $get_post_type;



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
  $_SESSION['user_is'] = $user_id;
 /** Assign post to newly created  user **/
  $arg = array(
      'ID' => $post_id,
      'post_author' => $user_id,
   );
 wp_update_post($arg);




?>