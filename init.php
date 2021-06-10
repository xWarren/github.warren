<?php
    session_start();
    require  'C:\xampp\htdocs\vendor\autoload.php';
    include 'Users.php';
    include 'Food.php';
    include 'Orders.php';
    //connection to the server
    $connection = new MongoDB\Client;
    //connection to the database
    $db = $connection->foodstore;
    //connection to the collection users;
    $collection_users = $db->users;
    $collection_foods = $db->foods;
    $collection_orders = $db->orders;
    
    $userClass = new Users($collection_users);
    $foodClass = new Foods($collection_foods);
    $orderClass = new Orders($collection_orders);
  
    //var_dump($storeClass);
?>