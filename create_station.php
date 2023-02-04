<?php
session_start();

     include 'partials/_dbconnect.php';
     $showError = false;

          if(isset($_POST['upload'])){
               $name = $_POST['name'];
               $username = $_SESSION['username'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $address = $_POST['address'];
               $acc_no = $_POST['acc_no'];
               $cacc_no = $_POST['cacc_no'];
               $ifsc = $_POST['ifsc'];
               $holder_name = $_POST['holder_name'];

               if (($acc_no == $cacc_no)){
                    $query = "INSERT INTO `host_details`(`name`, `username`, `email`, `phone`, `address`, `acc_no`, `ifsc`, `holder_name`, `cur_time`) VALUES ('$name', '$email', '$phone', '$address', '$acc_no', '$ifsc', '$holder_name', current_timestamp())";
     
                    if(mysqli_query($con, $query)){
                         // echo "Successful";
                    }
                    else{
                         echo "<script>alert('Error');</script>";
                    }
               
               } else {
                    $showError = "Account Number do not match";
                }

          }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>Create EV Spot | Electrify</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/nav.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>



     <!-- NAVBAR START -->

     <?php //require 'partials/_create_ev_navbar.php'; ?>
     <?php require 'partials/navbar.php'; ?>
     
     <!-- NAVBAR END -->

     <?php
     if ($showError){
          echo "<script>alert('Account Numbers Did Not Matched!!');</script>";
     } 
          ?>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Create EV Spot</h1>

                    <!-- <br>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p> -->
               </div>
          </div>
     </section>


          <!-- HOME -->
          <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Lorem ipsum dolor sit amet.</h1>
                                        <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi sapiente delectus eiet.</h3>
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Spot</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Distinctio explicabo vero animi culpa facere voluptatem.</h1>
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Spot</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Efficient Learning Methods</h1>
                                        <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero.</h3>
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Spot</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>




     <!-- My Revenue -->

<section>

     <div class="text-center">
          <h1>My Revenue</h1>
     </div>
                   
<div id="container">

	<div class="product-details">
     <br>
     <h2> Total Earning <span>&emsp;&emsp;&emsp;&emsp;

     ₹ 4500</span></h2>
     <br>
     <h2> Total Booking <span>&emsp; &emsp;&emsp;&nbsp;
          300</span><h2>
    
     <h2>Rate <span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     ₹ 15/UNIT
     </span></h2>

     <hr>

     <h1 style = "margin-left:120px">Calculate Your Earning</h1>


     <form action="create_station.php" method="post">

     <h2>UNIT <span>&emsp;<input type ="text" placeholder="Enter Unit" id="unit" name="unit"></span></h2>

     <script>
          // var rev = document.getElementsById("unit");
          // var revenue = rev * 15;
     </script>
          
          <?php
          $revenue = null;
          if($_SERVER["REQUEST_METHOD"] == "POST"){
               $rev = $_POST["unit"];
               $revenue = $rev * 15;
          }
     ?>

<button class="button-64" role="button"><span class="text">Calculate</span></button>

<h2> Output<span>&nbsp;
     <label>₹ <?php echo $revenue; ?></label>
</span></h2>

</form>

			
</div>
<div class ="product-image">
     <img src = "images/ev.jpg" alt ="">
     </div>
</div>
</section>


<!-- My Revenue End -->


     

  

     <section>
     <div>
          <img src="images/requirments.jpg" style ="height:100%; width:100%;">
   </div>
    </section>



     <!-- FOOTER -->
     <?php require 'partials/_footer.php'; ?>
     <!-- FOOTER END -->



     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Create Your Home A Charging Station</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="create_station.php" id="contact-form" method="post">


                              <label class="col-form-label">About Yourself:</label>

                              <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
                              
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                                   </div>
                                   
                                   <div class="col-md-6">
                                        <input type="tel" class="form-control" name="phone" placeholder="Enter phone" required>
                                   </div>
                              </div>

                              <input type="text" class="form-control" name="address" placeholder="Your Address" required>
                              

                              <label class="col-form-label">Bank Account Details:</label>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="number" class="form-control" name="acc_no" placeholder="Account Number" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="password" class="form-control" name="cacc_no" placeholder="Confirm Account Number" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="ifsc" placeholder="IFSC Code" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="holder_name" placeholder="Account Holder Name" required>
                                   </div>
                              </div>

                         <!-- </form> -->
                    </div>
                    
                    <div class="modal-footer">
                         <button type="submit" name="upload" class="section-btn btn btn-primary">Submit</button>
                    </div>
               </form>
               </div>
          </div>
     </div>

    

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>