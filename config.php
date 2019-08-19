<?php
    // archivo de configuracion del sistema
    define('url', "https://testprofess.herokuapp.com/");
    define('root', $_SERVER['DOCUMENT_ROOT']);
    define('name', 'EduTest');
    define('online', false);
    define('keyword', "Pagina de Encuesta, Examenes Online, Test");
    define('autor', "nelsonportillo982@gmail.com");
    define('dominio', url);
    define('logo', '<i class="glyphicon glyphicon-apple mr-2"></i>Edutest');
    define('logoIcon', '<i class="glyphicon glyphicon-apple"></i>');
    define('icon', '');
    define('srcImg', url.'assets/img/');
    define('imgProfileDefault', srcImg."profileImg.png");
    define('assets', url.'assets/');
    define('bd', root.'app/model/bd.php');
    define('token', root.'app/model/token.php');

  # Variables

    // Materialize
    define('materializeJs',url.'assets/framework/materialize/materialize.min.js');
    define('materializeIcon', url.'assets/framework/materialize/icon.css');
    define('materializeCss', url.'assets/framework/materialize/materialize.min.css');
    //jquery
    define('jquery', url.'assets/js/jquery.min.js');
    // config materialize
    define('configMaterialize', url.'assets/js/config-materialize.js');

    // Bootstrap-4
    define('bootstrapCss', url.'assets/framework/bootstrap_4/css/bootstrap.min.css');
    define('bootstrapJs', url.'assets/framework/bootstrap_4/js/bootstrap.min.js');
    define('bootstrapFont', url.'assets/framework/bootstrap_4/css/glyphicons.css');
    // degradado
    define('degradado', url.'assets/css/gradiand.css');
