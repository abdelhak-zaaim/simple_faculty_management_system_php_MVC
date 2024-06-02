<?php
require_once '../models/BaseModel.php';
/**
 * This is the base controller class. All other controllers will extend this class.
 * It contains the basic CRUD methods.
 *
 * @property BaseModel $model
 * @function __construct
 * @function index
 * @function show
 * @function create
 * @function edit
 * @function update
 * @function store
 * @function delete
 */
class BaseController
{
    protected $model;
    protected $module;

    public function __construct($module)
    {
        $this->module = $module;
        $this->model = new BaseModel($module);
    }

    public function index()
    {
        $data = $this->model->getAll();
        include 'views/list.php';
    }

    public function show($id)
    {
        $data = $this->model->getById($id);
        include 'views/detail.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header("Location: index.php?module=" . $this->module);
        } else {
            include 'views/form.php';
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header("Location: index.php?module=" . $this->module);
        } else {
            $data = $this->model->getById($id);
            include 'views/form.php';
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: index.php?module=" . $this->module);
    }
}




