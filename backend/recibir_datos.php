<?php


$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

echo "<table border='8'>
<tr><td>Nombre</td>
<td>Correo</td>
<td>Telefono</td><tr>
<td>".$nombre."</td>
<td>".$correo."</td>
<td>".$telefono."</td>
</tr>
</tr>
</table>";

?>