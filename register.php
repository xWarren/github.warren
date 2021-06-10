<?php
if(isset($_POST['register'])) {
      
      $username    = $userClass->checkInput($_POST['username']);
      $password = $userClass->checkInput($_POST['password']);
      $fullname = $userClass->checkInput($_POST['fullname']);
      $address = $userClass->checkInput($_POST['address']);
   }
  
   if(empty($username) or empty($password)  or empty($fullname)  or empty($address)) {

    $error = true;
   } else {

     $userClass->register($username, $password, $fullname, $address);
     unset($error);


   }

   if(isset($error) && isset($_POST['register'])) {

    echo "<script>
       
         $(document).ready(function(){
            $('#errorModal').modal('show'); 
         });

    </script>";
        }
        ?>