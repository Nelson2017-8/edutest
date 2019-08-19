$(document).ready(function() {
	$(".form-signin").submit(function(e) {
		e.preventDefault();
		var url = location.origin + '/app/controller/admin/controller.login.php';
		var data = $(this).serialize();
		$.ajax({
			url: url,
			type: 'POST',
			data: data,
		})
		.done(function(data) {
			switch (data) {
				case 'usuario logeado':
					alerta({
						mensaje : 'Operación Exitosa',
						timeOut : 2000,
						color : 'green',
						callbackOut: function () {
							location.href = location.origin + '/admin/dashboard';
						}
					})
				break;
				case 'error al recibir los parametros':
					alerta({
						mensaje : 'error al recibir los parametros',
						timeOut : 5000,
						color : 'red'
					})
					break;
				default:
					alerta({
						mensaje : 'Ah ocurrido un error fatal',
						timeOut : 5000,
						color : 'red'
					})
					break;
			}
			// console.log("succs");
		})
		.fail(function() {
			console.log("error");
		})

	});
});