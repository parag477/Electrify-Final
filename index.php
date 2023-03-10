<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>Home | Electrify</title>

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

         <?php
         require 'partials/_dbconnect.php';

         if(isset($_SESSION["loggedin"])){
             $loggedin = true;
         }
         else{
           $loggedin = false;
         }
         
         
         echo '
                 <nav class="navnew">
                     <div class="rightnew">
                         <ul>
                             <a href="index.php"><li class="li1">Home |</li></a>
                             <a href="find_station.php"><li class="li2">Find EV Spot |</li></a>
                             <a href="create_ev_form.php"><li class="li3">Create EV Spot |</li></a>
                             <a href="#"><li class="li4">Find EV Mechanic |</li></a>
                             <a href="about-us.php"><li class="li5">About Us |</li></a>
                             <a href="contact.php"><li class="li6">Contact Us</li></a>
                         </ul>
                     </div>
                 </nav>
             <div class="tag">
             <a href="index.php">
          <img src="images/electrify_logo.png" height="140px" width="140px">
     </a>';
     if ($loggedin){
          echo '<a href="logout.php" style="font-size: 30px;" class="ls">Logout</a>';
      } else {
     echo '<a href="login.php" style = "left:0px; font-size: 30px;" class="ls">Login</a>
          <a href="signup.php" class="ls" style="left:100px; font-size: 30px;">Signup</a>';
      }

    echo '</div>';
         ?>
         
     

     <!-- NAVBAR END -->
     
     
     
     <!-- HOME -->
     
     <section id="home">
          <div class="homes">
               
               <img class = "homebg"src = "images/home.jpg" alt = "bg" >
               
                    </div>
</section>



     <!-- HOME -->
     <!-- <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Lorem ipsum dolor sit amet.</h1>
                                        <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi sapiente delectus eiet.</h3>
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Station</a>
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
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Station</a>
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
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Station</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
 -->


     <main>
          <!-- <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>About us</h2>

                                   <br>

                                   <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore molestias ipsa veritatis nihil iusto maiores natus dolor, a reiciendis corporis obcaecati ex. Totam assumenda impedit aut eum, illum distinctio saepe explicabo. Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam, fugit natus odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid, pariatur enim nisi. Quia ab iusto assumenda.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section> -->





          <section class="hero-section">
          <div class="container">
                    <div class="row">
                              <div class="section-title text-center">
                                   <h2>Benefits from Electrify<small>Make your place an EV station</small></h2>
                              </div>
  <div class="card-grid">
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(images/evv1.jpg)"></div>
      <div class="card__content">
        <!-- <p class="card__category">Category</p> -->
        <h3 class="card__heading">Earn Money By Creating A EV Spot</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://zoomcar-assets.zoomcar.com/images/original/d09afb8f29763525cd9823221791be7188b31460.png?1672044204"></div>
      <div class="card__content">
        <!-- <p class="card__category">Category</p> -->
        <h3 class="card__heading">Enjoy Unlimited Kilometers</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1556680262-9990363a3e6d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <!-- <p class="card__category">Category</p> -->
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </li>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <!-- <p class="card__category">Category</p> -->
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
  <div>
</div>
</div>



</section>



          <!-- <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Offers <small>Lorem ipsum dolor sit amet.</small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="images/offer-1-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>FAMILY CARS</h3>

                                        <p class="lead"><small>from</small> <strong>$120</strong> <small>per weekend</small></p>

                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</span>
                                   </div>
                                   <div class="team-thumb-actions">
                                        <a href="offers.php" class="section-btn btn btn-primary btn-block">View Offer</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="images/offer-2-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>LUXURY & PRESTIGE CARS</h3>

                                        <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>

                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non beatae soluta, placeat vitae cum maxime culpa itaque minima.</span>
                                   </div>
                                   <div class="team-thumb-actions">
                                        <a href="offers.php" class="section-btn btn btn-primary btn-block">View Offer</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="images/offer-3-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>TOP SELLERS</h3>

                                        <p class="lead"><small>from</small> <strong>$110</strong> <small>per weekend</small></p>

                                         <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia aspernatur, harum facere delectus saepe enim?</span> -->
                                   <!-- </div>
                                   <div class="team-thumb-actions">
                                        <a href="offers.php" class="section-btn btn btn-primary btn-block">View Offer</a>
                                   </div>
                              </div>
                         </div>
                    </div>
                </div> -->
<!-- </section>  -->




          <section id="testimonial">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Testimonials <small>from around the world</small></h2>
                              </div>

                              <div class="owl-carousel owl-theme owl-client">
                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Jackson</h4>
                                                  <span>Shopify Developer</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Camila</h4>
                                                  <span>Marketing Manager</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde eos laborum consequatur officiis perferendis vel debitis, dolore, ipsum quibusdam culpa quisquam, reiciendis aspernatur.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Barbie</h4>
                                                  <span>Art Director</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum minima autem, reprehenderit mollitia amet id, beatae quo sequi culpa assumenda neque a quisquam, magni.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="images/tst-image-4-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Andrio</h4>
                                                  <span>Web Developer</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                        </div>
                    </div>
               </div>
          </section> 
     </main>

     <!-- CONTACT -->

     <?php
          $showAlert = false;
          $showError = false;
          if($_SERVER["REQUEST_METHOD"] == "POST"){
               include 'partials/_dbconnect.php';
               $name = $_POST["name"];
               $email = $_POST["email"];
               $message = $_POST["message"];


               $sql = "INSERT INTO `feedback` (`name`, `email`, `msg`, `ctime`) VALUES ('$name', '$email', '$message', current_timestamp())";

               $result = mysqli_query($con, $sql);
               if($result){
                    $showAlert = true;
               }

          }    
     ?>

     
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="index.php" method="post">
                              <div class="section-title">
                                   <h2>Your Feedback <small>we would love your feedbacks. let us know what you think about us!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
                    
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/feedback.jpg" class="img-responsive" alt="Smiling Two Girls">
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