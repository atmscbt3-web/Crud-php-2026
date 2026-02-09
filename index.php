<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Contactos</title>
</head>
<body>

<h2>Lista de contactos</h2>

<a href="crear.php">Agregar nuevo</a>

<table border="1" cellpadding="5">
<tr>
    <th>Nombre</th>
    <th>Email</th>
    <th>Acciones</th>
</tr>

<?php
$stmt = $pdo->query("SELECT * FROM contactos");

foreach($stmt as $row){
    echo "<tr>
        <td>{$row['nombre']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a>
            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>
