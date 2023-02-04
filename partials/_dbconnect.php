<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "electrify";
// $servername = "localhost";
// $username = "u760993576_InnoTechzz";
// $password = "InnoTechzz74";
// $database = "u760993576_blog";

$con = mysqli_connect($servername, $username, $password, $database);

if($con){
    // echo "success";
    
}
else{
    die("Error". mysqli_connect_error());
}

?>