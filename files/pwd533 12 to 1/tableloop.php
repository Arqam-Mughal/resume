<?php 
  if(isset($_POST['sub'])){
     $tnum=$_POST['tnum'];
     $snum=$_POST['snum'];
     $enum=$_POST['enum'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label>Table number</label>
        <input type="number" placeholder="Enter Your Table number" name="tnum" required size="60" />
        <br><br>
        <label>Enter starting Number</label>
        <input type="number" placeholder="Enter Your starting number" name="snum" required size="60" />
        <br><br>
        <label>Enter ending number</label>
        <input type="number" placeholder="Enter your ending number" name="enum" required size="60" />
        <br><br>
    
        <input type="submit" name="sub" value="submit" />
    </form>
    <table border="1" width="900" align="center" cellpadding="15" cellspacing="5" style="background-color:black; color:white;" >
        <?php 
           $tab=@$tnum;
          
           for( $a=@$snum;$a<=@$enum;$a++){
             ?>
                 <tr>
                    <th><?php echo $tab; ?></th>
                    <th><?php echo "x"; ?></th>
                    <th><?php echo $a; ?></th>
                    <th><?php echo "="; ?></th>
                    <th><?php echo $tab*$a; ?></th>
                 </tr>
             <?php
           
           }

           $fat=7;
           $r=1;
           for($a=$fat;$a>=1;$a--){
            $r=$r*$a;
           }
        ?>
        <h1>Factorial is : <?php echo $r; ?></h1>
    </table>
</body>
</html>