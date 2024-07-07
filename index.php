<?php
session_start();
$uemail = @$_SESSION['uemail'];

include("./include/header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <!-- <link rel="stylesheet" href="./files/bootstrap.min.css">   -->
    <title>Document</title>
</head>

<body>
    <div class="container content">
        <div class="row my-5 pt-5 justify-content-center">
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 mb-md-4 col-sm-12 col-12 mb-3 px-sm-auto mx-lg-4">
            <form id="cartform">
            <div class="card" style="width: 18rem;">
            <img src="../eshop php/Eshop Project/images/th (3).jfif" class="card-img-top" height="200px" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Infinix Hot10!</h5>
              <p class="card-text">A mobile with great features and some extra benefit!</p>
           
                <input type="hidden" name="pname" id="pname" class="pname" value="Infinix Hot10!">
                  <input type="hidden" name="pcode" class="pcode" id="pcode" value="20">
                  <input type="hidden" name="price" class="price" id="price" value="39999">
                  <input type="hidden" name="tprice" class="tprice" id="tprice" value="39999">
                  <input type="hidden" name="uemail" class="uemail" id="uemail" value="<?php echo $uemail ; ?>">
                  <div class="text-center">
                  <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
                </div>
            </div>
            </div>
          </form>
            </div>
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 col-sm-12 col-12 mb-3 px-sm-auto mx-lg-4">
            <form id="cartform">

<div class="card" style="width: 18rem;">
<img src="../eshop php/Eshop Project/images/th (15).jfif" class="card-img-top " height="200px" alt="...">
<input type="hidden" name="pname" class="pname" id="pname" value="Hp Laptop!">

<div class="card-body">
  <h5 class="card-title text-center">Hp Laptop!</h5>
  <p class="card-text">The Laptop title and make up the bulk of the card's content.</p>
  <input type="hidden" name="pcode" class="pcode" id="pcode" value="10">
<input type="hidden" name="price" class="price" id="price" value="49999">
<input type="hidden" name="tprice" class="tprice" id="tprice" value="49999">
<input type="hidden" name="uemail" class="uemail" id="uemail" value="<?php echo $uemail ; ?>">
  <div class="text-center">
  <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
</div>
</div>
</div>
</form>
            </div>
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 mb-md-4 col-sm-12 col-7 mb-3 px-sm-auto mx-lg-4">
            <form id="cartform">
                    <div class="card" style="width: 18rem;">
                    <img src="../eshop php/Eshop Project/images/th (1).jfif" class="card-img-top" height="200px" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Vivo v53e</h5>
                      <p class="card-text">the card title and make up the bulk of the card's content.</p>
                      <input type="hidden" name="pname" id="pname" class="pname" value="Vivo v53e">
                      <input type="hidden" name="pcode" class="pcode" id="pcode" value="30">
                      <input type="hidden" name="price" class="price" id="price" value="69999">
                      <input type="hidden" name="tprice" class="tprice" id="tprice" value="69999">
                      <input type="hidden" name="uemail" class="uemail" id="uemail" value="<?php echo $uemail ; ?>">
                  <div class="text-center">
                  <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
                </div>
                    </div>
                    </div>
                    </form>
            </div>
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 mb-md-4 col-sm-12 col-12 mb-3 px-sm-auto mx-lg-4">
            <form id="cartform">
                            <div class="card" style="width: 18rem;">
                            <img src="../eshop php/Eshop Project/images/th (10).jfif" class="card-img-top" height="200px" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center">Dell corei3!</h5>
                              <p class="card-text">the card title and make up the bulk of the card's content.</p>
                              <input type="hidden" name="pname" id="pname" class="pname" value="Dell corei3!">
                <input type="hidden" name="pcode" class="pcode" id="pcode" value="40">
                  <input type="hidden" name="price" class="price" id="price" value="25999">
                  <input type="hidden" name="tprice" class="tprice" id="tprice" value="25999">
                  <input type="hidden" name="uemail" class="uemail" id="uemail" value="<?php echo $uemail ; ?>">
                  <div class="text-center">
                  <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
                </div>
                            </div>
                            </div>
          </form>
            </div>
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 col-sm-12 col-12 mb-3 px-sm-auto mx-lg-4">
            <form id="cartform">
                                <div class="card" style="width: 18rem;">
                                <img src="../eshop php/Eshop Project/images/th (12).jfif" class="card-img-top" height="200px" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title text-center">Hp corei6!</h5>
                                  <p class="card-text">A card title and make up the bulk of the card's content.</p>
                                  <input type="hidden" name="pname" id="pname" class="pname" value="Hp corei6!">
                                  <input type="hidden" name="pcode" class="pcode" id="pcode" value="50">
                                  <input type="hidden" name="price" class="price" id="price" value="79999">
                                  <input type="hidden" name="tprice" class="tprice" id="tprice" value="79999">
                                  <input type="hidden" name="uemail" class="uemail" id="uemail" value="<?php echo $uemail ; ?>">
                  <div class="text-center">
                  <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
                </div>
                                </div>
                                </div>
                                </form>
            </div>
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 mb-md-4 col-sm-12 col-12 mb-3 px-sm-auto mx-lg-4">
            <form id="cartform">
                                    <div class="card" style="width: 18rem;">
                                    <img src="../eshop php/Eshop Project/images/th (21).jfif" class="card-img-top" height="200px" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title text-center">Fortuner</h5>
                                      <p class="card-text">A car with many up the bulk of the card's content.</p>
                                      <input type="hidden" name="pname" id="pname" class="pname" value="Fortuner!">
                                      <input type="hidden" name="pcode" class="pcode" id="pcode" value="60">
                                      <input type="hidden" name="price" class="price" id="price" value="30000000">
                                      <input type="hidden" name="tprice" class="tprice" id="tprice" value="30000000">
                                      <input type="hidden" name="uemail" class="uemail" id="uemail" value="<?php echo $uemail ; ?>">
                  <div class="text-center">
                  <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
                </div>
                                    </div>
                                    </div>
          </form>
            </div>
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 mb-md-4 col-sm-12 col-12 mb-3 px-sm-auto mx-lg-4">
            <form id="cartform">
                                            <div class="card" style="width: 18rem;">
                                            <img src="../eshop php/Eshop Project/images/10424245_2_1200x1200.webp" class="card-img-top" height="200px" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title text-center">Lenovo LPTP!</h5>
                                              <p class="card-text"> The Laptop card and make up the bulk of content.</p>
                                              <input type="hidden" name="pname" id="pname" class="pname" value="Lenovo LPTP!">
                                              <input type="hidden" name="pcode" class="pcode" id="pcode" value="70">
                                              <input type="hidden" name="price" class="price" id="price" value="45999">
                                              <input type="hidden" name="tprice" class="tprice" id="tprice" value="45999">
                                              <input type="hidden" name="uemail" class="uemail" id="uemail" value="<?php echo $uemail ; ?>">
                  <div class="text-center">
                  <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
                </div>
                                            </div>
                                            </div>
          </form>
            </div>
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 col-sm-12 col-12 mb-3 px-sm-auto mx-lg-4">
            <form id="cartform">
                                                <div class="card" style="width: 18rem;">
                                                <img src="../../project/eshop Ajax and OOP php/Eshop Project/images/th (1).jfif" class="card-img-top" height="200px" alt="...">
                                                <div class="card-body">
                                                  <h5 class="card-title text-center">Oppo Reno!</h5>
                                                  <p class="card-text">the card title and make up the bulk of the card's content.</p>
                                                  <input type="hidden" name="pname" id="pname" class="pname" value="Oppo Reno!">
                                                 <input type="hidden" name="pcode" class="pcode" id="pcode" value="80">
                                                 <input type="hidden" name="price" class="price" id="price" value="89999">
                                                 <input type="hidden" name="tprice" class="tprice" id="tprice" value="89999">
                                                 <input type="hidden" name="uemail" class="uemail" id="uemail" value="<?php echo $uemail ; ?>">
                  <div class="text-center">
                  <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
                </div>
                                                </div>
                                                </div>
          </form>
            </div>
            <div class="col-lg-3 mb-lg-5 col-md-6 ps-md-5 mb-md-4 col-sm-12 col-12 mb-3 px-sm-auto mx-lg-4">
                <form id="cartform">
                    <div class="card" style="width: 18rem;">
                        <img src="../../project/eshop Ajax and OOP php/Eshop Project/images/th (12).jfif" class="card-img-top"
                            height="200px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">VivoY21!</h5>
                            <p class="card-text">the card title and make up the bulk of the card's content.</p>
                            <input type="hidden" name="pname" id="pname" class="pname" value="VivoY21!">
                            <input type="hidden" name="pcode" class="pcode" id="pcode" value="90">
                            <input type="hidden" name="price" class="price" id="price" value="24999">
                            <input type="hidden" name="tprice" class="tprice" id="tprice" value="24999">
                            <input type="hidden" name="uemail" class="uemail" id="uemail"
                                value="<?php echo $uemail ; ?>">
                            <div class="text-center">
                                <button type="submit" id="addtocart" class="btn4">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </form>
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
  
  $(document).on("click", "#addtocart", function(e){
      e.preventDefault();
      var data = $(this).closest("#cartform");
    var price = data.find(".price").val();
    var pname = data.find(".pname").val();
    var pcode = data.find(".pcode").val();
    var tprice = data.find(".tprice").val();
    var uemail = data.find(".uemail").val();
    // alert(pcode);
    // alert(price);
    // alert(pname);
    // alert(tprice);
    // alert(uemail);
   
    $.ajax({
      url:"./Ajax/cart.php",
      method:"POST",
      
      data:{
       pcode:pcode,
       price:price,
       pname:pname,
       tprice:tprice,
       uemail:uemail,
      },
      success:function(res){
        // alert(res);
      if(res==1){
        window.location="./login.php";
      }else if(res == 2){
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
								title: 'Cart has been Added Successfully!'
							})
                    load_cart_item();
                    load_cart_price();

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
								title: 'This cart is Already selected!'
							})

      }
      }
    })

  })
</script>
<script src="./files/popper.min.js"></script>
<script src="./files/bootstrap.min.js"></script>

</body>

</html>