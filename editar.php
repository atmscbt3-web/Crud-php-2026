<?php
require "config.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM contactos WHERE id=?");
$stmt->execute([$id]);
$contacto = $stmt->fetch();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    $sql = "UPDATE contactos SET nombre=?, email=? WHERE id=?";
    $pdo->prepare($sql)->execute([$nombre,$email,$id]);

    header("Location:index.php");
}
?>

<h2>Editar contacto</h2>

<form method="POST">
    Nombre:<br>
    <input name="nombre" value="<?= $contacto['nombre'] ?>"><br><br>

    Email:<br>
    <input name="email" value="<?= $contacto['email'] ?>"><br><br>

    <button>Actualizar</button>
</form>

<a href="index.php">Volver</a>
