<?php

	require "app/model/db.php";
	// $db = new db();

	/**
	 * imprime cualquier consulta en MYSQL mediante una callback
	 */
	class imprimir
	{
		private $db;
		public function __construct(){
			$this->db = new db();
		}
		/*
			imprime una funcion $callback = function($row){
				echo $row['nombreCampo'];
			}
		*/
	    public function table($fetch = null, $sql, $callback, $error = null )
	    {
	    	$sql = mysqli_query($this->db->conectar(), $sql);
	    	switch ($fetch) {
	    		case 'row':
	    			$row = mysqli_fetch_row ($sql);
	    			break;
	    		case 'object':
	    			$row = mysqli_fetch_object ($sql);
	    			break;
	    		case 'array':
	    			$row = mysqli_fetch_array ($sql);
	    			break;
	    		default:
	    			$row = mysqli_fetch_array ($sql);
	    			break;
	    	}
	    	# mysqli_fetch_row
	    	# mysql_fetch_object
	    	# mysqli_fetch_array
	    	if ($row) {
	    		call_user_func( $callback, $row, $sql);
		    } else {
		    	if ($error != null) {
		    		echo $error;
		    	}else{
		    		echo 'Error no se encontro la consulta';
		    	}
		    }
	    }
	    public function arrayDatos(string $query){
	        $consulta = mysqli_query($this->conectar(), $query);
	        if ($rows = mysqli_fetch_object($consulta)) {
	            $var = array();
	            foreach ($rows as $row) {
	              $var[] = $row;
	            }
	          return $var; // si existe
	        }else{
	          return false; // no existe
	        }
	        return true;
	    }
	    public function tranlateHour($hour, $minuto, $secouns = null, $mod = true){
	    	$modalidad = null;
	    	switch ($hour) {
	    		case "13":
	    			$hour = "01";
	    			$modalidad = "PM";
	    			break;
	    		case "14":
	    			$hour = "02";
	    			$modalidad = "PM";
	    			break;
	    		case "15":
	    			$hour = "03";
	    			$modalidad = "PM";
	    			break;
	    		case "16":
	    			$hour = "04";
	    			$modalidad = "PM";
	    			break;
	    		case "17":
	    			$hour = "05";
	    			$modalidad = "PM";
	    			break;
	    		case "18":
	    			$hour = "06";
	    			$modalidad = "PM";
	    			break;
	    		case "19":
	    			$hour = "07";
	    			$modalidad = "PM";
	    			break;
	    		case "20":
	    			$hour = "08";
	    			$modalidad = "PM";
	    			break;
	    		case "21":
	    			$hour = "09";
	    			$modalidad = "PM";
	    			break;
	    		case "22":
	    			$hour = "10";
	    			$modalidad = "PM";
	    			break;
	    		case "23":
	    			$hour = "11";
	    			$modalidad = "PM";
	    			break;
	    		case "24":
	    			$hour = "12";
	    			$modalidad = "PM";
	    			break;
	    		case "00":
	    			$hour = "12";
	    			$modalidad = "PM";
	    			break;
	    		default:
	    			$hour = $hour;
	    			$modalidad = "AM";
	    			break;
	    	}
	    		if ($mod == true) {
	    			$return = "$hour:$minuto $secouns $modalidad";
	    		}else{
	    			$return = "$hour:$minuto $secouns";
	    		}
	    	return $return;
	    }
	}