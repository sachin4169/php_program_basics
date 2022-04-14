<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 400px;
            border: 2px double black;
        }
        td,th{
            width: 30px;
            height: 45px;
        }
        tr:nth-child(even) >td:nth-child(odd){
            background-color: black;
        }
        tr:nth-child(odd) >td:nth-child(even){
            background-color: #000;
        }
    </style>
</head>

<body>
    <h1>Write a PHP program using nested for loop that creates a chess board</h1>
    <ul>
        <li>You can use html table having width=”400px” and take “30px” as cell height and width for check boxes.</li>
    </ul>
    <?php
    echo " <table>";
    for($i=0;$i<8;$i++){
        echo "<tr>";
        for($j=0;$j<8;$j++){
            echo "<td></td>";
        }
        echo "</tr>";
    }
    echo " </table>";
    ?>
</body>

</html>