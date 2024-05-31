<?php
require_once 'BaseModel.php';
/**
 * This is the base controller class. All other controllers will extend this class.
 * It contains the basic CRUD methods.
 *
 * @property BaseModel $model
 * @function __construct
 * @function index
 * @function show
 * @function create
 * @function store
 * @function delete
 */
class BaseController {
    protected $model;

    /**
     * This method is used to instantiate the model.
     */
    public function __construct($model) {
        $this->model = $model;
    }

    /**
     * This method is used to display all records.
     */
    public function index() {
        $records = $this->model->getAll();
    }

    /**
     * This method is used to display a single record.
     */
    public function show($id) {
        $record = $this->model->getById($id);
    }

    /**
     * This method is used to display the form for creating a new record.
     */
    public function create() {
    }

    /**
     * This method is used to store a new record in the database.
     */
    public function store($data) {
        $this->model->save($data);
        $this->index();
    }

    /**
     * This method is used to delete a record from the database.
     */
    public function delete($id) {
        $this->model->delete($id);
        $this->index();
    }
}

