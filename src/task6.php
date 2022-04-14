<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.</h1>
    <ul>
        <li>You can pass 1 to 7 number in switch</li>
        <li>Day 1 will be considered as Monday</li>
        <li>If number is not between 1 to 7, show invalid number in default</li>
    </ul>
    <?php
    $num = 7;
    switch ($num) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;

        default:
            echo "<p>number is not between 1 to 7, invalid number</p>";
            break;
    }
    ?>
</body>

</html>