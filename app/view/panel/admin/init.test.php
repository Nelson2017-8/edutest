<section class="container">
	<div class="mt-5">
		<h2 class="text-primary">Iniciar el Test</h2>
		<form class="mt-5 test">
			<h6 class="text-muted mb-3"><small>Configuraciones Básicas:</small></h6>
		  <div class="form-group">
		    <label for="nameTest">Nombre del Test <small class="text-danger"><b>(*)</b></small></label>
		    <select name="nameTest" required class="form-control">
		    	<?php
		    		$print = new imprimir();
		    		$print->table(null, "SELECT name FROM root_test WHERE init = 0", function($row, $sql){
		    			do{
		    			    echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
		    			}
		    			while ( $row = mysqli_fetch_array ($sql) );
		    		});

		    	?>
		    </select>
		  </div>
		  <div class="form-group mb-4">
		    <label>Nombre del Profesor <small class="text-danger"><b>(*)</b></small></label>
		    <input type="text" class="form-control" name="profesor" required placeholder="Nombre del Profesor">
		  </div>
		  <div class="form-group mb-4">
		    <label>Descripción del Test <small class="text-danger"><b>(*)</b></small></label>
		    <textarea class="form-control" name="description" required></textarea>
		   </div>

		   <div class="form-group mb-4">
		    <label>Fecha de Inicio <small class="text-danger"><b>(opcional)</b></small> <a tabindex="0" class="text-muted" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Fecha de Inicio" data-content="Establece el día que se iniciara la prueba."><i class="glyphicon glyphicon-info-sign ml-1"></i></a> </label>
		    <input type="date" name="dateInit" class="form-control">
		   </div>
		   <div class="form-group mb-4">
		    <label>Hora de Inicio <small class="text-danger"><b>(opcional)</b></small><a tabindex="0" class="text-muted" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Hora de Inicio" data-content="Establece la hora del día que se iniciara la prueba."><i class="glyphicon glyphicon-info-sign ml-1"></i></a> </label>
		    <input type="time" name="hourInit" class="form-control">
		   </div>

		   <div class="form-group mb-4">
		    <label>Fecha límite <small class="text-danger"><b>(opcional)</b></small> <a tabindex="0" class="text-muted" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Fecha Límite" data-content="Establece hasta que día estara presente la prueba, luego de transcurrido el limite el sistema cierra el test y procesa el resultado."><i class="glyphicon glyphicon-info-sign ml-1"></i></a> </label>
		    <input type="date" name="dateFinish" class="form-control">
		   </div>
		   <div class="form-group mb-4">
		    <label>Hora límite <small class="text-danger"><b>(opcional)</b></small><a tabindex="0" class="text-muted" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Hora Límite" data-content="Establece hasta que hora del día estara presente la prueba, luego de transcurrido el limite el sistema cierra el test y procesa el resultado."><i class="glyphicon glyphicon-info-sign ml-1"></i></a> </label>
		    <input type="time" name="hourFinish" class="form-control">
		   </div>


		  <div class="form-group mb-4">
		    <label>Limitador de Tiempo <small class="text-danger"><b>(opcional)</b></small><a tabindex="0" class="text-muted" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Limitador de Tiempo" data-content="Es el limite de tiempo que se establece para resolver el test. Si no quiere establecer un limite de tiempo omita este campo"><i class="glyphicon glyphicon-info-sign ml-1"></i></a> </label>
		    <input type="text" class="form-control" name="timeLimite" placeholder="Digite el Limite de Tiempo en minutos">
		  </div>
		  <div class="form-group mb-4">
		    <label>Limite de Personas <small class="text-danger"><b>(opcional)</b></small><a tabindex="0" class="text-muted" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Limitador de Personas" data-content="Limita el número de personas que a realizar el test, ejemplo 50 personas. Si no quiere establecer un limite omita este campo."><i class="glyphicon glyphicon-info-sign ml-1"></i></a> </label>
		    <input type="text" class="form-control" name="peopleLimite" placeholder="Digite el Limite en numeros enteros">
		  </div>
		  <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved mr-2"></i>Iniciar el Test</button>
		</form>
	</div>
</section>