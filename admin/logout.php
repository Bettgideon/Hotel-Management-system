<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location: admin.php"); //to redirect back to "user.php" after logging out
exit();
?>