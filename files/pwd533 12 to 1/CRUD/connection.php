<?php
    $conn=mysqli_connect("localhost","root","","pwd533");
    // $conn=@mysqli_connect("localhost","root","","pwd534");
    // echo "<pre>";
    // print_r($conn);
    // echo "</pre>";
    if($conn){
        echo "connneted";
    }else{
        echo "notconnected";
    }
?>