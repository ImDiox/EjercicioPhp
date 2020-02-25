<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $numa=mt_rand(1,10);
        for($a=0;$a<=10;$a++){
            echo "<tr>";
                echo "<td>";
                echo "$numa X $a";
                echo "</td>";
                echo "<td>";
                $result=$numa*$a;
                echo "$result";
                echo "</td>";
            echo "</tr>";
        }

?>
    </table>
</body>
</html>