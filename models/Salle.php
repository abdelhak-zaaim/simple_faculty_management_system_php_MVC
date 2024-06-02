<?php

class Salle extends BaseModel
{
    protected $table = 'salle';

    public function __construct($id = null, $name = null, $capacite = null, $sNumber)
    {
        parent::__construct($this->table);
        $this->id = $id;
        $this->name = $name;
        $this->capacite = $capacite;
        $this->sNumber = $sNumber;
    }

    /**
     * @return mixed|null
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * @param mixed|null $capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }

    /**
     * @return mixed|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name)
    {
        if (is_string($name))
        $this->name = $name;
        else
            throw new Exception('Name must be a string');
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
     * @return mixed
     */
    public function getSNumber()
    {
        return $this->sNumber;
    }

    /**
     * @param mixed $sNumber
     */
    public function setSNumber($sNumber)
    {
        $this->sNumber = $sNumber;
    }

    public function getTable()
    {
        return $this->table;
    }
}
