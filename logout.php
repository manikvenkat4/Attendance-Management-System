<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   header('Refresh: 0; URL = "navbar1.php"');
?>