<?php
include("./connection.php");

session_start();
if(isset($_POST['sub'])){
$uemail = $_POST['uemail'];
$upass = $_POST['upass'];
$sql = "SELECT * FROM `signup` WHERE `uemail` ='$uemail' && `upass`='$upass'";
$run = mysqli_query($connection,$sql);
// $fet = mysqli_fetch_assos($run);
if(mysqli_num_rows($run)==1){
    $_SESSION['uemail']=$uemail;
    header("location:./index.php");
}else{
    echo "<script>alert('Invalid Details')</script>";
}
}
?>
<?php
include("./include/header2.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8 m-5">
                <div class="row">
                    <span class="lif text-center">---------------------*You will have to log in first!*-----------------</span>
                </div>
                <div class="row justify-content-center change" onmouseenter="changeA()" onmouseleave="changeB()">
                    <div class="col-12 p-5 bbox">
                
                <span class="trq">That,s Requird!</span>
                <br>
                <span class="liws">Log In With US</span>
                <div class="form-main mt-4">
                <form class="row pt-3" method="post">
                    <div class="col-6 ">
                    <label>Your Email<span class="s1"> * </span></label>
                    <br>
                    <input type="email" name="uemail" id="uemail" class="input1" placeholder="Enter your Email" required>
                </div>
                    <div class="col-6 ">

                    <label>Enter Password<span class="s1"> * </span></label>
                    <br>
                    <input type="password" name="upass" id="upass" class="input1" placeholder="Enter your Password" required>
                </div>
            
            <div class="row my-3 justify-content-around">
                <div class="col-3">
                <button class="btn btn1" type="submit" name="sub">SIGNIN</button>
            </div>
            <div class="col-3">
                <a href="./signup.php" class="btn btn2">SIGNUP</a>
            </div>
        </div>
        </form>

            </div>
        </div>
        
        </div>
        
            </div>
            
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
        
        function changeA(){
        document.querySelector(".change").style.backgroundColor="black";
        document.querySelector(".change").style.color="white";
        document.querySelector(".change").style.transition="all 0.7s ease-in-out";
        }
        function changeB(){
        document.querySelector(".change").style.backgroundColor="";
        document.querySelector(".change").style.color="";
        }
    </script> 
</body>
</html>