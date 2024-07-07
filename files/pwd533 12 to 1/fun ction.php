<!doctype html>
<html lang="en">

<head>
  <title>Functions.php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<?php

// function add($a){
// $g="<h1>This is statement ".$a."</h1>";

// return $g;
// }
//  $f=add(40);
// $g=add(50);
// $h=add(60);
// $=add(70);
// $J=add(80);

// echo $f;
// echo $g;
// echo $h;
// echo $I;
// echo $J;

function add($a,$b){
$c=$a+$b;

return $c;
}
$x=add(40,50);
$z=add(361,239);

echo "<h1>Your Result is: ".$x."</h1>";
echo "<h1>Your Result is: ".$z."</h1>";
// <------------------------------->

function result($per=0){
  if($per<=100 && $per>90){
   $g="You are at merit.Your grade is A+";
  }elseif($per<90 && $per>=70){
    $g="You are good.Your grade is A";
  }elseif($per<70 && $per>=60){
   $g="Congratulation.You have got B grade in exams";
  }elseif($per<60 && $per>=50){
  $g="You are just nice.Your grade is C";
  }elseif($per<50 && $per>=33){
    $g="Your are pass.";
  }else{
    $g="You are Fail.Try for the next time.";
  }
  return $g;
}
?>
<div class="table-responsive">
  <table class="table table-info table-bordered">
  
      <tr align="center">
        <th scope="col">Name</th>
        <th scope="col">Class</th>
        <th scope="col">English</th>
        <th scope="col">PS</th>
        <th scope="col">Computer</th>
        <th scope="col">Urdu</th>
        <th scope="col">Math</th>
        <th scope="col">Phisics</th>
        <th scope="col">Obtained</th>
        <th scope="col">Total</th>
        <th scope="col">Percentage</th>
        <th scope="col">Grade</th>
      </tr>

    <tbody>
      
  <?php 

$arr = array(
  array("Ali","Bscs",90,40,30,99,88,93),
  array("Ahmad","Bscs",60,90,70,99,89,44),
  array("Ali","Bscs",80,42,90,49,78,73),
  array("Ali","Bscs",70,40,64,96,38,23),
  array("Ali","Bscs",20,30,10,29,18,33)
);

$total=500;
foreach ($arr as $value) {
echo "<tr align='center'>";
  $ob=0;
  foreach($value as $data){
    if(gettype($data)=="integer"){
      $ob=$ob+$data;
      echo "<td>".$data."</td>";
    }else{
      echo "<td>".$data."</td>";
    }
  }
  echo "<td>".$ob."</td>";
  echo "<td>".$total."</td>";
  $per2=$ob/$total*100;
  echo "<td>".$per2."</td>";
  $grade=result($per2);

  echo "<td>".$grade."</td>";

  echo "</tr>";
}

?>
 </tbody>
  </table>
</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>