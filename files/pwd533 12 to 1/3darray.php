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
    <div class="container">


        <div class="table-responsive">
            <table class="table table-primary table-bordered">

                <tbody>
                    <?php
                    $arr = array(
                        "bscs" => array(
                            array("ali", "bscs", 94, 95, 99, 98, 99),
                            array("maaz", "bscs", 88, 85, 89, 88, 89),
                            array("humza", "bscs", 94, 95, 99, 98, 99),
                            array("hina", "bscs", 84, 75, 99, 88, 79),
                            array("ayesha", "bscs", 94, 85, 79, 88, 89),
                            array("umair", "bscs", 84, 95, 69, 98, 49),
                            array("Anees", "bscs", 98, 99, 99, 98, 97),
                        ),
                        "bsit" => array(
                            array("ali", "bsit", 94, 95, 99, 98, 99),
                            array("maaz", "bsit", 88, 85, 89, 88, 89),
                            array("humza", "bsit", 94, 95, 99, 98, 99),
                            array("hina", "bsit", 84, 75, 99, 88, 79),
                            array("ayesha", "bsit", 94, 85, 79, 88, 89),
                            array("umair", "bsit", 84, 95, 69, 98, 49),
                            array("Anees", "bsit", 98, 99, 99, 98, 97),
                        ),
                        "bseng" => array(
                            array("ali", "bseng", 94, 95, 99, 98, 99),
                            array("maaz", "bseng", 88, 85, 89, 88, 89),
                            array("humza", "bseng", 94, 95, 99, 98, 99),
                            array("hina", "bseng", 84, 75, 99, 88, 79),
                            array("ayesha", "bseng", 94, 85, 79, 88, 89),
                            array("umair", "bseng", 84, 95, 69, 98, 49),
                            array("Anees", "bseng", 98, 99, 99, 98, 97),
                        ),
                    );



                    $total = 500;
                    foreach ($arr as $key => $val) {
                        echo "<tr align='center'>";
                        echo "<th colspan='11'><h1 style='text-transform:uppercase;'>" . $key . "</h1></th>";
                        echo "</tr>";
                        ?>

                        <tr align='center'>
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

                        <?php
                        foreach ($val as $data) {
                            echo "<tr align='center'>";
                            $ob = 0;

                            foreach ($data as $d) {
                                if (gettype($d) == "integer") {
                                    $ob = $ob + $d;
                                    echo "<td>" . $d . "</td>";
                                } else {
                                    echo "<td>" . $d . "</td>";
                                }
                            }
                            echo "<td>" . $total . "</td>";
                            echo "<td>" . $ob . "</td>";
                            $per = $ob / $total * 100;
                            echo "<td>" . $per . "%</td>";
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
                            echo "<td>" . $g . "</td>";
                            echo "</tr>";
                        }
                    }


                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>