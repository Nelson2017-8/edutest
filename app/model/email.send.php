<?php

/**
 * capturar html de una pagina
 */
class html
{
    /**
     * summary
     */
    private $contentHTMl;
    public function content($pathFile)
    {
        $this->contentHTMl = file_get_contents($pathFile);
        return $this->contentHTMl;
    }
    public function contentcurl($url)
    {
    	$ch = curl_init();
    	// url.'mail/welcome/token38749873847/nelsonportillo982@gmail/'
    	// curl_setopt(ch, option, value)
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:69.0) Gecko/20100101 Firefox/69.0');
    	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept-Languaje: es-es.en*"));
    	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    	$result = curl_exec($ch);
    	$error = curl_error($ch);
    	curl_close($ch);
    	// print_r($error);
    	return $result;
    }
}
/**
 * envia un email html
 	require html-> mensaje
 */
class email
{
	private $html;
	public function __construct(){
		$this->html = new html();
	}
	public function send($destinatario, $asunto, $fileHTML){
	    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
	    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	    $cabeceras .= 'From: '.$destinatario;
	    $mensaje = $this->html->contentcurl($fileHTML);
	    // print_r($mensaje."\n\n\n");
	    if (mail($destinatario, $asunto, $mensaje, $cabeceras)){
	        return true;
	     }else{
	        return false;
	    }
	}
}