<?php
include("./connection.php");
include("./include/header2.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</style>
<body>
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-10 mt-5 lif text-center">--------------------------*Filled Out This Form CareFully!*-----------------------------</div>
            <div class="col-10 p-5 bbox change" onmouseenter="changeA()" onmouseleave="changeB()">

                <span class="trq">That,s Requird!</span>
                <br>
                <span class="liws">Signed In With US</span>
                <div class="form-main mt-4">
                    <form class="row pt-3" id="data">
                        <div class="col-6 mb-3 ">
                            <label>First Name<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ufname" id="ufname" class="input1" placeholder="First Name"
                                required>
                        </div>
                        <div class="col-6 mb-3 ">

                            <label>Last Name<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ulname" id="ulname" class="input1"
                                placeholder="Last Name" required>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>Email<span class="s1"> * </span></label>
                            <br>
                            <input type="email" name="uemail" id="uemail" class="input1" placeholder="Enter your Email"
                                required>
                        </div>
                        <div class="col-6 mb-3 ">

                            <label>Mobile<span class="s1"> * </span></label>
                            <br>
                            <input type="number" name="umobile" id="umobile" class="input1"
                                placeholder="Enter your number" required>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>Country<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ucountry" id="ucountry" class="input1" placeholder=""
                                required>
                        </div>
                        <div class="col-6 mb-3 ">

                            <label>State/Division<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ustate" id="ustate" class="input1"
                                placeholder="" required>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>City<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="ucity" id="ucity" class="input1" placeholder=""
                                required>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>Postalcode<span class="s1"> * </span></label>
                            <br>
                            <input type="text" name="pstlcode" id="pstlcode" class="input1" placeholder=""
                                required>
                        </div>
                        <div class="col-6 mb-3 ">

                            <label>Current Address<span class="s1"> * </span></label>
                            <br>
                            <textarea type="text" name="uaddress" id="uaddress"  style="height: 100px !important;"class="input1"
                                placeholder="" required></textarea>
                        </div>
                        <div class="col-6 mb-3 ">
                            <label>Permanent Address<span class="s1"> * </span></label>
                            <br>
                            <textarea type="text" name="praddress" id="praddress" class="input1" placeholder="" style="height: 100px !important;"
                                required></textarea>
                        </div>
                        <div class="col-6  ">

                            <label>Enter Password<span class="s1"> * </span></label>
                            <br>
                            <input type="password" name="upass" id="upass" class="input1"
                                placeholder="Enter your Password" required>
                        </div>
                        <div class="col-6  ">

                            <label>Confirm Password<span class="s1"> * </span></label>
                            <br>
                            <input type="password" name="cfmpass" id="cfmpass" class="input1"
                                placeholder="Confirm! Password" required>
                        </div>
                        
                    </form>


                    
                        <div class="col-3 mt-4">
                            <input type="submit" id="sub" class="btn bs1 " value="SIGN UP">
                        </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        function changeA() {
            document.querySelector(".change").style.backgroundColor = "black";
            document.querySelector(".change").style.color = "white";
            document.querySelector(".change").style.transition = "all 0.7s ease-in-out";
        }
        function changeB() {
            document.querySelector(".change").style.backgroundColor = "";
            document.querySelector(".change").style.color = "";
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function(){
            $("#sub").on("click",function(e){
                e.preventDefault();
            var formdata = new FormData(data);
            $.ajax({
                url:"./Ajax/ajxsignup.php",
                method:"POST",
                contentType:false,
                processData:false,
                data:formdata,
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
								icon: 'success',
								title: 'Your data has been saved!'
							})
                            setTimeout(()=>{
                                window.location="./login.php";
									},3000);
							$("#data").trigger("reset");
							
			}else{
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
								title: 'You data has not been saved!'
							})
			}

                }
            })
            })
        })
    </script>
</body>

</html>