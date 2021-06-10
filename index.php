<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
	  <title>MCC</title>
     <meta name= "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = yes">
    <link rel="stylesheet" type="text/css" href="/Mongo/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <noscript>For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a></noscript>
           </head>
           <style>
           a{
    color:#4040bf;
}
           .run{
            font-family: 'Indie Flower', cursive;
           }
.theme-switch-wrapper {
  display: flex;
  align-items: center;

  em {
    margin-left: 10px;
    font-size: 1rem;
  }
}
.theme-switch {
  display: inline-block;
  height: 34px;
  position: relative;
  width: 60px;
}

.theme-switch input {
  display:none;
}

.slider {
  background-color: #ccc;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: .4s;
}

.slider:before {
  background-color: #fff;
  bottom: 4px;
  content: "";
  height: 26px;
  left: 4px;
  position: absolute;
  transition: .4s;
  width: 26px;
}

input:checked + .slider {
  background-color: #66bb6a;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
body {
  background-color: white;
  color: black;

}

.dark-mode {
  background-color: black;
  color: white;
}
</style>
    <?php
         include 'init.php';
         include 'admin/try.php';
         include 'modals.php';
    if(isset($_SESSION['user_id'])) {
$userData = $userClass->userData($_SESSION['user_id']);
 }
    ?>
   <body>
    <!--navigation-->
  <nav class="navbar">
  <div class="run">
 <div class="container-fluid">
<div class="navbar-header">
   <a class="navbar-brand" href="#">
   <img src="logos.jpg" alt="Logo" style="width:100px; height: 30px;"></a>
 </div>
<ul class="nav navbar-nav">
    <li class="active"><a href="home.php">Home</a></li>
            <li><a <?php 
echo isset($_SESSION['admin_id']) ? ' data-toggle="modal" data-target="#adminModal" ' : "";      
?> href="#">Admin Panel</a></li>
    <li><a <?php 
 echo isset($_SESSION['user_id']) ? '' : ' data-toggle="modal" data-target="#registerModal"';      
?>  href="#">Register</a></li>
  <li><a <?php 
echo isset($_SESSION['user_id']) ? '' : ' data-toggle="modal" data-target="#loginModal"';      
    ?> href="#"> Login </a></li>
<li><a href="http://localhost/Mongo/index.php?show=modal" ><span id="cart" class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge" id="shopcart">
<?php echo isset($_SESSION['order'])? count($_SESSION['order']) : ''; 
    echo isset($_GET['show']) && isset($_SESSION['order']) ? '<script>$("#ordersModal").modal("show");</script>' : '';
        ?>
         </span>
            </span></a></li>
     <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php
    echo isset($userData) ? $userData->fullname : '';
    ?></a></li>
 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
 <li><a href="home.php">Track My Order<a></li>
</ul>
<div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round" onclick="myFunction()"></div>
  </label>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
    </div>
    </div>
        </nav>
<!--end of navigation bar-->
   <!--left side bar categories-->
   <ul class="nav nav-pills nav-stacked">
<nav class="navbar navbar-default">
  <div class="container-fluid">
  <ul class="nav navbar-nav">
  <h4 style="text-align: right;">Popular restaurants</h4>
  <li style="text-align:; width:250px; margin: 0 auto;"><a>
  <?php
$query = $collection_foods->find([],['projection'=>['companyName'=>1, '_id'=>0]]);
    //one each company name
$distinct = $collection_foods->distinct('companyName', $query);
  foreach($distinct as $val){
echo "<li><a href =http://localhost/mongo/index.php?categ=$val>" . $val . "</a></li>";
 }
?>
</a>
</li>
   </ul>
  </div>
</nav>
  </ul><br>
</div>
   <!--end left side bar categories-->
 <!-- rows for display-->
 <?php
       $categ = (isset($_GET['categ'])) ? $_GET['categ'] : '';
echo "<div class='row' style='margin-top: 250px;'>";
  $foodClass->display($categ);
 echo "</div>";
?>
<br>
<br>
 <script>
  //popover function
$(document).ready(function(){
 $('[data-toggle="popover"]').popover(); 
$(".titles").hover(
   //mouseleave
 function(){
 var shortTitle = $(this).text();
  if(shortTitle.length >= 16) {
shortTitle = shortTitle.substring(0,16) + "...";
    }
$(this).text(shortTitle);
  });
    });
 </script>
 <!--end left side bar categories-->
</body>
 </html>
<script src="ajax_cart.js"></script>







