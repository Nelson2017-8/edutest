<?php
    require_once "src\Router\Router.php";
    // $router = new Router\Router('/php-router');
    /*
        --------------------- RUTAS -----------------------------
    */
    $router = new Router();

    # demo Hola mundo
    $router->add('/hola/([a-zA-Z]+)', function ($name) {
        echo sprintf('<h1>Hola %s</h1>', $name);
    });

    # email
    $router->add('/mail/welcome/([a-zA-Z0-9]+)/([a-zA-Z0-9@.-/_!]+)', function ($token, $email) {
        echo sprintf('<h1>Hola %s</h1>', $token);
        echo sprintf('<h1>Hola %s</h1>', $email);
    });
    # test 1
    $router->add('/test', function () {
        require_once 'tests/PHP/point.php';
    });
    $router->add('/email/welcome', function () {
        require_once 'template/html/email/welcome.php';
    });
    # pagina de inicio / inicio de sesion
    $router->add('/', function () {
        $redimend = true;
        require_once 'app/controller/check-logeo.controller.php';
        require_once 'app/view/home/home.php';
    });
    $router->add('/login', function () {
        $redimend = true;
        require_once 'app/controller/check-logeo.controller.php';
        require_once 'app/view/home/home.php';
    });
    $router->add('/register', function () {
        $redimend = true;
        require_once 'app/controller/check-logeo.controller.php';
        require_once 'app/view/register/register.php';
    });
    $router->add('/forgotten', function () {
        $redimend = true;
        require_once 'app/controller/check-logeo.controller.php';
        require_once 'app/view/forgotten/forgotten.php';
    });
    $router->add('/dashboard', function () {
        require_once 'app/controller/check-logeo.controller.php';
        require_once 'app/controller/printMysql.php';
        require_once 'app/view/panel/dashboard.user.php';
    });
    $router->add('/dashboard/test', function () {
        require 'app/controller/admin/check-logeo.controller.php';
        require 'app/controller/printMysql.php';
        require_once 'app/view/panel/dashboard.user.php';
    });
    $router->add('/admin', function () {
        require_once 'app/view/login-admin/login.php';
    });
    $router->add('/help/admin/access', function () {
        require_once 'app/view/help/admin-login.php';
    });
    $router->add('/admin/dashboard', function () {
        require 'app/controller/admin/check-logeo.controller.php';
        require_once 'app/view/panel/dashboard.admin.php';
    });
    $router->add('/admin/dashboard/init/test/', function () {
        require 'app/controller/admin/check-logeo.controller.php';
        require 'app/controller/printMysql.php';
        require_once 'app/view/panel/dashboard.admin.php';
    });

    # pagina de error 404 'No encontrada'
    $router->add('/.*', function () {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        echo "Error 404";
        // include_once 'src/href.php';
        // include_once 'app/view/error404.php';
    });

    $router->route();