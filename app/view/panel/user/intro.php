<div class="row mt-5 mb-2">
    <div class="col md-12">
<?php
  $print = new imprimir();
  $print->table(null, "SELECT * FROM root_test WHERE init = 1", function($row, $sql){
    do{
      $date = null;
      $profesor = $row['profesor'];
      $test = $row['name'];
      $url = url."dashboard/test/?nameTest=$test&&teacher=$profesor";
      if ($row['dateFinish'] != null || $row['dateFinish'] != "" ) {
        $dat = str_replace("-", "/", substr($row["dateFinish"], 0, 10));
        $hour = imprimir::tranlateHour(substr($row["dateFinish"], 11, 2), substr($row["dateFinish"], 14, 2));
        $date .= "Finaliza: $dat Hora: $hour";
      }else{
        if ($row['dateInit'] != null || $row['dateInit'] != "") {
          $dat = str_replace("-", "/", substr($row["dateInit"], 0, 10));
          $hour = imprimir::tranlateHour(substr($row["dateInit"], 11, 2), substr($row["dateInit"], 14, 2));
          $date .= "Inicia: $dat Hora: $hour";
        }else{
          $dat = str_replace("-", "/", substr($row["dateCreacte"], 0, 10));
          $hour = imprimir::tranlateHour(substr($row["dateCreacte"], 11, 2), substr($row["dateCreacte"], 14, 2));
          $date .= "Fecha: $dat Hora: $hour";
        }
      }
    echo '<div class="float-left col-sm-12 col-lg-6 col-xl-4 col-md-6">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary">Profesor (a): '.$row["profesor"].'</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="'.$url.'">'.$row["name"].'</a>
        </h3>
        <div class="mb-1 text-muted"><small class="small">'.$date.'</small></div>
        <p class="card-text my-3">'.$row["description"].'</p>
        <a href="'.$url.'" class="small"><i class="glyphicon glyphicon-education"></i> Realizar ahora </a>
      </div>
      <i class="glyphicon glyphicon-triangle-bottom mr-3 mt-3"></i>
    </div>
  </div>';
    }while($row = mysqli_fetch_array($sql));
  }, '<div class="px-4">
  <div id="alert-1" class="alert alert-warning">
  <h4>Alerta: No hay disponibilidad <p class="float-right" style="cursor:pointer;" onclick=" document.getElementById(\'alert-1\').classList = \'alert alert-warning animated fadeOutL\' ">x</p> </h4>
  <p>Lo siento mucho, en este momento no disponible ninguna prueba para usted, por favor contracte al profesor o administrador encargado para que habilite el test. Si considera que es un error del sistema por favor <a href="#">notifiquelo aquí.</a> </p>
  </div></div>');
?>
    </div>
</div>