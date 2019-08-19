<?php
	if (isset($_GET['nameTest']) && isset($_GET['teacher'])) {
		$nameTest = $_GET['nameTest'];
		$teacher = $_GET['teacher'];
		$alumno = $_SESSION['username'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$sexo = $_SESSION['sexo'];
		$country = $_SESSION['country'];
		$date = $_SESSION['date'];
		function ex($nam)
		{
			if ($nam != null) {
				return $nam;
			}else{
				return false;
			}
		}
		$session = ex(@$_SESSION['session']);
		$asignatura = ex(@$_SESSION['asignatura']);
		$semestre = ex(@$_SESSION['semestre']);
		$profesion = ex(@$_SESSION['profesion']);
		$universidad = ex(@$_SESSION['universidad']);
		$list = ex(@$_SESSION['list']);
		require_once root.'app/model/db.php';
		$db = new db();
		$sql = mysqli_query($db->conectar(), "SELECT * FROM root_test WHERE name='$nameTest' AND profesor = '$teacher' ");
		if ($row = mysqli_fetch_array($sql)) {
			$details = $row['description'];
			$file = $row['fileJson'];
			$timeLimite = intval($row['timeLimite']);
		}
		require_once 'app/controller/printCalculator.php';
		$calculator = new calculator();
		// echo "session: ".$session;
		?>
    <!-- <input type="hidden" id="" name="" value="<?=  $nameTest ?>"> -->
    <!-- <input type="hidden" id="" name="" value="<?=  $teacher ?>"> -->
    <input type="hidden" id="json" name="file" value="<?=  $file ?>">

<!-- <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>

<div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
<div class="col-sm-12 col-12 float-left mt-5">
	<div class="card">
	  <div class="card-body">
	    <h5 class="card-title text-info">
	    	<small><i class="glyphicon glyphicon-blackboard mr-2"></i><b>Examen: </b><?= $nameTest; ?></small>
	    	<?php if ($timeLimite != null): ?>
	    	<small class="float-right"><i class="glyphicon glyphicon-dashboard mr-2"></i>Duración: <?= $calculator->minuteHours($timeLimite, "small"); ?></small>
	    	<?php endif ?>
	    </h5>
	    <small><b>Profesor (a):</b> <?= $teacher; ?></small>
	    <div class="card-text pt-3 px-0">
	    	<div class="col-6 col-md-4 px-0 py-1 small float-left"><b>Estudiante:</b> <?= $alumno; ?><br><b>Sesión:</b> <?= $session; ?></div>
	    	<div class="col-6 col-md-4 px-0 py-1 small float-left"><b>Universidad:</b> <?= strtoupper($universidad); ?><br><b>Materia:</b> <?= $asignatura; ?></div>
	    	<div class="col-6 col-md-4 px-0 py-1 small float-left"><b>Profesión:</b> <?= $profesion; ?><br><b>N° de Lista:</b> <?= $list; ?></div>
	    </div>
	    <p class="card-text"><small class="text-muted">Detalles: <?= $details; ?></small></p>
	    <a href="#" id="start" class="btn btn-primary">Comenzar ahora</a>
	  </div>
	</div>
</div>
<div class="load-test">
	<div class="col-sm-12 col-12 float-left my-5">
		<div class="card">
		  <div class="card-body">
		    <h5 class="card-title text-info">
		    	<b><?= $nameTest; ?></b>
		    </h5>
		    <div class="card-text pt-3 px-0">

<form>
	<div id="tmp"></div>
	<button type="submit" class="btn btn-success px-3"><i class="glyphicon glyphicon-send mr-3"></i>Enviar</button>
</form>

		    </div>
		  </div>
		</div>
	</div>
</div>

		<?php
	}else{
		echo "error 404";
	}
?>