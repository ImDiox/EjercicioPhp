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
    <form action="Ejercicio4.2.php" method="get">
    <p>Escribe el primer numero: <input type="text" name="numero1" ></p>
    <p>Escribe el segundo numero: <input type="text" name="numero2" ></p>
    <input type="submit" value="Enviar">
    </form>
    <table>
        <?php
        if (isset($_GET["numero1"]) and isset($_GET["numero2"])){
        
            echo "<tr>";
                echo "<td>";
                echo $_GET["numero1"]. "X" .$_GET["numero2"];
                echo "</td>";
                echo "<td>";
                $result=$_GET["numero1"]*$_GET["numero2"];
                echo "$result";
                echo "</td>";
            echo "</tr>";
    }
?>
    </table>
</body>
</html>