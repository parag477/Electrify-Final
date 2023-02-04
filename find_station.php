<?php session_start(); ?>

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
     <link rel="stylesheet" href="css/nav.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <!-- <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section> -->



     <!-- NAVBAR START -->

     <?php //require 'partials/_navbar.php' ?>
     <?php require 'partials/navbar.php'; ?>
     
     <!-- NAVBAR END -->


     <!-- <section>
          <div class="container">
               <div class="text-center">
                    <h1>Find EV Station Near You</h1>

                    <br>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
               </div>
          </div>
     </section> -->

     
<section>

<div class="text-center">
     <h1>Emergency Ev Spot Near You</h1>
</div>
              
<div id="container">

<div class="product-details">
<iframe width="100%" height="100%" src="maps.php"></iframe>
</div>
<div class ="product-image">
<img src = "images/ev.jpg" alt ="">
</div>
</div>
</section>





     <!-- <section id="home">
     <iframe width="100%" height="650" src="maps.php"></iframe>
     </section> -->



     <section style="background-color: #d7f4d1;">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>Rate Us</h2>

                                   <br>

                               
<div class="product-review-stars">
  <input type="radio" id="star5" name="rating" value="5" class="visuallyhidden" /><label for="star5" title="Rocks!">★</label>
  <input type="radio" id="star4" name="rating" value="4" class="visuallyhidden" /><label for="star4" title="Pretty good">★</label>
  <input type="radio" id="star3" name="rating" value="3" class="visuallyhidden" /><label for="star3" title="Meh">★</label>
  <input type="radio" id="star2" name="rating" value="2" class="visuallyhidden" /><label for="star2" title="Kinda bad">★</label>
  <input type="radio" id="star1" name="rating" value="1" class="visuallyhidden" /><label for="star1" title="Sucks big time">★</label>
</div> 
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          





    <!-- FOOTER START -->
    <?php require 'partials/_footer.php' ?>
    <!-- FOOTER END -->


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>