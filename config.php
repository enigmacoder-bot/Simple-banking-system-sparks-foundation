<?php 

$server="localhost";
$username="id19092432_root";
$password="7-&aq/j=pJQS|lHk";
$db="id19092432_sparks_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
  echo"connection successful";
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>