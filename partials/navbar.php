<?php require '_dbconnect.php';

if(isset($_SESSION["loggedin"])){
    $loggedin = true;
}
else{
  $loggedin = false;
}


echo '<link rel="stylesheet" href="../css/nav.css">
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="8 69 1417 100"><path fill="#57bb49" fill-opacity="1" d="M0,128L60,138.7C120,149,240,171,360,165.3C480,160,600,128,720,128C840,128,960,160,1080,154.7C1200,149,1320,107,1380,85.3L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
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