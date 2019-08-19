var num = 1;
var optionSelectHtml = '<div class="form-group row"> <label class="col-sm-2 col-form-label"><b>Pregunta <span class="text-danger">(*)</span>:</b></label> <div class="col-sm-10"> <input type="text" name="ask" onkeyup ="askView();" class="form-control" placeholder="Escriba su pregunta"> </div> </div> <div class="form-group row"> <label class="col-sm-2 col-form-label"><b>Select <span class="text-danger">(*)</span>:</b></label> <div class="col-sm-10"> <div class="addI"> </div> <div class="input-group"> <div class="input-group-prepend"> <button onclick="minusInputSelect();" type="button" class="input-group-text bg-danger text-white"><i class="glyphicon glyphicon-minus"></i></button> </div> <input type="text" id="inputSet" onkeyup="extraer();" name="selectAnswer[]" class="selectArray border-right-0 form-control" placeholder="Escriba su pregunta"> <div class="input-group-prepend"> <button onclick="plusInputSelect();" type="button" class="input-group-text bg-success text-white"><i class="glyphicon glyphicon-plus"></i></button> </div> </div> </div> </div>';

var optionInputHtml = '<div class="form-group row"> <label class="col-sm-2 col-form-label"><b>Pregunta <span class="text-danger">(*)</span>:</b></label> <div class="col-sm-10"> <input type="text" name="ask" class="form-control" onkeyup ="askView();" placeholder="Escriba su pregunta"> </div> </div> <div class="form-group row"> <label class="col-sm-2 col-form-label"><b>Respuesta <span class="text-danger">(opcional)</span>:</b></label> <div class="col-sm-10"> <input type="text" name="answer" class="form-control" placeholder="Escriba la respuesta"> <span class="small text-muted">Solo para correciones automáticas. <a href="#">Consulte la documentación.</a></span> </div> </div>';

	function minusInputSelect() {
		var tmp = $(".addI input").last().val();
		$(".addI input").last().remove();
		$("#inputSet").val(tmp);
		extraer();
	}
	function plusInputSelect() {
		var value = $("#inputSet").val();
		$(".addI").append('<input type="text" name="selectAnswer[]" class="selectArray form-control my-2" placeholder="Escriba su pregunta" value="'+value+'">');
		$("#inputSet").val('');

	}
	function extraer() {
		var array = [$(".selectArray")];
		var ask = $("input[name='ask']").val();
		var type = $('#asks').attr('data-input');
		view (ask, type, array[0]);
	}
	function askView(){
		var ask = $("input[name='ask']").val();
		var type = $('#asks').attr('data-input');
		if (ask != "") {
			$(".view label").html(ask);
			if (type == 'input') {
				$(".view .input").html('<input type="text" class="form-control" placeholder="Escriba la respuesta">');
			}else if(type == 'select'){
				$(".view .input").html('<select class="form-control"><option>Esperando una opción...</option></select>');
			}else if(type == 'textarea'){
				$(".view .input").html('<textarea class="form-control" placeholder="Escriba su respuesta"></textarea>');
			}
		}else{
			$(".view label").html('Vista previa');
		}
	}
	function view (ask, type, arraySelect = null) {
		$(".view label").html(ask);
		if (type == 'input') { $(".view .input").html('<input type="text" class="form-control" placeholder="Escriba su Respuesta">') }
		if (type == 'textarea') { $(".view .input").html('<textarea class="form-control" placeholder="Escriba su Respuesta"></textarea>') }
		if (type == 'select') {
			$(".view .input").html('<select class="form-control" id="i"></select>');
			for (var i = arraySelect.length - 1; i >= 0; i--) {
				$("#i").append('<option value="'+ arraySelect[i].value +'">'+ arraySelect[i].value +'</option>');
			}
		}
	}
	function set(e) {
		var attr = e.getAttribute("data-attr");
		// console.log("hola: " + attr);
		if (e.value == 'delete') {
			console.log('Eliminar el elemento: ' + attr);
		}else if (e.value == 'change') {
			console.log('Cambiar  el elemento: ' + attr);
		}
	}
$(document).ready(function() {
	$(".input-add").click(function(e) {
		e.preventDefault();
		var ask = $("input[name='ask']").val();
		var type = $("#asks").attr('data-input');
		var name = type+num;
		var tools = '<select onchange="set(this);" class="set form-control form-control-sm" data-attr="'+name+'"><option>Opciones</option><option value="delete">Eliminar</option><option value="change">Cambiar</option></select>';
		if (type == 'input') {
			var answer = $("input[name='answer']").val();
			if (ask != "") {
				$("form.test").append('<input type="hidden" name="'+name+'" value="'+ask+'" />');
				if (answer !== "") {
					$("form.test").append('<input type="hidden" name="answer'+type+num+'" value="'+answer+'" />');

				}
				$("#table").append('<tr> <td>'+num+'</td> <td>'+ask+'</td> <td>'+answer+'</td> <td>'+type+'</td> <td>'+ tools +'</td> </tr>');
			}
		}else if (type == 'select') {
			var a = $(".selectArray");
			if (ask != "" && a != "") {
				$("form.test").append('<input type="hidden" name="'+name+'" value="'+ask+'" />');
				var arreglo = "";
				for (var i = a.length - 1; i >= 0; i--) {
					// console.log(a[i].value);
					arreglo += a[i].value + ", ";
					$("form.test").append('<input type="hidden" name="answersSelect'+num+'[]" value="'+a[i].value+'" />');
				}
				$("#table").append('<tr> <td>'+num+'</td> <td>'+ask+'</td> <td>'+arreglo+'</td> <td>'+type+'</td> <td>' + tools +'</td> </tr>');
			}
		}else if(type == 'textarea'){
			if (ask != "") {
				$("form.test").append('<input type="hidden" name="'+name+'" value="'+ask+'" />');
				$("#table").append('<tr> <td>'+num+'</td> <td>'+ask+'</td> <td>No hay repuesta predefinida</td> <td>'+type+'</td> <td>'+tools +'</td> </tr>');
			}
		}
		num++;
	});
	$(".selectArray").focusout(function() {
		extraer();
	});
	$("#input-add-select").click(function () {
		$("#asks").attr('data-input', 'select').html(optionSelectHtml);
	});
	$("#input-add-radio").click(function () {
		$("#asks").attr('data-input', 'radio').html('');
	});
	$("#input-add-checkbox").click(function () {
		$("#asks").attr('data-input', 'checkbox').html('');
	});
	$("#input-add-text").click(function () {
		$("#asks").attr('data-input', 'text').html('');
	});

	$("#input-add-input").click(function () {
		$("#asks").attr('data-input', 'input').html(optionInputHtml);

	});
	$("form.test").submit(function(e) {
		e.preventDefault();
		var url = location.origin + '/app/controller/create.test.controller.php';
		var data = $(this).serialize();
		$.ajax({
			url: url,
			type: 'POST',
			data: data
		})
		.done(function(data) {
			switch (data) {
				case 'Error no se pudo crear el Json db':
					alerta({
						mensaje : 'Error no se pudo crear el archivo necesario',
						color : 'red',
						timeOut : 5000,
						callbackOut: function () {
							// window
							// window.open
						}
					})
					break;
				case 'Error no se pudo actualizar':
					alerta({
						mensaje : 'No se pudo Actualizar el archivo',
						color : 'red',
						timeOut : 5000
					})
					break;
				case 'Actualizado':
					alerta({
						mensaje : 'Archivo Actualizado',
						color : 'green',
						timeOut : 5000,
						callbackOut: function () {
							location.href = location.origin + '/admin/dashboard/init/test/';
						}
					})
					break;
				case 'Se creo en json pero no en mysql':
					alerta({
						mensaje : 'El archivo creado con éxito, sin embargo no se guardo en la base de datos',
						color : 'orange',
						timeOut : 5000
					})
					break;
				case 'Se guardo en Mysql y json':
					alerta({
						mensaje : 'Se ha Guardado en la base de datos',
						color : 'green',
						timeOut : 5000,
						callbackOut: function () {
							location.href = location.origin + '/admin/dashboard/init/test/';
						}
					})
					break;
				case 'error no hay parametros':
					alerta({
						mensaje : 'Error: El servidor no pudo resivir los parametros enviados',
						color : 'red',
						timeOut : 5000,
						callbackOut: function () {
							location.href = location.origin;
						}
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