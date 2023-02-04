<!-- MENU -->
<!-- <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button> -->

                    <!-- LOGO TEXT HERE -->
                    <!-- <a href="#" class="navbar-brand">Electrify</a>
               </div> -->

               <!-- MENU LINKS -->
               <!-- <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php">Home</a></li>
                         <li class="active"><a href="create_station.php">Create EV Station</a></li>
                         <li><a href="offers.php">Offers</a></li>
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
                                   <li><a href="blog-posts.php">Blog</a></li>
                                   <li><a href="about-us.php">About Us</a></li>
                                   <li><a href="team.php">Team</a></li>
                                   <li><a href="testimonials.php">Testimonials</a></li>
                                   <li><a href="terms.php">Terms</a></li>
                              </ul>
                         </li>
                         <li><a href="contact.php">Contact Us</a></li>
                         <li><a href="login.php">Login</a></li>
                         <li><a href="signup.php">Sign Up</a></li>
                    </ul>
               </div>

          </div>
     </section> -->





     <?php require '_dbconnect.php' ?>
<?php

if(isset($_SESSION["loggedin"])){
    $loggedin = true;
}
else{
  $loggedin = false;
}

echo '<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
<div class="container">

     <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon icon-bar"></span>
               <span class="icon icon-bar"></span>
               <span class="icon icon-bar"></span>
          </button>

          <!-- LOGO TEXT HERE -->
          <a href="#" class="navbar-brand">Electrify</a>
     </div>

     <!-- MENU LINKS -->
     <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-nav-first">
               <li><a href="index.php">Home</a></li>
               <li class="active"><a href="create_station.php">Create EV Station</a></li>
               <li><a href="find_station.php">Find EV Station</a></li>
               <li><a href="offers.php">Offers</a></li>
               <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                    
                    <ul class="dropdown-menu">
                         <li><a href="blog-posts.php">Blog</a></li>
                         <li><a href="about-us.php">About Us</a></li>
                         <li><a href="team.php">Team</a></li>
                         <li><a href="testimonials.php">Testimonials</a></li>
                         <li><a href="terms.php">Terms</a></li>
                    </ul>
               </li>
               <li><a href="contact.php">Contact Us</a></li>
               <li><a href="#" data-toggle="modal" data-target=".bs-example-modal">Create EV Station</a></li>

               <li><a href="login.php">Login</a></li>
               <li><a href="signup.php">Sign Up</a></li>';

               if ($loggedin){
                   echo '<li><a href="logout.php">Logout</a></li>';
               }
               echo '
          </ul>
     </div>

</div>
</section>';

?>