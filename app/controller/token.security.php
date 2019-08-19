<?php
	class token
	{
        protected function token_obtenCaracterAleatorio($arreglo) {
            $clave_aleatoria = array_rand($arreglo, 1); //obten clave aleatoria
            return $arreglo[ $clave_aleatoria ];    //devolver item aleatorio
        }
        protected function token_obtenCaracterMd5($car) {
            $md5Car = md5($car.Time()); //Codificar el caracter y el tiempo POSIX (timestamp) en md5
            $arrCar = str_split(strtoupper($md5Car));   //Convertir a array el md5
            $carToken = $this->token_obtenCaracterAleatorio($arrCar);    //obten un item aleatoriamente
            return $carToken;
        }
        public function token_email(){
            $aleatorio = uniqid(40);
            $rand = rand(111111111, 999999999);
            $num = strtoupper($aleatorio);
            return $num."#".$rand;
        }
        public function generate($longitud) {
            //crear alfabeto
            $mayus = "ABCDEFGHIJKMNPQRSTUVWXYZ";
            $mayusculas = str_split($mayus);    //Convertir a array
            //crear array de numeros 0-9
            $numeros = range(0,9);
            //revolver arrays
            shuffle($mayusculas);
            shuffle($numeros);
            //Unir arrays
            $arregloTotal = array_merge($mayusculas,$numeros);
            $newToken = "";
            for($i=0;$i<=$longitud;$i++) {
                $miCar = $this->token_obtenCaracterAleatorio($arregloTotal);
                $newToken .= $this->token_obtenCaracterMd5($miCar);
            }
            return $newToken;
        }
    }