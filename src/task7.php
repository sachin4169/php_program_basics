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
    <?php 
    $num =5;
    $sum = 1;
    for($i=1; $i < $num+1;$i++){
        $sum  = $i*$sum;
    }
    echo $sum;
    ?>
</body>
</html>