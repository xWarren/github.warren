<?php
   include 'init.php';
  if(isset($_POST['insert_store'])) {

    if(!empty($_POST['food']) && !empty($_POST['companyname'])  && !empty($_POST['price']) 
    && !empty($_POST['description']) && !empty($_FILES['cover_img'])) {

        $foodClass->newFoods(
        $_POST['food'],
        $_POST['companyname'],
        $_POST['price'],
        $_POST['description'],
        $_FILES['cover_img']['tmp_name']
       );   
    }
    header('Location: index.php');
  }
?>