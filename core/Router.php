<?php
class Router {
    public function route($url) {
        // Split the URL into parts
        $urlArray = explode('/', $url);

        // The first part is the controller
        $controller = ucfirst($urlArray[1]);

        // The second part is the method
        $method = $urlArray[2];

        // The third part is the ID
        $id = $urlArray[3];

        // Include the controller file
        include 'controllers/' . $controller . '.php';

        // Create a new instance of the controller
        $controller = new $controller();

        // Call the method
        $controller->$method($id);
    }
}
