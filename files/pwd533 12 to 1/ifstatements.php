<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //    $age=51;
    //    if($age>=45 && $age<=50){
    //        echo "<h1> You are available for Job </h1>";
    //    }else{
    //     echo "<h1> You are not available for Job </h1>";
    //    }
    $name="ALi Raza";
    $class="BSCS";
    $eng=99;
    $math=95;
    $IS=99;
    $PS=92;
    $urdu=95;
    $total=500;
    $ob=$eng+$math+$IS+$PS+$urdu;
    $per=$ob/$total*100;
    if($per>=90 && $per<=100){
     $g=" You are amazing Your grade is A+";
    }elseif($per>=80 && $per<90){
        $g=" You are Nice Your grade is A";
    }elseif($per>=70 && $per<80){
        $g=" You are Good Your grade is B";
    }elseif($per>=60 && $per<70){
        $g=" You are average Your grade is C";
    }elseif($per>=50 && $per<60){
        $g=" You are Just Good Your grade is D";
    }else{
        $g=" You are amazing nice Good Your grade is A++";
    }
    // echo "<h1>Student name is : </h1>";
    ?>
    
<h1>Student name is : <?php echo $name ?></h1>
<h1>Student class is : <?php echo $class ?></h1>
<h1>English marks : <?php echo $eng ?></h1>
<h1>Math marks : <?php echo $math ?></h1>
<h1>Urdu marks : <?php echo $urdu ?></h1>
<h1>IS marks : <?php echo $IS ?></h1>
<h1>PS marks : <?php echo $PS ?></h1>
<h1>Totalmarks : <?php echo $total ?></h1>
<h1>Obtain marks : <?php echo $ob ?></h1>
<h1>Percentage : <?php echo $per."%" ?></h1>
<h1>Grade : <?php echo $g ?></h1>

</body>
</html>