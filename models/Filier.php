<?php

class Filier extends BaseModel
{
    protected $table = 'filier';

    public function __construct($id = null, $name = null, $codeF = null)
    {
        parent::__construct($this->table);
        $this->id = $id;
        $this->name = $name;
        $this->codeF = $codeF;
    }

    /**
     * @return mixed|null
     */
    public function getCodeF()
    {
        return $this->codeF;
    }

    /**
     * @param mixed|null $codeF
     */
    public function setCodeF($codeF)
    {
        $this->codeF = $codeF;
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
