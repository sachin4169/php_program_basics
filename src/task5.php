<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a program to check student grade based on the marks using if-else statement.</h1>
    <ul>
        <li>If marks are 60% or more, grade will be First Division.</li>
        <li>If marks between 45% to 59%, grade will be Second Division.</li>
        <li>If marks between 33% to 44%, grade will be Third Division.</li>
        <li>If marks are less than 33%, student will be Fail.</li>
    </ul>

    <form action="" method="get">
        <label for="">Hindi</label><br>
        <input type="number" name="Hindi" placeholder="enter marks"><br>
        <label for="">Engils</label><br>
        <input type="number" name="English" placeholder="enter marks"><br>
        <label for="">Math</label><br>
        <input type="number" name="Maths" placeholder="enter marks"><br>
        <label for="">Science</label><br>
        <input type="number" name="Science" placeholder="enter marks"><br>
        <input type="submit" value="submit">
    </form>
    <?php 
    $Hindi = $_GET['Hindi'];
    $English = $_GET['English'];
    $Maths = $_GET['Maths'];
    $Science = $_GET['Science'];
    $marks = ($Hindi+$English+$Maths+$Science)*100/400;
    echo "<h2>marks obtain : $marks %</h2>";
    if($marks >= 60 ){
        echo "First Division";
    }elseif($marks <= 59 && $marks >=45){
        echo "Second Division";
    }elseif($marks <= 44 && $marks>=33 ){
        echo "Third Division";
    }else{
        echo "Fail";
    }
    ?>
</body>
</html>