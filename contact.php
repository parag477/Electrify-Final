<?php
session_start();


$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    

    $sql = "INSERT INTO `contact` (`name`, `email`, `msg`, `ctime`) VALUES ('$name', '$email', '$message', current_timestamp())";

    $result = mysqli_query($con, $sql);
    if($result){
      $showAlert = true;
    }

  }    
?>



<!DOCTYPE html>
<html lang="en">
<head>

     <title>PHPJabber | Car Rental Website Template</title>

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

          <?php //require 'partials/_navbar.php'; ?>
          <?php require 'partials/navbar.php'; ?>
     
     <!-- NAVBAR END -->




     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Contact Us</h1>

                    <!-- <br>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p> -->
               </div>
          </div>
     </section>


     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
                    
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" id="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                    <?php
                         if($showAlert){
                              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Thank you</strong> for taking your time to help us improve our blog
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                              }
                    ?>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="">
                         </div>
                    </div>

               </div>
          </div>
     </section>       


     
     <!-- FOOTER -->
     <?php require 'partials/_footer.php'; ?>
     <!-- FOOTER END -->

     


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>