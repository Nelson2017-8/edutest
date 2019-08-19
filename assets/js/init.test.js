$(document).ready(function() {
	$("form.test").submit(function(e) {
		e.preventDefault();
		var url = location.origin + '/app/controller/admin/init.test.controller.php', data = $(this).serialize();
		$.ajax({
			url: url,
			type: 'POST',
			data: data,
		})
		.done(function(data) {
			switch (data) {
				case 'error: es requerido la fecha y hora de inicio':
					alerta({
						mensaje : 'Error: Es requerido la fecha y hora de inicio para continuar',
						color: 'red',
						timeOut : 5000
					})
					break;
				case 'error: es requerido la fecha y hora de finalización':
					alerta({
						mensaje : 'Error: Es requerido la fecha y hora de finalización para continuar',
						color: 'red',
						timeOut : 5000
					})
					break;
				case 'error no hay ningun parametro':
					alerta({
						mensaje : 'Error: el servidor no puedo recibir los parametros enviados',
						color: 'red',
						timeOut : 5000
					})
					break;
				case 'error no se pudo actualizar':
					alerta({
						mensaje : 'Error: no se pudo iniciar el Test',
						color: 'red',
						timeOut : 5000
					})
					break;
				case 'actualizado':
					alerta({
						mensaje : 'Operación Exitosa: El Test se ha iniciado',
						color: 'green',
						timeOut : 5000,
						callbackOut: function () {
							location.href = location.origin + '/admin/dashboard/';
						}
					})
					break;
				default:
					alerta({
						mensaje : 'Ah ocurrido un Error',
						color: 'red',
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