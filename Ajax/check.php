<?php
include("../connection.php");
session_start();
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;

        require "../PHPMailer/PHPMailer.php";
        require "../PHPMailer/Exception.php";
        require "../PHPMailer/SMTP.php";
// $uemail = $_SESSION['uemail'];

$ufname = mysqli_real_escape_string($connection,$_POST['ufname']);
$ulname = mysqli_real_escape_string($connection,$_POST['ulname']);
$uemail = mysqli_real_escape_string($connection,$_POST['uemail']);
$umobile = mysqli_real_escape_string($connection,$_POST['umobile']);
$ucountry = mysqli_real_escape_string($connection,$_POST['ucountry']);
$ustate = mysqli_real_escape_string($connection,$_POST['ustate']);
$ucity = mysqli_real_escape_string($connection,$_POST['ucity']);
$pstlcode = mysqli_real_escape_string($connection,$_POST['pstlcode']);
$uaddress = mysqli_real_escape_string($connection,$_POST['uaddress']);
$praddress = mysqli_real_escape_string($connection,$_POST['praddress']);
@$method = mysqli_real_escape_string($connection,$_POST['pay']);
$ustatus = "pending";
$date = date('m-d-y');
$order_num= rand(10000,90000);

if($ufname=="" || $ulname == "" || $uemail == "" || $umobile == "" || $ucountry == "" || $ustate=="" || $ucity=="" || $pstlcode=="" || $uaddress=="" || $praddress == "" || $method =="" || $ustatus=="" || $date==""){
    echo 1;
}else{
    $ins = "INSERT INTO `onlineuser`(`order_num`, `ufname`, `ulname`, `uemail`, `umobile`, `ucountry`, `ustate`, `ucity`, `pstlcode`, `uaddress`, `praddress`, `method`, `ustatus`, `date`) VALUES ('$order_num','$ufname','$ulname','$uemail','$umobile','$ucountry','$ustate','$ucity','$pstlcode','$uaddress','$praddress','$method','$ustatus','$date')";
    $irun = mysqli_query($connection,$ins);
    if($irun){
        $msg="Right";
    }else{
        $msg = "NOT RIGHT";
    }
if($msg=="Right"){
    $select = "SELECT * FROM `cart` WHERE `uemail`='$uemail'";
    $srun = mysqli_query($connection,$select);
    $gtotal=0;
    while($fet = mysqli_fetch_assoc($srun)){
        $gtotal= $gtotal+$fet['tprice'];
        $pname = $fet['pname'];
        $psale = $fet['price'];
        $ptprice = $fet['tprice'];
        $pquantity = $fet['pquantity'];
        $pcode = $fet['pcode'];
        $inss = "INSERT INTO `orders`(`order_num`, `pname`, `psale`, `ptprice`, `uemail`, `pquantity`, `odate`, `ostatus`) VALUES ('$order_num','$pname','$psale','$ptprice','$uemail','$pquantity','$date','$ustatus')";
        $ir = mysqli_query($connection,$inss);
        if($ir){
            $msg="right";
        }
    } 
}
}
    if(@$msg=="right"){
        $del = "DELETE FROM `cart` WHERE `uemail`='$uemail'";
        $drun = mysqli_query($connection,$del);
        if($drun){
            $msg ="correct";
            // echo 1;
        }
    if($msg=="correct"){
        $name = "Mirza Arqam";
        $order = rand(10000,90000);
        $oemail="$uemail";
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "mirzaarqam88@gmail.com";
        $mail->Password = "sxdzttzonqgzrqap";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        
        $mail->isHTML(true);
        $mail->setFrom($oemail,$name);
        $mail->addAddress($oemail);
        $mail->Subject = "Male Fashion inventory Store Invoic ID";
        $mail->Body = "<h1>Your invoice ID is $order </h1> <p>Please use this invoice id to confirm your order when you receive your parcel from our courier service partner.$gtotal <br> Thanks for shopping!</p>";
        
        if($mail->send()){
            echo 2;
        }else{
            echo 3;
        }
    }
    }