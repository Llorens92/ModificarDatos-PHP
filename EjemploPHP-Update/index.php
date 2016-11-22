<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <script src="js/regreso.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Empresa";

        $dni = $_GET["NIF"];
        $nom = $_GET["Nombre"];
        $ape = $_GET["Apellidos"];
        $pais = $_GET["paises"];
// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO usuarios VALUES ('$dni', '$nom', '$ape', '$pais')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
        <div id="div6">
            Se han recibido los datos<br>
            Bienvenido <?php echo $_GET["Nombre"] && $_GET["Apellidos"]; ?><br>
            Su NIF es: <?php echo $_GET["NIF"]; ?><br>
            Su email es: <?php echo $_GET["Email"]; ?><br>
            Su usuario es: <?php echo $_GET["Usuario"]; ?><br>
            Su contraseña es: <?php echo $_GET["Contraseña"]; ?><br>
            Su sexo es: <?php echo $_GET["Sexo"]; ?><br>
            Su país es: <?php echo $_GET["paises"]; ?><br>
            La url de su imagen es: <?php echo $_GET["Foto_Carnet"]; ?>
            <button onclick="regreso($_GET['NIF'])">Modificar</button>     
        </div>
    </body>
</html>
