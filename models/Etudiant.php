<?php

class Etudiant extends BaseModel
{
    use User;

    protected $table = 'etudiant';


    public function __construct($id = null, $fName = null, $lName = null, $email = null, $password = null, $codeE = null, $note = null, $filiere)
    {
        parent::__construct($this->table);
        User::__construct($id, $fName, $lName, $email, $password);
        $this->codeE = $codeE;
        $this->note = $note;
        $this->filiere = $filiere;
    }


    /**
     * @return mixed|null
     */
    public function getCodeE()
    {
        return $this->codeE;
    }

    /**
     * @param mixed|null $codeE
     */

    public function setCodeE($codeE)
    {
        $this->codeE = $codeE;
    }

    /**
     * @return mixed|null
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @param mixed|null $fName
     */

    public function setFName($fName)
    {
        $this->fName = $fName;
    }

    /**
     * @return mixed
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * @param mixed $filiere
     */

    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;
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
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * @param mixed|null $lName
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
    }

    /**
     * @return mixed|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed|null $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }


}
