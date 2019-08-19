<section class="container">
	<div class="mt-5">
		<h2 class="text-primary">Crear un Test</h2>
		<form class="mt-5 test">
			<h6 class="text-muted mb-3"><small>Opciones Básicas:</small></h6>
			<div class="form-group">
			  <label for="nameTest">Nombre del Test</label>
			  <input type="text" class="form-control" id="nameTest" autocomplete="off" name="nameTest" autofocus required aria-describedby="nameTest" placeholder="Escriba un nombre para su Test">
			</div>
			<div class="form-group mb-4">
			  <label>Tipo de correción</label>
			  <select class="form-control" id="select-autocorrecion" required name="autocorrecion">
			  	<option value="on">Auto Correción</option>
			  	<option value="off">Manual</option>
			  </select>
			</div>
		</form>
			<hr>
			<div class="py-3">
				<h4><small class="text-muted small">Escriba sus preguntas:</small></h4> <br>
				<div>
					<div id="asks" data-input="textarea">

						<!-- textarea -->
						<div class="form-group row">
							<label class="col-sm-2 col-form-label"><b>Pregunta <span class="text-danger">(*)</span>:</b></label>
							<div class="col-sm-10">
								<input type="text" name="ask" class="form-control" onkeyup ="askView();" placeholder="Escriba su pregunta">
							</div>
						</div>

						<!-- input -->
						<!-- <div class="form-group row">
							<label class="col-sm-2 col-form-label"><b>Pregunta <span class="text-danger">(*)</span>:</b></label>
							<div class="col-sm-10">
								<input type="text" name="ask" class="form-control" onkeyup ="askView();" placeholder="Escriba su pregunta">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label"><b>Respuesta <span class="text-danger">(opcional)</span>:</b></label>
							<div class="col-sm-10">
								<input type="text" name="answer" class="form-control" placeholder="Escriba la respuesta">
								<span class="small text-muted">Solo para correciones automáticas. <a href="#">Consulte la documentación.</a></span>
							</div>
						</div> -->

						<!-- select -->
						<!-- <div class="form-group row">
							<label class="col-sm-2 col-form-label"><b>Pregunta <span class="text-danger">(*)</span>:</b></label>
							<div class="col-sm-10">
								<input type="text" name="ask" onkeyup ="askView();" class="form-control" placeholder="Escriba su pregunta">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label"><b>Select <span class="text-danger">(*)</span>:</b></label>
							<div class="col-sm-10">
								<div class="addI"> </div>
								<div class="input-group">
									<div class="input-group-prepend">
							    		<button onclick="minusInputSelect();" type="button" class="input-group-text bg-danger text-white"><i class="glyphicon glyphicon-minus"></i></button>
							    	</div>
									<input type="text" id="inputSet" onkeyup="extraer();" name="selectAnswer[]" class="selectArray border-right-0 form-control" placeholder="Escriba su pregunta">
							    	<div class="input-group-prepend">
							    		<button onclick="plusInputSelect();" type="button" class="input-group-text bg-success text-white"><i class="glyphicon glyphicon-plus"></i></button>
							    	</div>
							    </div>
							</div>
						</div> -->
					</div>
					<div class="mt-5 mb-4 view border border-success bg-light rounded p-3">
						<p class="float-right small text-muted">Visualización</p>
						<div class="form-group">
							<label>Vista previa</label>
							<div class="input">
								<textarea class="form-control" placeholder="Escriba su respuesta"></textarea>
								<!-- <input type="text" class="form-control" placeholder="Escriba la respuesta"> -->
							</div>
						</div>
					</div>
				</div>
				<div class="dropdown">
					<a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cambiar </a>
			  		<a class="btn btn-outline-success input-add" href="#"> <i class="glyphicon glyphicon-plus mr-1"></i>Agregar</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" id="input-add-text" href="#">Text</a>
						<a class="dropdown-item" id="input-add-input" href="#">Input</a>
						<a class="dropdown-item" id="input-add-checkbox" href="#">Checkbox</a>
						<a class="dropdown-item" id="input-add-radio" href="#">Radio</a>
						<a class="dropdown-item" id="input-add-select" href="#">Select</a>
					</div>
				</div>
			</div>
			<table id="table" class="table table-hover table-striped table-bordered" summary="Preguntas para el test">
				<tr class="table-success">
					<th><small class="small">N°</small></th>
					<th><small class="small">Pregunta</small></th>
					<th><small class="small">Respuesta</small></th>
					<th><small class="small">Tipo</small></th>
					<th><small class="small">Opciones</small></th>
				</tr>
				<tr>
					<td>1</td>
					<td>¿Qué día Nacio Simón Bolivar?</td>
					<td>24 de Julio de 1873</td>
					<td>Input</td>
				</tr>
			</table>
			<!-- <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved mr-2"></i>Finalizar y Guardar</button> -->

	</div>
</section>