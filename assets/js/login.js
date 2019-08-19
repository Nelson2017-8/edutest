$(document).ready(function() {
	$("form.login").submit(function(e) {
		e.preventDefault();
		var url = location.origin + '/app/controller/login.controller.user.php', data = $(this).serialize();
		$.ajax({
			url: url,
			type: 'POST',
			data: data,
		})
		.done(function(data) {
			switch (data) {
				case "exito":
					alerta({
						mensaje : 'Operación Exitosa',
						timeOut : 2000,
						color: 'green',
						callbackOut : function  () {
							location.href = location.origin + "/dashboard";
						}
					})
					break;
				case "el usuario no existe":
					alerta({
						mensaje : 'El usuario no esta registrado en la Base de Datos',
						timeOut : 5000,
						color: 'orange'
					})
					break;
				case "no hay parametros":
					alerta({
						mensaje : 'Error: el servidor no pudo recibir los datos enviados',
						timeOut : 5000,
						color: 'red'
					})
					break;
				default:
					alerta({
						mensaje : 'Ah ocurrido un error',
						color : 'red',
						timeOut : 5000
					})
					break;
			}
		})
		.fail(function() {
			console.log("error");
		})

	});
});