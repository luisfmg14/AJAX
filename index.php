<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
</head>
<body>
	<form method="POST" id="formulario">

		<label for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre">

		<label for="correo">Correo</label>
		<input type="text" name="correo" id="correo">

		<label for="telefono">Telefono</label>
		<input type="number" name="telefono" id="telefono">

		<input type="button" name="enviar" id="enviar" class="estilos" value="Enviar">
		
	</form>

	<div id="resultados"></div>

	<script type="text/javascript" src="js/jQuery v3.3.1.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

</body>
</html>