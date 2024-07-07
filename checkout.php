<?php
include("./connection.php");
session_start();
$uemail = @$_SESSION['uemail'];
include("./include/header2.php");
// include("./include/all header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .bs1{
        background-color:red !important;
        color: white !important;
        padding: 10px 35px;
    }
    .bs1:hover{
        background-color: #f7941d !important;
        transition: all 0.5s ease-in-out;
    }
    .trq{
        color: greenyellow;
    }
    .trq:hover{
        color:white !important;                
    }
    .bs5{
        background-image:linear-gradient(rgba(128, 0, 128, 0.686),red);
        color: white;
    }
    .bs6{
        color: wheat;
    }
    .brder{
    border: 2px greenyellow solid !important;
}
.carttotal{
    font-weight: 600;
    color: greenyellow;
}
.cartline{
    height: 2px;
    width: 60px;
    background-color: greenyellow;
}
.table-bordered{
    border-color: greenyellow !important;
}
.bg1{
    background-color: rgba(255, 255, 255, 0.172) !important;
}
.bg2{
    background-color: rgba(0, 0, 0, 0.341);
}
.btts{
    background-color: aqua !important;
    color: rgba(0, 0, 0, 0.722) !important;  
    font-weight: 600;
    transition: all 0.7s ease-in-out !important;
}
.btts:hover{
    background-color:greenyellow !important;
    color: purple !important;

}
.payment{
    font-weight: 600;
    font-style: italic;
}
.pay{
    outline: black !important;
}
.toheight:hover{
    cursor: pointer;
}
.toheight{
    max-height: 166px !important;
    overflow-y: scroll;
    /* background-color: red !important; */
}
.toheight::-webkit-scrollbar{
     width: 4px !important;
}
.toheight::-webkit-scrollbar-thumb{
      background-color: greenyellow;
}
.toheight::-webkit-scrollbar-thumb:hover{
    background-color: blue;
}
</style>
<body>
    <div class="content bs5">
    <div class="container mb-5">
        <div class="row pt-5" >
            <div class="col-lg-8 col-md-7 pe-4 pb-5" onmouseenter="changeA()" onmouseleave="changeB()">

                
                <span class="liws bs6">*Make Your Checkout Here</span>
                <br>
                <a class="trq" href="./signup.php">Please register in order to checkout more quickly!</a>
                <div class="form-main mt-4">
                    <form class="row pt-3" id="data">
                        <?php
                        $sel = "SELECT * FROM `signup` WHERE `uemail`='$uemail'";
                        $sr = mysqli_query($connection,$sel);
                        $fet= mysqli_fetch_assoc($sr);
                            ?>
                            
                        <div class="col-6 mb-3 ">
                            <label>First Name<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ufname" id="ufname" class="input1" value="<?php echo $fet['ufname']; ?>" readonly>
                        </div>
                        <div class="col-6 mb-3 ">

                            <label>Last Name<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ulname" id="ulname" class="input1" value="<?php echo $fet['ulname']; ?>" readonly>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>Email<span class="s1"> * </span></label>
                            <br>
                            <input type="email" name="uemail" id="uemail" class="input1" value="<?php echo $fet['uemail']; ?>" readonly>
                        </div>
                        <div class="col-6 mb-3 ">

                            <label>Mobile<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="umobile" id="umobile" class="input1" value="<?php echo $fet['umobile']; ?>" readonly>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>Country<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ucountry" id="ucountry" class="input1" value="<?php echo $fet['ucountry']; ?>" readonly>
                        </div>
                        <div class="col-6 mb-3 ">

                            <label>State/Division<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ustate" id="ustate" class="input1" value="<?php echo $fet['ustate']; ?>" readonly>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>City<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ucity" id="ucity" class="input1" value="<?php echo $fet['ucity']; ?>" readonly>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>Postalcode<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="pstlcode" id="pstlcode" class="input1" value="<?php echo $fet['pstlcode']; ?>" readonly>
                        </div>
                        <div class="col-6 mb-3 ">

                            <label>Current Address<span class="s1"> * </span></label>
                            <br>
                            <textarea type="text" name="uaddress" id="uaddress"  style="height: 50px !important;"class="input1" readonly><?php echo $fet['uaddress']; ?></textarea>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>Permanent Address<span class="s1"> * </span></label>
                            <br>
                            <textarea type="text" name="praddress" id="praddress"  style="height: 50px !important;"class="input1" readonly><?php echo $fet['praddress']; ?></textarea>
                        </div>
                        <div class="col-6  ">

                            <label>Enter Password<span class="s1"> * </span></label>
                            <br>
                            <input type="password" name="upass" id="upass" class="input1"
                            value="<?php echo $fet['upass']; ?>" readonly>
                        </div>
                        <div class="col-6  ">

                            <label>Confirm Password<span class="s1"> * </span></label>
                            <br>
                            <input type="password" name="cfmpass" id="cfmpass" class="input1"
                            value="<?php echo $fet['cfmpass']; ?>" readonly>
                        </div>
                        <div class="row mt-3">
                        <div class="form-group">
											<input id="cbox" type="checkbox" class="cbox" onclick="change()">
											<label>Create an account?</label>
										</div>
                        </div>
                       
                </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="brder mt-5 p-4">
                    <h6 class="carttotal">CART TOTALS</h1>
                        <div class="cartline"></div>
                        <div class="toheight mt-4">
                    <table class="table table-bordered text-white text-center">
                        <tr style="color: greenyellow !important;">
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <?php
                        $select = "SELECT * FROM `cart` WHERE `uemail`='$uemail'";
                        $srun = mysqli_query($connection,$select);
                        $gtotal = 0;
                        while($ffet = mysqli_fetch_assoc($srun)){
                            $gtotal = $gtotal+$ffet['tprice'];
                            ?>
                        <tr>
                            <td><?php echo $ffet['pname'] ?></td>
                            <td><?php echo $ffet['pquantity'] ?></td>
                            <td><?php echo $ffet['tprice'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                    <div class="row justify-content-center pt-2 mt-2">
                    <hr class="text-light" style="height: 3px !important; width: 200px !important;"/></div>
                    <div class="row bg1 mt-3 mb-3">
                        <div class="col-7 ps-4">Sub Total</div>
                        <div class="col-5 text-center">Rs.<?php echo $gtotal; ?></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-7 ps-4">(+) Shipping</div>
                        <div class="col-5 text-center">Rs.200.00</div>
                    </div>
                    <hr>
                    <div class="row mt-2 bg2 text-light mb-5">
                        <div class="col-7 ps-4">Total</div>
                        <div class="col-5 text-center">Rs.<?php echo $gtotal; ?></div>
                    </div>
                    
                    <div class="row ps-3 payment">
                        PAYMENTS
                    </div>
                    <div class="cartline mb-4"></div>
                    <input type="radio" name="pay" id="" class="pay" value="Bank Transfer"> <span class="me-3">Bank Transfer</span>
                    <input type="radio" name="pay" id="" class="pay" value="Cash on Delivery"> Cash on Delivery
                    <div class="row mt-3">
                        <input type="button" class="btn btts" value="ORDER NOW">
                    </div>

               </div>
            </form>

            </div>
            </div>

            </div>
            

        </div>

    </div>
    <div class="container-fluid mb-5 py-5">
        <div class="row rbg py-5" style="background-color:#F6F7FB;">
                  <i class="fa fa-facebook"></i>
                  <i class="fa fa-instagram"></i>
        </div>
    </div>
    </div>
    <?php include("./include/footer.php"); ?>
    <script>
        // function changeA() {
        //     document.querySelector(".change").style.backgroundColor = "greenyellow";
        //     document.querySelector(".change").style.color = "";
        //     document.querySelector(".change").style.transition = "all 0.7s ease-in-out";
        // }
        // function changeB() {
        //     document.querySelector(".change").style.backgroundColor = "";
        //     document.querySelector(".change").style.color = "";
        // }
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function change(){
        setTimeout(()=>{
        window.location="./signup.php";
    },500);
    }
</script>
    <script>
        $(document).ready(function(){
            $(".btts").on("click",function(e){
			e.preventDefault();
		var formData = new FormData(data);
		$.ajax({
           url:"./Ajax/check.php",
		   method:"POST",
		  contentType:false,
		  processData:false,
		   data:formData,
		   success:function(res){
			// alert(res);
            if(res==1){
			const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							})

							Toast.fire({
								icon: 'warning',
								title: 'Plz Filled Out All Fields!'
							})
		}else if(res==2){
			const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							})

							Toast.fire({
								icon: 'success',
								title: 'Mail has been sent successfully!'
							})
							setTimeout(() => {
								window.location="./index.php";
							}, 2500);
		}else if(res==3){
			const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							})

							Toast.fire({
								icon: 'warning',
								title: 'Mail Has Not Been Sent!'
							})
		}

           }
            })
            
            })
        })
    </script>
</body>

</html>