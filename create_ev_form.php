<?php
session_start();
     include 'partials/_dbconnect.php';


     $sql = "Select * FROM host_details";
     $cur_user = $_SESSION['username'];
     $result = mysqli_query($con, $sql);
     while($row = mysqli_fetch_array($result)){
          $username_get = $row['username'];
          if ($username_get == $cur_user){
          header("Location: http://localhost/EV%20Station/create_station.php");
          }
     }



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
                    $query = "INSERT INTO `host_details`(`name`, `username`, `email`, `phone`, `address`, `acc_no`, `ifsc`, `holder_name`, `cur_time`) VALUES ('$name', '$username', '$email', '$phone', '$address', '$acc_no', '$ifsc', '$holder_name', current_timestamp())";
     
                    if(mysqli_query($con, $query)){
                         header("Location: http://localhost/EV%20Station/create_station.php");
                    }
                    else{
                         echo "<script>alert('Error');</script>";
                    }
               
               } else {
                    $showError = "Account Number do not match";
                }

          }
    ?>
    
    

<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <link rel="stylesheet" href="css/style.css">

     <style>
          .pinkinput {
               background-color: #efd3d3;
          }

          .greeninput {
               background-color: #9cd894;
          }
     </style>


     <title>Create EV Form</title>
     
</head>

<body style="background-color : #d7f1d4;">

     <div>
          <h1 style="text-align:center; background-color:#9ce89c; padding-top:10px; padding-bottom:17px;">Create Your
               Spot</h1>
               <div class="ev_form_link">
                  <a href="index.php">
                       <img src="images/electrify_logo.png" height="140px" width="140px">
                  </a>
               </div> 
     </div>

     <div>

     <?php
     if ($showError){
          echo "<script>alert('Account Numbers Did Not Matched!!');</script>";
     } 
          ?>

          <form action="create_ev_form.php" id="contact-form" method="post" style="margin-left:250px;
                         margin-right:250px;">

<label class="dropdown">

<div class="dd-button">
  Choose category
</div>

<input type="checkbox" class="dd-input" id="test">

<ul class="dd-menu">
  <li>Emergency Ev Spot</li>
  <li>Emergency Mechanic Spot</li>

</ul>

</label>
<br>


               <label class="col-form-label" style="text-align:center;">
                    <h2>About Yourself:</h2>
               </label>

               <div class="row">
                    <div class="col-md-6">
                         <input type="text" class="form-control pinkinput" name="name" placeholder="Enter full name"
                              required style="margin-bottom:50px; border-radius:50px;">
                    </div>

                    <div class="col-md-6">
                         <input type="email" class="form-control greeninput" name="email"
                              placeholder="Enter email address" required
                              style="margin-bottom:50px; border-radius:50px;">
                    </div>
               </div>

               <div class="row">
                    <div class="col-md-6">
                         <input type="tel" class="form-control pinkinput" name="phone" placeholder="Enter phone"
                              required style="margin-bottom:50px; border-radius:50px;">
                    </div>
                    <div class="col-md-6">
                         <input type="text" class="form-control greeninput" name="address" placeholder="Your Address"
                              required style="margin-bottom:50x; border-radius:50px;">
                    </div>

               </div>



               <label class="col-form-label" style="text-align:center;">
                    <h2>Bank Account Details:</h2>
               </label>

               <div class="row">
                    <div class="col-md-6">
                         <input type="number" class="form-control greeninput" name="acc_no" placeholder="Account Number"
                              required style="margin-bottom:50px; border-radius:50px;">
                    </div>

                    <div class="col-md-6">
                         <input type="password" class="form-control pinkinput" name="cacc_no"
                              placeholder="Confirm Account Number" required
                              style="margin-bottom:50px; border-radius:50px;">
                    </div>
               </div>

               <div class="row">
                    <div class="col-md-6">
                         <input type="text" class="form-control greeninput" name="ifsc" placeholder="IFSC Code" required
                              style="margin-bottom:50px; border-radius:50px;">
                    </div>

                    <div class="col-md-6">
                         <input type="text" class="form-control pinkinput" name="holder_name"
                              placeholder="Account Holder Name" required
                              style="margin-bottom:50px; border-radius:50px;">
                    </div>
               </div>
               
               <!-- </form> -->
     </div>

     <!-- HTML !-->
     <button type="submit" name="upload" class="button-88">SUBMIT</button>
     <style>
          /* CSS */
          .button-88 {
               display: flex;
               align-items: center;
               font-family: inherit;
               font-weight: 500;
               font-size: 16px;
               padding: 0.7em 1.4em 0.7em 1.1em;
               color: white;
               background: #ad5389;
               background: linear-gradient(0deg, rgba(20, 167, 62, 1) 0%, rgba(102, 247, 113, 1) 100%);
               border: none;
               box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
               letter-spacing: 0.05em;
               border-radius: 20em;
               cursor: pointer;
               user-select: none;
               -webkit-user-select: none;
               touch-action: manipulation;
               margin-left: 684px;
          }

          .button-88:hover {
               box-shadow: 0 0.5em 1.5em -0.5em #14a73e98;
          }

          .button-88:active {
               box-shadow: 0 0.3em 1em -0.5em #14a73e98;
          }
     </style>


     </form>
     </div>



     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     </div>

</body>