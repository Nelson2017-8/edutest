<?php
	/**
	 * base de datos principal MYSQL
	 */
	class db
	{
	    private $host;
	    private $pass;
	    private $user;
	    private $bd;
	    public function __construct()
	    {
	        $this->host = "localhost";
	        $this->pass = "";
	        $this->user = 'root';
	        $this->bd = "edutest";
	        $this->conectar();
	    }
	    public function __destruct(){
	    	$this->desconectar();
	    }
	    public function conectar(){
	    	$conexion = mysqli_connect($this->host, $this->user, $this->pass) or die("Error al conectar al host".mysqli_error());
	    	$bd = mysqli_select_db($conexion, $this->bd) or die("Error al conextar a la base de datos");
	    	return $conexion;
	    }
	    public function desconectar(){
	    	if (mysqli_close($this->conectar())) {
	    		// echo "desconectado";
	    	}
	    }
	}