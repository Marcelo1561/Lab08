<?php

    include ('ConexionBD.php');
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


    <br><br><br>

    <?php
        if(isset($_GET['enviar'])){
            $busqueda = $_GET['busqueda'];
            $consulta =$con->query("SELECT * FROM Producto WHERE Nombre LIKE '%$busqueda%'");
            while ($row = $consulta ->fetch_array()){
                echo $row['Nombre'].'<br>';
            }
        }
    ?>
</body>
</html>