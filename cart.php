<?php
include("./connection.php");
session_start();
$uemail = @$_SESSION['uemail'];

include("./include/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style3.css">
    <title>Document</title>
</head>
<style>
    .tr1{
  background-color: greenyellow !important;
  color:purple;
  line-height: 35px !important;  
}
.si{
    font-size: 25px !important;
    color: red !important   ;
    position: relative;
    left: 20px;
    cursor:pointer;
}
.bsize{
    box-sizing: border-box !important;
}
.lh{
    line-height:70px !important;
}
    .tsd{
    position:relative !important;
    left: 33px !important;
    line-height: 30px !important;
    padding-top: 30px !important;

  }
  .ifld{
    padding-left: 65px;
    width: 150px;
    border: 1px solid #eceded;
    color: #424646 !important;
  }
  .tbborder{
    background-color:white;
    box-shadow: 0px 0px 15px -10px black ;
    box-sizing: border-box !important;
  }
.qnt{
    padding-left:80px !important;
}
.coupon{
    line-height: 50px !important;
    border: none;
    box-shadow: 0px 0px 15px -14px black ;
    margin-right: 5px;
    padding-left:30px;
    background-color: white;
}
.apply{
    line-height: 50px !important;
    border: none;
    box-shadow: 0px 0px 15px -14px black ;
    margin-left: 7px;
    padding: 0px 30px;
    background-color: white;
    color: #424646;
    text-decoration: none;
}
.apply:hover{
    color: #f7941d;
}
.bcolor{
    background-color: #f6f6f6;
}
.sps{
    margin-left:70px ;
}
.spst{
    margin-left:105px ;
}
.spss{
    margin-left:100px ;
}
.ccbtn{
    border: none;
    margin-top: 8px;
    background-color:orangered;
    color: white;
    font-size: 14px ;
    width: 100%;
    height: 40px;
    transition: all 0.5s ease-out;
}
.ccbtn:hover{
    background-color: greenyellow;
    color: black;
}
</style>
<body>
    <div class="bcolor content">
    <div class="container py-3">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive-sm">
        <table class="table tbborder">
       
       <tr class="tr1">
                    <th class="ps-4">Product Name</th>
                    <th>Unit Price</th>
                    <th class="qnt">Quantity</th>
                    <th>Total Price</th>
                    <th>Remove</th>
                </tr>
            <tbody id="data">
                <?php
            $sql = "SELECT * FROM `cart` WHERE `uemail`='$uemail'";
            $run = mysqli_query($connection,$sql);
            $gtotal=0;
            $abc=0;
            while ($fet = mysqli_fetch_assoc($run)) {
            $abc++;
                ?>
                  <tr class="lh">
                    <td class="ps-4"><b><?php echo $fet['pname']; ?></b></td>
                    <td class="ps-3"><?php echo $fet['price']; ?></td>
                    <td class="tsd">
                    <div class="carform">
                    <input type="hidden" name="cartid" id="cartid" class="cartid" value="<?php echo $fet['productid']; ?>">
                    <input type="hidden" name="pricee" id="pricee" class="pricee" value="<?php echo $fet['price']; ?>">                    
                    <input type="number" class="ifld input-number" data-min="1" data-max="100" value="<?php echo $fet['pquantity']; ?>">
                    </div>
            </div>
                    </td>
                    <td class="ps-4"><?php echo $fet['tprice']; ?></td>
                    <td class="si delete" data-pid="<?php echo $fet['productid'] ?>" >
                        <span><i class="fa-solid fa-trash-arrow-up"></i></span>
                    </td>
                    <!-- <td><img src="../eshop Ajaxphp/Eshop Project/images/th (16).jfif" height="100px" alt=""></td> -->
                </tr>
                <?php
                $gtotal=$gtotal+$fet['tprice'];
            }
            ?>                
            </tbody>
        </table>
    </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-9 col-md-9 col-sm-6">
                <input type="search" name="" id="" placeholder="Enter your Coupon" class="coupon"><span><a href="#" type="button" class="apply">Apply</a></span>
                 </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p><span>Cart Subtotal</span><span class="sps">Rs.<?php echo $gtotal; ?></span></p>
                <p><span>Shipping</span><span class="spst">Free</span></p>
                <p><span>You Save</span><span class="spss">Rs.200.00</span></p>
                <hr>
                <p><span>Total Pay</span><span class="spss">Rs.<?php echo @$gtotal-200; ?></span></p>
                <a href="./checkout.php"><button class="ccbtn">CHECKOUT</button></a>
                <a href="./index.php"><button class="ccbtn">CONTINUE SHOPPING</button></a>
                <button class="ccbtn empty">REMOVE ALL</button>
            </div>
        </div>
        </div>
        </div>
        <?php
        include("./include/footer.php");
        ?>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.28/sweetalert2.all.js" integrity="sha512-cD1xrn0N1tV0ze8axCp+noWgxMFlWVg22HBXUfowicWhJsnAcSXNKnwI77Bkn3yLyqGvwZ/a8M2PtOjVp5vMaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.28/sweetalert2.all.js"></script>
        <script>
            $(document).ready(function(){
                function load(){
                    $.ajax({
                        url:"./Ajax/cartview.php",
                        method:"GET",
                        success:function(res){
                            $("#data").html(res);
                        }
                    })
                }
                load();

                $(document).on("click",".delete",function(e){
                    e.preventDefault();
                var pid=$(this).data("pid");
                // alert(pid);
                var msg=this;
                
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                    url:"./Ajax/cart.php",
                    method:"POST",
                    data:{
                        del:pid
                    },
                    success:function(res){
                        // alert(res);
                                if (res == 1) {

                                    Swal.fire(
                                        'Deleted!',
                                        'Your data has been deleted.',
                                        'success'
                                    )
                                    setTimeout(() => {
                                        $(msg).closest("tr").fadeOut();
                                    // location.reload(true);
                                    }, 1000);
                                    
                                } else {
                                    Swal.fire(
                                        'warning',
                                        'Your file has NOT been deleted.',
                                        'error'
                                    )
                                }
                            }
                        })

                    }
                })
               
                    
                    
                })                
                $(".empty").on("click",function(){
                    
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                        url:"./Ajax/cart.php",
                        method:"POST",
                        data:{myempty:"empty"},
                        success:function(res){
                            // alert(res);
                                if (res == 1) {

                                    Swal.fire(
                                        'Deleted!',
                                        'Your data has been deleted.',
                                        'success'
                                    )
                                    setTimeout(() => {
                                    // location.reload(true);
                                    window.location="./index.php";
                                    }, 1000);
                                } else {
                                    Swal.fire(
                                        'warning',
                                        'Your file has NOT been deleted.',
                                        'error'
                                    )
                                }
                            }
                        })

                    }
                })
                   
                })
                $(".input-number").on("change",function(){

                    var data = $(this).closest(".carform");
				var cartid = data.find(".cartid").val();
				var pricee = data.find(".pricee").val();
				var qnty = data.find(".ifld").val();
				// alert(cartid);
				// console.log(cartid);
				// alert(pricee);
				// alert(qnty);
			$.ajax({
				url: "./Ajax/cart.php",
                            method: "POST",
                            data: { mycartid: cartid,
							myprice:pricee,
							cqty:qnty,
							},
                            success: function (response) {
								// alert(response);
							if(response==9){
								location.reload(true);
							}
							}
			})
                })
                });
        </script>
</body>
</html>
