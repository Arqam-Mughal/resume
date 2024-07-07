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
    $arr = array( "ali", "bscs",90, 90, 96, 99, 98);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // echo $a[0];
    // echo $a[1];
    // echo $a[2];
    // echo $a[3];
    // echo $a[4];
    // echo $a[5];
    // echo $a[6];
    

    //     echo "<pre>";
// print_r($a);
// echo "</pre>";
    // $a=[20,40,56];
    
    // $len=count($arr);
// for($a=0;$a<$len;$a++){
//    echo "<h1>".$arr[$a]."</h1>";
// }
    $ob = 0;
    foreach ($arr as $val) {
        if (gettype($val) == "integer") {
            echo "<h1>" . $val . "</h1>";
            $ob = $ob + $val;

        }else{
            echo "<h1>" . $val . "</h1>";
        }
    }
    $total=500;
    echo "<h1>" . $total . "</h1>";
    echo "<h1>" . $ob . "</h1>";
    $per=$ob/$total*100;
    echo "<h1>" . $per . "</h1>";
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
       echo "<h1>" . $g . "</h1>";
    ?>
</body>

</html>