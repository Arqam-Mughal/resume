<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">
    <link rel="stylesheet" href="./style3.css">
    <link rel="stylesheet" href="../files/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">
</head>
<style>
   body::-webkit-scrollbar{
        width: 7px;    
    }
    body::-webkit-scrollbar-thumb{
        background-color:#f7941d;
    }
    /* body::-webkit-scrollbar-track{
        background-color: gray;
    } */
    /* body::-webkit-scrollbar-track:hover{
        background-color: red;
    } */
    body::-webkit-scrollbar-thumb:hover{
        background-color: blue;
        
    }
  .bttn{
    border:1px solid greenyellow !important;
    color: greenyellow !important;
  }
  .bttn:hover{
    background-color: greenyellow !important;
    transition: all 1s ease-out !important;
    color: black !important;
  }
  .nvv{
    font-size:18px !important;
  }
  .bcolor{
    background-color: #f6f6f6;
}
.ptext{
  background-image: linear-gradient(yellow,purple,green);
  color:white;
  font-weight: 400;
  border:none;
  width: 100px;
  height: 30px;
  border-radius: 5px;
}
  /* #loaing{
    width: 100%;
    height: 100vh;
    background: #fff url(./Preloaders/Spinner-3.gif) no-repeat center;
    position: absolute;
    z-index: 99999;
    overflow: hidden;
} */
.content{
  display: none;
}
#loader{
  width:100%;
  height:100vh;
  background-color: white;
  overflow: hidden;
  position: absolute;
}
#loader>div{
  height: 75px;
  width: 75px;
  border: 10px #45474b solid;
  border-top-color:yellow ;
  margin: 0px auto;
  position: relative;
  top: 250px;
  left: 0;
  right: 0;
  bottom: 0;
  /* z-index: 99999; */
  border-radius: 50px;
  animation: spin 0.7s infinite linear;
}
@keyframes spin{
  100%{
    transform:rotate(360deg);
  }
}
</style>
<body>
  <!-- <div id="loaing"></div> -->
  <div id="loader">
    <div></div>
  </div>
<div class="content">
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav" style="background-color:purple;">
        <div class="container-fluid text-light">
          <a class="navbar-brand" style="font-weight: bold;" href="#">Navbar *
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item nn">
                <a class="nav-link nvv bgg text-white" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nvv text-white" href="cart.php">Shop</a>
              
              <li class="nav-item dropdown">
                <a class="nav-link text-white nvv dropdown-toggle" href="#" target="_blank" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item"  href="./index.php" target="_blank">Product</a></li>
                  <li><a class="dropdown-item" href="./checkout.php" target="_blank">Checkout</a></li>
                  <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">SEO</a></li> -->
                </ul>
              </li>
              </li><li class="nav-item">
                <a class="nav-link nvv text-white" href="./checkout.php" target="_blank">Checkout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nvv text-white" href="./contact.php" target="_blank">Contact Us</a>
              </li>
            </ul>
            <?php
            if(empty($_SESSION['uemail'])){
              ?>
              <a href="./signup.php" class="btn bttn me-2 px-4">New Account</button>
              <?php
            }else{
            ?>
              <a href="./profile.php" class="btn bttn me-2 px-4" target="_blank">My Account</button>
            <?php
            }
            ?>
            <?php
            if(empty($_SESSION['uemail'])){
              ?>
             <a href="./login.php"class="btn btn-outline-light me-2 px-4" style="transition: all 0.5s ease-out !important;">Login</a>
              <?php
            }else{
            ?>
            <a href="./logout.php"class="btn btn-outline-light me-2 px-4" style="transition: all 0.5s ease-out !important;">Logout</a>
            <?php
            }
            ?>
            <a href="./cart.php" target="_blank" class="btn btt px-4 me-5" style="transition:all 0.5s ease-out !important;">Cart (<span id="cartitem"></span>)</a>

            <!-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btt" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
      <div class="navbbb">
        <div class="container-fluid bcolor">
          <div class="row">
      <nav aria-label="breadcrumb" class="bcolor">
        <ol class="breadcrumb bbc">
          <div class="col-md-9 col-8 py-2 bcolor">
            <span><a href="./index.php" class="bpt text-muted" style="transition:all 0.4s ease-out !important;">Home</a></span>
            <span>/</span>
            <span"><a href="./cart.php" class="bst text-muted" style="transition:all 0.4s ease-out !important;"> Shopping</a></span></div>
            <div class="col-md-3 col-4 py-2 bcolor">
              <span class="text-muted"><i><b>Price:</b></i></span>
          <button class="ptext">Rs.<span id="cartprice"></span></button></div>
      </nav>
    </div>
    </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./script.js"></script>


    <script src="../files/popper.min.js"></script>
    <script src="../files/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      var loader =  document.getElementById("loader");
      window.addEventListener("load", function(){
        $('#loader').delay(1500).fadeOut('slow');
        $('.content').delay(1500).fadeIn('slow');

      })
    </script>
    
</body>
</html>