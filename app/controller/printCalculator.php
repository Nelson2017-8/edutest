<?php
	class calculator
	{
		private $result;
	 // CONVERSION DE Segundos
	    // convertidor de año a segundos
	    public function yearSecouns(int $year, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Segundos";
	    				break;
	    			case 'small':
	    				$acr = " s";
	    				break;

	    			default:
	    				$acr = " s";
	    				break;
	    		}
	    		$this->result = ((($year * 365) * 24) * 3600) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = ((($year * 365) * 24) * 3600);
		    	return $this->result;
	    	}
	    }
	    // convertidor de Dia a Minutos
	    public function daySecouns(int $day, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Segundos";
	    				break;
	    			case 'small':
	    				$acr = " s";
	    				break;

	    			default:
	    				$acr = " s";
	    				break;
	    		}
	    		$this->result = (($day * 24) * 3600) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = (($day * 24) * 3600);
		    	return $this->result;
	    	}
	    }
	    // convertidor de horas a segundos
	    public function hoursSecouns(int $secouns, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Segundos";
	    				break;
	    			case 'small':
	    				$acr = " s";
	    				break;

	    			default:
	    				$acr = " s";
	    				break;
	    		}
	    		$this->result = ($secouns * 3600) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = $secouns * 3600;
		    	return $this->result;
	    	}
	    }
	    // convertidor de Minutos a segundos
	    public function minuteSecouns(int $minute, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Segundos";
	    				break;
	    			case 'small':
	    				$acr = " s";
	    				break;

	    			default:
	    				$acr = " s";
	    				break;
	    		}
	    		$this->result = ($minute * 60) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = $minute * 60;
		    	return $this->result;
	    	}
		}
	// CONVERSION DE Minutos
	    // convertidor de año a minutos
	    public function yearMinute(int $year, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Minutos";
	    				break;
	    			case 'small':
	    				$acr = " m";
	    				break;

	    			default:
	    				$acr = " m";
	    				break;
	    		}
	    		$this->result = ((($year * 365) * 24) * 60) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = ((($year * 365) * 24) * 60);
		    	return $this->result;
	    	}
	    }
	    // convertidor de Dia a Minutos
	    public function dayMinute(int $day, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Minutos";
	    				break;
	    			case 'small':
	    				$acr = " m";
	    				break;

	    			default:
	    				$acr = " m";
	    				break;
	    		}
	    		$this->result = (($day * 24) * 60) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = (($day * 24) * 60);
		    	return $this->result;
	    	}
	    }
	    // convertidor de segundo a hora
	    public function secounsMinute(int $secouns, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Hora";
	    				break;
	    			case 'small':
	    				$acr = " h";
	    				break;

	    			default:
	    				$acr = " h";
	    				break;
	    		}
	    		$this->result = ($secouns / 60) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = $secouns / 60;
		    	return $this->result;
	    	}
	    }
	// CONVERSION DE HORAS
	    // convertidor de año a hora
	    public function yearHours(int $year, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Hora";
	    				break;
	    			case 'small':
	    				$acr = " h";
	    				break;

	    			default:
	    				$acr = " h";
	    				break;
	    		}
	    		$this->result = (($year * 365) * 24) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = (($year * 365) * 24);
		    	return $this->result;
	    	}
	    }
	    // convertidor de dia a hora
	    public function dayHours(int $day, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Hora";
	    				break;
	    			case 'small':
	    				$acr = " h";
	    				break;

	    			default:
	    				$acr = " h";
	    				break;
	    		}
	    		$this->result = ($day * 24) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = $day * 24;
		    	return $this->result;
	    	}
	    }
	    // convertidor de minutos a hora
	    public function minuteHours(int $minute, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Hora";
	    				break;
	    			case 'small':
	    				$acr = " h";
	    				break;

	    			default:
	    				$acr = " h";
	    				break;
	    		}
	    		$this->result = ($minute / 60) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = $minute / 60;
		    	return $this->result;
	    	}
	    }
	    // convertidor de segundo a hora
	    public function secounsHours(int $secouns, $acronym = null){
	    	if ($acronym != null) {
	    		switch ($acronym) {
	    			case 'large':
	    				$acr = " Hora";
	    				break;
	    			case 'small':
	    				$acr = " h";
	    				break;

	    			default:
	    				$acr = " h";
	    				break;
	    		}
	    		$this->result = ($secouns / 3600) .$acr;
		    	return $this->result;
	    	}else{
				$this->result = $secouns / 3600;
		    	return $this->result;
	    	}
	    }
	}
?>