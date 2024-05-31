<?php
class Department extends BaseModel {
    protected $table = 'department';


    public function __construct($id = null, $name = null, $email = null) {
        parent::__construct($this->table);
        $this->id = $id;
        $this->name = $name;

    }

    /**
     * @return mixed|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}
