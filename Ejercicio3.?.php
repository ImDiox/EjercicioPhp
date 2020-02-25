<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        $i=1;
        while($i<=1000){
            $a=0;
            echo "<tr>";
            while($a<5){
                echo "<td>";
                echo $i;
                echo "</td>";
                $i=$i+1;
                $a=$a+1;
            }
            echo "</tr>"
        }
</body>
</html>