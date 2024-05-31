<?php
class Department extends BaseModel {
    protected $table = 'department';


    public function __construct($id = null, $name = null, $email = null) {
        parent::__construct($this->table);
        $this->id = $id;
        $this->name = $name;

    }

}
