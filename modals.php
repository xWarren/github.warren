<style>
.remove{
    border-style: solid;
    border-color: red;
    cursor: pointer;
    color:black;
}
</style>
<div id="trackModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!-- Modal content login-->
<div class="modal-content">
 <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Track My Order</h4>
    </div>
    <div class="form-group">
          <label for="id">Tracking Number:<input type="password" class="form-control" id="pwd"">
          <?php echo $OrderData->_id; ?></label><br>
         </div>
    <div class="modal-body">
                  <div class="form-group">
                 <label for="OrderData"><?php echo $OrderData->customerID; ?></label><br>
                </div>
    <div class="form-group">
<label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password">
     </div>
    <div class="checkbox">
         <label>
    <input type="checkbox" name="admin" value = "yes"> Login as admin 
            </label>
        </div>
        </div>
    <div class="modal-footer">
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" name ="login" value="Submit">Submit</button>
    </form> 
        </div>
                     </div>
              </div>
        </div>
<!-- LOGIN Modal -->
 <div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!-- Modal content login-->
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Login</h4>
        </div>
         <div class="modal-body">
          <form action="" method="post">
           <div class="form-group">
            <label for="username">Username:</label>
             <input type="text" class="form-control" id="username" name="username">
              </div>
               <div class="form-group">
                <label for="pwd">Password:</label>
                 <input type="password" class="form-control" id="pwd" name="password">
                  </div>
                   <div class="checkbox">
                    <label>
                     <input type="checkbox" name="admin" value = "yes"> Login as admin 
                      </label>
                       </div>
                        </div>
                         <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-default" name ="login" value="Submit">Submit</button>
                            </form> 
                             </div>
                              </div>
                               </div>
                                </div>
                                 <?php
                                  include 'login.php';
                                   ?>
                                    <!-- REGISGTER Modal -->
                                     <div id="registerModal" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                       <!-- Modal content login-->
                                        <div class="modal-content">
                                         <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                           <h4 class="modal-title">Create Your Account</h4>
                                            </div>
                                             <div class="modal-body">
                                              <form action="" method="post">
                                               <div class="form-group">
                                                <label for="pwd">Enter Username:</label>
                                                 <input type="text" class="form-control" id="pwd" name = "username">
                                                  </div>
                                                   <div class="form-group">
                                                    <label for="pwd">Enter Password:</label>
                                                     <input type="password" class="form-control" id="pwd" name="password">
                                                      </div>
                                                       <div class="form-group">
                                                        <label for="pwd">Enter Full Name:</label>
                                                         <input type="text" class="form-control" id="pwd" name = "fullname">
                                                          </div>
                                                           <div class="form-group">
                                                            <label for="pwd">Enter Address:</label>
                                                             <input type="text" class="form-control" id="pwd" name = "address">
                                                              </div>
                                                               </div>
                                                                <div class="modal-footer">
                                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-default" name ="register" value="Submit">Submit</button>
                                                                   </form>
                                                                    </div>
                                                                     </div>
                                                                      </div>
                                                                       </div>
                                                                        <!--PHP REGISTER MODAL -->
                                                                         <?php
                                                                          include 'register.php';
                                                                           ?>
                                                                            <!--END OF PHP REGISTER MODAL -->
                                                                             <!--error modal-->
                                                                              <div id="errorModal" class="modal fade" role="dialog">
                                                                               <div class="modal-dialog">
                                                                                <!-- Modal content login-->
                                                                               <div class="modal-content">
                                                                              <div class="modal-header">
                                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <h4 class="modal-title">Create Your Account</h4>
                                                                           </div>
                                                                          <div class="modal-body">
                                                                         <p> All fields are required !!! <p>
                                                                        </div>
                                                                       <div class="modal-footer">
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                                                     </div>
                                                                    </div>
                                                                   </div>
                                                                  </div>
                                                                 <!--error modal for login-->
                                                                <div id="loginError" class="modal fade" role="dialog">
                                                               <div class="modal-dialog">
                                                              <!-- Modal content login-->
                                                             <div class="modal-content">
                                                            <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          <h4 class="modal-title">Login Error</h4>
                                                         </div>
                                                        <div class="modal-body">
                                                       <p> All fields are required !!! <p>
                                                      </div>
                                                     <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                                   </div>
                                                  </div>
                                                 </div>
                                                </div>
                                               <!-- ADMIN Modal -->
                                              <div id="adminModal" class="modal fade" role="dialog">
                                             <div class="modal-dialog">
                                            <!-- Modal content ADMIN-->
                                           <div class="modal-content">
                                          <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Admin Panel</h4>
                                       </div>
                                      <div class="modal-body">
                                     <form action="admin.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                   <label for="title">INSERT NEW FOOD TITLE:</label>
                                  <input type="text" class="form-control" name="food">
                                 </div>
                                <div class="form-group">
                               <label for="amount">COMPANY NAME: </label>
                              <input type="text" class="form-control" name = "companyname">
                             </div>
                            <div class="form-group">
                           <label for="amount">FOOD PRICE: </label>
                          <input type="text" class="form-control" name = "price">
                         </div>
                        <div class="form-group">
                       <label for="amount">FOOD DESCRIPTION: </label>
                      <input type="text" class="form-control" name = "description">
                     </div>
                    <div class="form-group">
                   <label for="amount">FOOD IMG: </label>
                  <input type="file" class="form-control" name = "cover_img">
                 </div>
                </div>
               <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
             <button type="submit" class="btn btn-default" name = "insert_store" value="Submit">INSERT</button>
            </form>
           </div>
          </div>
         </div>
        </div>
       <!-- ORDERS Modal -->
      <div id="ordersModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
    <!-- Modal content ADMIN-->
   <div class="modal-content">
  <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Food Cart</h4>
 </div>
  <div class="modal-body">
   <form action="index.php" method="post" enctype="multipart/form-data">
    <div class="form-group"  style="overflow: scroll; height: 300px;">
      <table id="table" class="table table-hover table-fixed" >
       <tr>
        <th>Product</th>
         <th>Quantity</th>
          <th>Unit Price</th>
           <th>Actions</th>
            </tr>
             <?php        
              if(isset($_SESSION['order'])) {
               $totalTablePrice = array();
                foreach($_SESSION['order'] as $val) {
                 array_push($totalTablePrice, $orderClass->getTotals($val[2], $val[3]));
                  echo '<tr>
                   <td>' . $val[1] . ' </td>
                    <td>'  . $val[3]   .  '</td>
                     <td> ₱ ' . $val[2]  . '.00</td>
                      <td 
                       type="button" 
                        id="'. $val[0].'"
                         price="'.$val[2].'"
                          class="remove">Delete
                           </td>
                            </tr>';
                             }
                              }
                               ?>
                                <tr>
                                 <td><strong>Total:</strong></td>
                                  <td></td>
                                   <td>₱<strong id="total"> 
                                    <?php 
                                     echo isset($_SESSION['order'])? array_sum($totalTablePrice): ''; 
                                      $_SESSION['totalPrice'] = isset($_SESSION['total'])? array_sum($totalTablePrice) : '';
                                       ?>
                                        </strong>.00</td>
                                         <td></td>
                                          </tr>
                                           <tr>
                                            <td id="mode">Mode of Payment: 
                                             <br>
                                              <input type="radio" id="Gcash" name="mop" value="gcash">
                                               <label for="Gcash">Gcash</label>
                                                <input type="radio" id="Cashondelivery" name="mop" value="cod">
                                                 <label for="Cash on Delivery">Cash on Delivery</label>
                                                  </td>
                                                   </tr>
                                                    </table>
                                                     </div>
                                                      </div>
                                                       <div class="modal-footer">
                                                        <button type="submit" class="btn btn-default" name="empty_cart" value="Submit" >Cancel Order</button>
                                                         <button type="submit" class="btn btn-default" name = "newOrder" value="Submit">Check Out</button>
                                                          </form>
                                                           </div>
                                                            </div>
                                                             </div>
                                                              </div>
                                                               <script>
                                                                $(document).ready(function(){
                                                                 $("#ordersModal").on('hide.bs.modal', function () {
                                                                  location.replace("http://localhost/Mongo/index.php");
                                                                   });
                                                                    $(".remove").click(function(){
                                                                     var item_price = $(this).attr("price");
                                                                      var foodId = $(this).attr("id");
                                                                       var total = $("#total").text();
                                                                        //update total displayed 
                                                                         var total_sum = total - item_price;
                                                                          //remove the entire row (tr)
                                                                           $(this).closest("tr").remove();
                                                                            //place the new total at the total tr tag
                                                                             $("#total").text(total_sum);
                                                                            $.post('http://localhost/Mongo/index.php', {remove_id: foodId, total: total_sum}, function(data){
                                                                           });
                                                                          });
                                                                         });
                                                                        </script>
                                                                       <?php 
                                                                      if(isset($_POST['remove_id'])) {
                                                                     //remove from SESSION['order'] the array that holds the book that was just removed by the user
                                                                    $orderClass->removeFood($_SESSION['order'], $_POST['remove_id']);
                                                                   }
                                                                  ?>
                                                                 <!--Confirmation Modal-->
                                                                <?php
                                                                 
                                                               if(isset($_SESSION['user_id'])) {
                                                              $FinalUserData = $userClass->userData($_SESSION['user_id']);                                 
                                                             }
                                                             date_default_timezone_set('Asia/Manila');
                                                            ?>
                                                           <script type="text/javascript">
                                                          var Timer;
                                                         var TotalSeconds;
                                                        function CreateTimer(TimerID, Time) {
                                                       Timer = document.getElementById(TimerID);
                                                      TotalSeconds = Time;
                                                     UpdateTimer()
                                                    window.setTimeout("Tick()", 1000);
                                                   }
                                                  function Tick() {
                                                 if (TotalSeconds <= 0) {
                                                alert("Time's up!")
                                               return;
                                              }
                                             TotalSeconds -= 1;
                                            UpdateTimer()
                                           window.setTimeout("Tick()", 1000);
                                          }
                                         function UpdateTimer() {
                                        var Seconds = TotalSeconds;
                                       var Days = Math.floor(Seconds / 86400);
                                      Seconds -= Days * 86400;
                                     var Hours = Math.floor(Seconds / 3600);
                                    Seconds -= Hours * (3600);
                                   var Minutes = Math.floor(Seconds / 60);
                                  Seconds -= Minutes * (60);
                                 var TimeStr = ((Days > 0) ? Days + " days " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds)
                                Timer.innerHTML = TimeStr;
                               }
                              function LeadingZero(Time) {
                             return (Time < 10) ? "0" + Time : + Time;
                            }
                           </script>
                          <div id="confirmationModal" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                        <div class="modal-content">
                       <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Your order has been approved!</h4>
                    </div>
                   <div class="modal-body">
                  <div class="form-group">
                 <label for="FinalUserData">Thank you for buying from us!</label><br>
                </div>
          <div class="form-group">
          <label for="id">Tracking Number: <?php echo $FinalUserData->_id; ?></label><br>
         </div>
      </div>    
  </div>
 </div>
  </div>
   <script>
    $("#confirmationModal").on('hide.bs.modal', function () {
     location.replace("http://localhost/Mongo/admin/unset.php");
      });
       </script>
        <!--error modal for login-->
         <div id="loginWarning" class="modal fade" role="dialog">
          <div class="modal-dialog">
           <!-- Modal content login-->
            <div class="modal-content">
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">User not logged in</h4>
                </div>
                 <div class="modal-body">
                  <p>You need to be logged in to buy! <p>
                   </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                      </div>
                       </div>
                        </div>
                         </div>
