<?php
class BaseModel {
    protected $table;

    public function __construct($table) {
        $this->table = $table;
    }

    public function getAll() {
    }

    public function getById($id) {
    }

    public function save($data) {
    }

    public function delete($id) {
    }

}

