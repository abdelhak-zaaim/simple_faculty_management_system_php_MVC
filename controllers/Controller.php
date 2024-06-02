<?php

/**
 * This is the base controller class. All other controllers will extend this class.
 * It contains the basic CRUD methods.
 *
 * @property Model $model
 * @function __construct
 * @function index
 * @function show
 * @function create
 * @function edit
 * @function update
 * @function store
 * @function delete
 */
class Controller
{
    protected $model;
    protected $module;

    public function __construct($module)
    {
        $this->module = $module;
        $this->model = new Model($module);
    }

    public function index()
{
    $curentModule = $this->module;
    $curentModuleName = ucfirst($curentModule);
    $modules = require 'config/modules.php';
    $data = $this->model->getAll();
    // Pass the data to the home view
    include 'views/home.php';
}

public function show($id)
{
    $modules = require 'config/modules.php';
    $curentModule = $this->module;
    $data = $this->model->getById($id);
    // Pass the data to the home view
    include 'views/home.php';
}

    public function create()
    {
        $modules = require 'config/modules.php';
        $curentModule = $this->module;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header("Location: index.php?module=" . $this->module);
        } else {
            include 'views/home.php';
        }
    }

    public function edit($id)
    {
        $modules = require 'config/modules.php';
        $curentModule = $this->module;
        $action = 'Edit';
        $item = $this->model->getById($id);
        $data = $this->model->getAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $this->model->update($id, $_POST);
            include 'views/home.php';
        } else {

            include 'views/home.php';
        }
    }

    public function delete($id)
    {
        $modules = require 'config/modules.php';
        $curentModule = $this->module;
        $data = $this->model->getAll();
        $this->model->delete($id);
        include 'views/home.php';
    }

    public function store($data)
    {

        $modules = require 'config/modules.php';
        $curentModule = $this->module;
        $data = $this->model->getAll();
        $this->model->create($data);
        include 'views/home.php';
    }
}




