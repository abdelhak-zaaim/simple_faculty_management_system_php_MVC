<?php

class Professeur extends BaseModel
{
    use User;
    protected $table = 'professeur';

    public function __construct($id = null, $fName = null, $lName = null, $email = null, $password = null, $codeP = null, $matiere = null)
    {
        parent::__construct($this->table);
        User::__construct($id, $fName, $lName, $email, $password);
        $this->codeP = $codeP;
        $this->matiere = $matiere;

    }

    /**
     * @return mixed|null
     */
    public function getCodeP()
    {
        return $this->codeP;
    }

    /**
     * @param mixed|null $codeP
     */
    public function setCodeP($codeP)
    {
        $this->codeP = $codeP;
    }

    /**
     * @return mixed|null
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param mixed|null $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }

    public function getProfesseurByMatiere($matiere)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE matiere = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $matiere);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getFiliereByProfesseur($id)
    {
        $query = "SELECT filier.name FROM filier INNER JOIN professeur ON filier.id = professeur.filiere WHERE professeur.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}
