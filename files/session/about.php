<?php 
   session_start();

   // print_r($_SESSION);

   echo "<h1>Your Name is :".$_SESSION["name"]."</h1>";
   echo "<h1>Your Father Name is :".$_SESSION["fname"]."</h1>";
   echo "<h1>Your Email is :".$_SESSION["email"]."</h1>";
?>