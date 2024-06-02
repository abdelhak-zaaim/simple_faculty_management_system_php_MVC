<?php
require_once 'config/database.php';
require_once 'models/BaseModel.php';
require_once 'controllers/BaseController.php';

$modules = require 'config/modules.php';
$module = isset($_GET['module']) ? $_GET['module'] : null;
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($module && array_key_exists($module, $modules)) {
    $controller = new BaseController($module);
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
    echo "Module not found!";
}
?>
