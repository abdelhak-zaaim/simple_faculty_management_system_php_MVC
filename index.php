<?php
require_once 'config/database.php';
require_once 'models/Model.php';
require_once 'controllers/Controller.php';

$modules = require 'config/modules.php';
$curentModule = isset($_GET['module']) ? $_GET['module'] : key($modules);
// Set default module to the first one in the array
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if (array_key_exists($curentModule, $modules)) {
    $controller = new Controller($curentModule);
    if (method_exists($controller, $action)) {
        if ($id) {
            $controller->$action($id);
        } else {
            $controller->$action();
        }
    } else {
        echo "Action not found!";
    }
} else {
    require_once 'views/home.php';
}
?>
