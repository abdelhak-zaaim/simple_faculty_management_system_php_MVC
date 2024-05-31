<?php

trait User
{
    public function __construct($id = null, $fName = null,$lName = null, $email = null, $password = null)
    {
        parent::__construct($this->table);
        $this->id = $id;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed|null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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

    /**
     * @return mixed|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed|null $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}
