$(document).ready(function() {
	$("a[href='#']").click(function(e) {
		e.preventDefault();
	});
	jQuery.validator.addMethod("alphanumeric", function (value, element) {
		// return this.optional(element) || /^[\w.]+$/i.test(value);
		// return this.optional(element) || /^[a-z0-9\\-]+$/i.test(value);
		return this.optional(element) || /^[\\da-z]{7,15}$/i.test(value);
	}, "Letters, numbers, and underscores only please");
	$.validator.addMethod("pwcheck", function (value, element) {
		return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value)
				&&  /[A-Z]/.test(value)
				&&  /[a-z]/.test(value)
				&&  /[0-9]/.test(value)
				&&  /[@._*]/.test(value)
	}, "Letters, numbers, and underscores only please");
	var validar = $("form#controllerRegister").validate({
		rules: {
			username: { required: true, minlength: 6 },
			email: { required: true, minlength: 4, email: true },
			password: { required: true, minlength: 8, pwcheck: true},
			sexo: { required : true },
			date: { required: true, date: true },
			country: { required: true},
			terminos: { required: true}
		},
		messages: {
			username: { required : "Por favor ingrese su Nombre y Apellido", minlength: "Nombre y Apellido no válido" },
			email: { required: "Introduzca un correo Electrónico", email: "Correo Electrónico Inválido", minlength: "Correo Electrónico Inválido"},
			sexo:{ required : "Seleccione su Sexo"},
			date:{ required : "Introduzca su fecha de Nacimiento"},
			password: { required : "Por favor ingrese una contraseña", minlength: "Mínimo de Caracteres de 8 Digitos", pwcheck : "La contraseña debe tener numero, minuscula, mayuscula y un carácter"},
			terminos: { required: "Acepte nuestros términos y condiciones"}
		}
	});
	$("form#controllerRegister").submit(function(e) {
		e.preventDefault();
		// console.log(validar.errorList[0].message);
		if (validar.errorList.length == 0) {
			urlFile = location.origin +'/app/controller/register.controller.php';
			$.ajax({
				url: urlFile,
				type: 'POST',
				data: {
					operation: 'insert',
					username: $("input[name='username']").val(),
					email: $("input[name='email']").val(),
					pass: $("input[name='password']").val(),
					sexo: $("input[name='sexo']").val(),
					date: $("input[name='date']").val(),
					country: $("select[name='country']").val()
				},
			})
			.done(function(data) {
				switch (data) {
					case 'Usuario registrado con exito':
						alerta({
							mensaje: 'Usuario registrado con exito',
							color: 'green',
							timeOut: 10000
						});
						location.href = location.origin + '/dashboard';
						break;
					case 'Usuario registrado con exito pero no se pudo enviar el email de confirmación':
						alerta({
							mensaje: 'Alerta: Operación exitosa, sin embargo no se envio su codigo de confirmación',
							color : 'orange',
							timeOut: 10000
						});
						location.href = location.origin + '/dashboard';
						break;
					case 'Error ocurrio un error al insertar el usuario':
						alerta({
							mensaje : 'Error: Ha ocurrido un error, por favor vuelva a intentar',
							color : 'red',
							timeOut: 10000
						});
						break;
					case 'el usuario ya existe':
						alerta({
							mensaje : 'Alerta: El usuario ya existe en la base de datos',
							color : 'orange',
							timeOut: 10000
						});
						break;
					default:
						alerta({
							mensaje : 'Error: Ha ocurrido un error en el sistema',
							color: 'red',
							timeOut: 10000
						});
						break;
				}
			})
			.fail(function() {
				alerta({mensaje : 'Error: Ha ocurrido un error en el sistema', color: 'red'});
			})
		}else{
			alerta({
				mensaje: validar.errorList[0].message,
				color: 'red',
				timeOut: 5000
			})
		}

	});
});