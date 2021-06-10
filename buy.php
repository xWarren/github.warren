<?php
 include 'init.php';
  if(isset($_POST['food'])) {  //user clicked one of the buy Buttons
   if(isset($_SESSION['user_id'])) {
    $foodData = $foodClass->findFoodById($_POST['food']);
     if(!isset($_SESSION['order'])) { //check if at least 1 ajax call was done
      $_SESSION['order']= array(); //set up SESSION[order]
       array_push($_SESSION['order'], $foodData);
      } else {
     array_push($_SESSION['order'], $foodData);
    }
   echo count($_SESSION['order']);    
  } else {
 echo "unregistered";
}
 }
  ?>