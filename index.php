<?php
require_once 'core/Router.php';
require_once 'core/Auth.php';
require_once 'config/Modules.php';

// Create an instance of the router
$router = new Router();

// Get the URL from the request
$url = $_SERVER['REQUEST_URI'];

// Route the request
$router->route($url);

// Rest of your code...
