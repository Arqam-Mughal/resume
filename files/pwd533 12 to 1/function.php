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
    //   function add($a=0){
    //      echo "<h1>This is statements ".$a."</h1>";
    //   }
    //   add();
    //   add(1);
    //   add(2);
    //   add(3);
    //   add(4);

    function add($a=0,$b=0){
       $c=$a+$b;

       return $c;
    }
    $z=add(12,10);
    $y=add(1000,786);
    function result($per=0){
        if ($per >= 90 && $per <= 100) {
            $g = " You are amazing Your grade is A+";
        } elseif ($per >= 80 && $per < 90) {
            $g = " You are Nice Your grade is A";
        } elseif ($per >= 70 && $per < 80) {
            $g = " You are Good Your grade is B";
        } elseif ($per >= 60 && $per < 70) {
            $g = " You are average Your grade is C";
        } elseif ($per >= 50 && $per < 60) {
            $g = " You are Just Good Your grade is D";
        } else {
            $g = " You are amazing nice Good Your grade is A++";
        }
        return $g;  
    }
    ?>

    <h1>My Result is :<?php echo $z; ?></h1>
    <h1>My Result is :<?php echo $y; ?></h1>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>English</th>
                    <th>Math</th>
                    <th>Urdu</th>
                    <th>IS</th>
                    <th>PS</th>
                    <th>total</th>
                    <th>Obtain</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $arr = array(
                    array("ali", "bscs", 94, 95, 99, 98, 99),
                    array("maaz", "bscs", 88, 85, 89, 88, 89),
                    array("humza", "bscs", 94, 95, 99, 98, 99),
                    array("hina", "bscs", 84, 75, 99, 88, 79),
                    array("ayesha", "bscs", 94, 85, 79, 88, 89),
                    array("umair", "bscs", 84, 95, 69, 98, 49),
                    array("Anees", "bscs", 98, 99, 99, 98, 97),
                );



                $total = 500;
                foreach ($arr as $val) {
                    echo "<tr>";
                    $ob = 0;
                    foreach ($val as $data) {
                        if (gettype($data) == "integer") {
                            $ob = $ob + $data;
                            echo "<td>" . $data . "</td>";
                        } else {
                            echo "<td>" . $data . "</td>";
                        }
                    }
                    echo "<td>" . $total . "</td>";
                    echo "<td>" . $ob . "</td>";
                    $per2 = $ob / $total * 100;
                    echo "<td>" . $per2 . "%</td>";
                  $g=result($per2);
                    echo "<td>" . $g . "</td>";
                    echo "</tr>";
                }


                ?>
            </tbody>
        </table>
    </div>
</body>
</html>