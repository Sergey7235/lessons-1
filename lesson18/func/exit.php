<?php 
session_start();
session_destroy();
header("Location: ../templates/temp_login.php");



 ?>