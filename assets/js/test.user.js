$(document).ready(function() {
	var file = $("input[name='file']#json").val();
	// console.log(file);
	var url = location.origin + "/" + file;
	$.getJSON(url, function(json, textStatus) {
			// var j = JSON.stringify(json);
		$.each(json, function(i, json) {
			$.each(json.asks, function(j, pregunta) {
				var html = '<div class="form-group"> <label>'+pregunta+'</label> <input type="text" class="form-control" name="answers[]" placeholder="Escriba su Respuesta" required> </div>';
				console.log("indice " + j + ": " + pregunta);
				$("#tmp").append(html);
			});
		});
	});
	// $.getJSON(url,function(clientes){
	// 	$.each(clientes, function(i,cliente){
	// 	var newRow =
	// 	"<tr>"
	// 	+"<td>"+cliente.id+"</td>"
	// 	+"<td>"+cliente.nombre+"</td>"
	// 	+"<td>"+cliente.edad+"</td>"
	// 	+"<td>"+cliente.genero+"</td>"
	// 	+"<td>"+cliente.email+"</td>"
	// 	+"<td>"+cliente.localidad+"</td>"
	// 	+"<td>"+cliente.telefono+"</td>"
	// 	+"</tr>";
	// 	$(newRow).appendTo("#tablajson tbody");
	// 	});
	// });

});