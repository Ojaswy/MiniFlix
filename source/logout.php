<?php //Logsout the user/admin and redirects them to the homepage
  session_start();
  session_destroy();
  header("Location: login.php");

?>
 