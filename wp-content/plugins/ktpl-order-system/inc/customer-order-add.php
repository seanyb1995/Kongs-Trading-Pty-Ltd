<?php

/*
 * First require the wp-load.php
 * we need these in order to use wordpress
 * functions like update_post_meta
*/

session_start();
  
  // 0. Setting Order variable and resetting single item array
  
  if  ( ! isset($_SESSION['order'])) {
  $_SESSION['order'] = array(
    );
  }

require_once('../../../../wp-load.php');

  // 1. Check if any POST data has been submitted
  if (isset($_POST['submit'])) {
  $referer = $_POST['referer'];
  $item = $_POST['item'];
  $price = $_POST['price'];
  $price = (int)$price;
  
  // 2. Create array and index them
  $order_item = array(
    'name' => $item,
    'price' => $price
  );
  
  // 3. Push $order_item into session variable 'order'
  array_push($_SESSION['order'], $order_item);
  print_r($_SESSION['order']);
  //session_destroy();
  //session_unset();

/* redirect back to page with dbsa-sucess query set to 1*/
  $msg= 'The item has been added to your order.';
  header("Location: $referer?appointment-added=1&msg=$msg");
  exit();

}

?>

