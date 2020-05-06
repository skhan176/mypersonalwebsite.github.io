<?php
$server= "sql109.epizy.com";
$username= "epiz_25713089";
$password= "AI8UYMC0RmX";
$dbname= "epiz_25713089_mydb";
$conn=mysqli_connect($server, $username,$password,$dbname);
if(!conn){
  die("Connection Failed:".mysqli_connect_error());
}



 ?>
