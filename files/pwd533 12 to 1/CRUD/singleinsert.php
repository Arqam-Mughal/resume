<?php
include("./connection.php");
if (isset($_POST['sub'])) {
     $sname=mysqli_real_escape_string($conn,$_POST['sname']);
     $sclass=mysqli_real_escape_string($conn,$_POST['sclass']);
     $scnic=mysqli_real_escape_string($conn,$_POST['scnic']);
     $smobile=mysqli_real_escape_string($conn,$_POST['smobile']);
     $sgender=mysqli_real_escape_string($conn,$_POST['sgender']);
     $saddress=mysqli_real_escape_string($conn,$_POST['saddress']);
}

?>

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
    <div class="row justify-content-center ">
        <div class="col-4 bg-dark rounded text-center text-white">
    <?php
    if($conn){
        echo "<h3>Connected</h3>";
    }
    echo "<h3>".@$sname."</h1>";
    echo "<h3>".@$sclass."</h1>";
    echo "<h3>".@$smobile."</h1>";
    echo "<h3>".@$scnic."</h1>";
    echo "<h3>".@$sgender."</h1>";
    echo "<h3>".@$saddress."</h1>";
    ?>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row justify-content-center ">

            <div class="col-6 bg-light mt-4 p-5">
                <form method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="sname" id="" class="form-control" placeholder="Enter name">

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Class</label>
                        <input type="text" name="sclass" id="class" class="form-control" placeholder="Enter name">

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">mobile</label>
                        <input type="number" name="smobile" id="" class="form-control" placeholder="Enter mobile">

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">cnic</label>
                        <input type="number" name="scnic" id="" class="form-control" placeholder="Enter cnic">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select form-select-lg" name="sgender">
                            <option selected>---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <textarea class="form-control" name="saddress" id="" rows="3"></textarea>
                    </div>
                    <input type="submit" value="submit" name="sub" class="btn  btn-primary" />
                </form>
            </div>

        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>