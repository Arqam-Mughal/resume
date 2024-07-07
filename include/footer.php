<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
load_cart_item();
function load_cart_item(){
    $.ajax({
        url:"./Ajax/cart.php",
        method:"POST",
        data:{
            cartitems:"cartitems",
        },
        success:function(res){
            // alert(res);
        $("#cartitem").html(res);
        }
    })    
}
load_cart_price();
function load_cart_price(){
    $.ajax({
        url:"./Ajax/cart.php",
        method:"POST",
        data:{
            cartprice:"cartpp"
        },
        success:function(response){
            // alert(response);
            $("#cartprice").html(response);
        }

    })
}
</script>
</body>
</html>