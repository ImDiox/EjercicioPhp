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
    <form action="Ejercicio4.1.php" method="get">
    <p>Numero: <input type="text" name="numero" ></p>
    <input type="submit" value="Enviar">
    </form>
    <table>
        <?php
        if (isset($_GET["numero"])){
        
        for($a=0;$a<=10;$a++){
            echo "<tr>";
                echo "<td>";
                echo $_GET["numero"]. "X $a";
                echo "</td>";
                echo "<td>";
                $result=$_GET["numero"]*$a;
                echo "$result";
                echo "</td>";
            echo "</tr>";
        }
    }
?>
    </table>
</body>
</html>