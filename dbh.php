<?php //Establishing connection
  $conn = mysqli_connect("localhost","root","","webseries");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
