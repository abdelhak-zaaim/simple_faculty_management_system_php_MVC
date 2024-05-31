<?php
require_once 'BaseModel.php';

class BaseController {
    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $records = $this->model->getAll();
    }

    public function show($id) {
        $record = $this->model->getById($id);
    }

    public function create() {
    }

    public function store($data) {
        $this->model->save($data);
        $this->index();
    }

    public function delete($id) {
        $this->model->delete($id);
        $this->index();
    }
}

