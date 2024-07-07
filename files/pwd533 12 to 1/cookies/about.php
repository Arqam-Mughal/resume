<?php 
   session_start();

   echo "<h1>Your Name is :".$_COOKIE["name"]."</h1>";
   echo "<h1>Your Father Name is :".$_COOKIE["fname"]."</h1>";
   echo "<h1>Your Email is :".$_COOKIE["email"]."</h1>";
?>