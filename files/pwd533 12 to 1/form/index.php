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
      if(isset($_POST['sub'])){
         $name=$_POST['uname'];
         $fname=$_POST['fname'];
         $email=$_POST['email'];
         $mobile=$_POST['mobile'];
        
      }
    ?>
    <form method="post">
        <label>Enter Father Name</label>
        <input type="text" placeholder="Enter Your Name" name="uname" required size="60" />
        <br><br>
        <label>Enter Father Name</label>
        <input type="text" placeholder="Enter Your Father Name" name="fname" required size="60" />
        <br><br>
        <label>Enter Email</label>
        <input type="email" placeholder="Enter your Email" name="email" required size="60" />
        <br><br>
        <label>Enter mobile</label>
        <input type="number" placeholder="Enter your Mobile" name="mobile" required />
        <br><br>
        <input type="submit" name="sub" value="submit" />
    </form>

    <h1>Student name is : <?php echo @$name; ?></h1>
    <h1>Student Father name is : <?php echo @$fname; ?></h1>
    <h1>Student Email is : <?php echo @$email; ?></h1>
    <h1>Student mobile is : <?php echo @$mobile; ?></h1>
</body>

</html>