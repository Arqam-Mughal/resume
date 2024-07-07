<?php
include("../connection.php");
session_start();
$uemail = @$_SESSION['uemail'];
if(isset($_POST['pcode'])){
    if($uemail==""){
        echo 1;
    }else{
        $pcode = mysqli_real_escape_string($connection,$_POST['pcode']);
        $pname = mysqli_real_escape_string($connection,$_POST['pname']);
        $price = mysqli_real_escape_string($connection,$_POST['price']);
        $tprice = mysqli_real_escape_string($connection,$_POST['tprice']);
        $uemail = mysqli_real_escape_string($connection,$_POST['uemail']);
        $pquantity = 1;

        $sql = "SELECT * FROM `cart` WHERE `uemail`='$uemail' && `pcode`='$pcode'";
        $run = mysqli_query($connection,$sql);
        // $fet = mysqli_fetch_assos($run);
        if(mysqli_num_rows($run)==1){
            echo 3;
        }else{
            $ssql = "INSERT INTO `cart`(`pcode`,`pname`,`price`,`tprice`,`uemail`,`pquantity`)VALUES('$pcode','$pname','$price','$tprice','$uemail','$pquantity')";
            $rrun = mysqli_query($connection,$ssql);
            if($rrun){
                echo 2;
            }else{
                echo 4;
            }
        }
    }
}
if(isset($_POST['del'])){
    $dell = $_POST['del'];
$dlt = "DELETE FROM `cart` WHERE `productid`='$dell'";
$drun = mysqli_query($connection,$dlt);
if($drun){
    echo 1;
}else{
    echo 2;
}
}
if(isset($_POST['myempty'])){
$dlt = "DELETE FROM `cart` WHERE `uemail`='$uemail'";
$drun = mysqli_query($connection,$dlt);
if($drun){
    echo 1;
}else{
    echo 2;
}
}
if(isset($_POST['cartitems'])){
    $itemsql = "SELECT * FROM `cart` WHERE `uemail`='$uemail'";
    $itemrun = mysqli_query($connection,$itemsql);
    $count = mysqli_num_rows($itemrun);
    echo $count;
}
if(isset($_POST['cartprice'])){
    $pricesql = "SELECT * FROM `cart` WHERE `uemail`='$uemail'";
    $pricerun = mysqli_query($connection,$pricesql);
    $pricetotal=0;
    while ($pricefet = mysqli_fetch_assoc($pricerun)){
      $pricetotal = $pricetotal+$pricefet['tprice'];
    }
    echo $pricetotal;
}
if(isset($_POST['cqty'])){
    $cartid = $_POST['mycartid'];
    $myprice = $_POST['myprice'];
    $cqty = $_POST['cqty'];

    $totall = $cqty*$myprice;

    $updsql = "UPDATE `cart` SET `tprice`='$totall',`pquantity`='$cqty' WHERE `productid`='$cartid'";
    $updrun = mysqli_query($connection,$updsql);
    if($updsql){
        echo 9;
    }

}
?>