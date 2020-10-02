<?php
require('app/config/files.php');
$controller = DEFAULT_CONTROLLER;
if(isset($_GET['controller']) && !empty($_GET['controller'])){
        $controller = $_GET['controller'];
}
$controller = CONTROLLERS_FOLDER . $controller . '_controller.php';
if(is_file($controller)){
        require_once($controller);
}else{
        die('El controlador no existe - 404 not found');
}
?>
