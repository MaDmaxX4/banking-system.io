<?php 

$server="localhost";
$username="id18282809_amygawde";
$password="Ameygawde@44";
$db="id18282809_mybanking";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
