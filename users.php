<?php

class Users{
 
 protected    $collection_users;

 public function __construct($collection_users){
  
        $this->collection_users = $collection_users;

 }

 public function checkInput($var){
   
      $var = htmlspecialchars($var);
      $var = trim($var);
      $var = stripslashes($var);
      
      return $var;
   }
 public function register($username, $password, $fullname, $address){

    //inserting the input form the user in register
    $document = $this->collection_users->insertOne([
        'username'=> $username, 
       'password'=> $password, 
       'fullname'=> $fullname,
       'address'=> $address,
       'admin'=> 'no',
       'created_at'=> new MongoDB\BSON\UTCDateTime(),
       'UNIX_time'=> (new MongoDB\BSON\ObjectId())->getTimestamp()
       ]);
      
      //setting up $_SESSION['user_id'] to last inserted Id in MongoDB
      $_SESSION['user_id'] = $document->getInsertedId();
 } 
    
 public function userData($userId){
    
    //we are retrieving an ojbect with properties of the document searched by ID when the ID was created automatically for us by Mongo Server
    $document = $this->collection_users->findOne(["_id"=> new MongoDB\BSON\ObjectID($userId)]);
   
    return $document;
 }

 public function logout() {
    
    $_SESSION = array();

    session_destroy();

    header('Location: home.php');
 }

 public function login($username, $password) {

    $document = $this->collection_users->findOne(
        ['username' => $username, 'password' => $password],
        ['projection' => ['_id'=>1] ]

        );

    if(!empty($document->_id)) {

            //start up REGULAR USER session 
            $_SESSION['user_id'] = $document->_id;
        }

    else {

        return false;
        }

}



public function checkAdmin($username, $password) {

    $document = $this->collection_users->findOne(
        ['username' => $username, 'password' => $password],
        ['projection' => ['_id'=>1, 'admin'=>1] ]

        );

    if(!empty($document->_id)) {

        if($document->admin == 'yes' ) {
            
            //start up admin session 
            $_SESSION['admin_id'] = $document->_id;
        } 
        
    }

    else {

        return false;
    }

}

    


}


?>