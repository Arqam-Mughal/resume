<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
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
                <tr>
                    <?php
                    $ob=0;
                    $total=500;
                    $arr = array("ali", "bscs", 90, 90, 96, 99, 98);
                    foreach ($arr as $val) {
                        if (gettype($val) == "integer") {
                            $ob = $ob + $val;
                            ?>
                            <td>
                                <?php echo $val; ?>
                            </td>
                            <?php
                        } else {
                            ?>
                            <td>
                                <?php echo $val; ?>
                            </td>
                            <?php
                        }

                    }
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
                    ?>
                     <td><?php echo $total; ?></td>
                     <td><?php echo $ob; ?></td>
                     <td><?php echo $per; ?></td>
                     <td><?php echo $g; ?></td>
                </tr>
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