<?php
require "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    if($nombre && $email){
        $sql = "INSERT INTO contactos(nombre,email) VALUES(?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre,$email]);

        header("Location:index.php");
    }
}
?>

<h2>Nuevo contacto</h2>

<form method="POST">
    Nombre:<br>
    <input name="nombre"><br><br>

    Email:<br>
    <input name="email"><br><br>

    <button>Guardar</button>
</form>

<a href="index.php">Volver</a>
