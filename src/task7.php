<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a program to calculate factorial of a number using for loop in php</h1>
    <form action="" method="get">
        <input type="number" name="num1" id="">
        <!-- <input type="number" name="num2"> -->
        <input type="submit" value="submit">
    </form>
    <?php 
    $num = $_GET["num1"];
    $sum = 1;
    for($i=1; $i < $num+1;$i++){
        $sum  = $i*$sum;
    }
    echo $sum;
    ?>
</body>
</html>