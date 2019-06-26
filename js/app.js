$(document).ready(function(){

$(document).on("click",'#enviar',function(){

	$.ajax({
		url:"backend/recibir_datos.php",
		method:"POST",
		data:$("#formulario").serialize(),
		success:function(respuesta){

			$("#resultados").html(respuesta);
		}

	});

});

});