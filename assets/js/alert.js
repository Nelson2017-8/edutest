/*
	author :
		Nombre : Nelson Portillo
		Email: nelsonportillo982@gmail.com

	description :
		Script de visualizacion de alertas dinamicas en la web, muestras mensajes, errores y más. Totalmente response

	parametros:
		timeOut : tiempo de visualizacion de la alerta
		color : color de la alerta, por defecto es negro
			-valores aceptados:
				* black / negro
				* green / verde
				* blue / azul
				* yellow / amarillo
				* red / rojo
				* orange / anaranjado
				* amber
				* pink
				* indigo
				* purple
				* teal
				* cyan
				* darken / dark
				* dargen
				* warning
				* success
				* gray / grey
		colorCss: color CSS para el background, por default es null
		mensaje : Mensaje que se mostrara en la alerta
		callback : function de rellamda, se ejecuta cuando se visualiza el mensaje
		callbackOut : function de rellamda, se ejecuta despues de desaparecer el mensaje

	sintaxis :
		alerta({
			timeOut : 1000,
			color: "green",
			mensaje : "Bienvenido a mi programa",
			callback : function () {
				alert("Hola mundo")
			},
			callbackOut : function () {
				alert ("Adios mundo");
			}
		});
*/
function alerta(option = {timeOut : 5000, color: null, colorCss: null, mensaje : null, callback : null, callbackOut : null }) {
	$(document).ready(function() {
		if(option.colorCss != null){
			var html = '<div id="alerta" class="alerta '+option.color+'" style="background-color: '+option.colorCss+';">'+option.mensaje+'</div>';
		}else{
			var html = '<div id="alerta" class="alerta '+option.color+'">'+option.mensaje+'</div>';
		}
		$("body").append(html);
		if (option.callback != null) {option.callback();}
		// if(callback != null){ callback(); }
		var intervalo = setTimeout(function () {
			$("div.alerta").fadeOut(400, function() {
				if (option.callbackOut != null) {option.callbackOut();}
				$("div.alerta").remove();
			});
		}, option.timeOut);
	});
}