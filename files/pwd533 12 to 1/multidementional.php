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
    $arr = array(
        array("ali", "bscs", 94, 95, 99, 98, 99),
        array("maaz", "bscs", 88, 85, 89, 88, 89),
        array("humza", "bscs", 94, 95, 99, 98, 99),
        array("hina", "bscs", 84, 75, 99, 88, 79),
        array("ayesha", "bscs", 94, 85, 79, 88, 89)
    );



$total=500;
    foreach ($arr as $val) {
        $ob=0;
       foreach($val as $data){
        if(gettype($data)=="integer"){
            $ob=$ob+$data;
            echo "<h1>".$data."</h1>";
        }
        else{
            echo "<h1>".$data."</h1>";
        }
       }
       echo "<h1>".$total."</h1>";
       echo "<h1>".$ob."</h1>";
       $per=$ob/$total*100;
       echo "<h1>".$per."%</h1>";
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
       echo "<h1>".$g."</h1>";
      
    }


    ?>
</body>

</html>