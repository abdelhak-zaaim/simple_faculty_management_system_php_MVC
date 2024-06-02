<?php

class Model
{
    protected $conn;
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $fields = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO " . $this->table . " ($fields) VALUES ($values)";
        $stmt = $this->conn->prepare($query);

        foreach ($data as $key => &$val) {
            $stmt->bindParam(":$key", $val);
        }

        return $stmt->execute();
    }

    public function update($id, $data)
    {
        $setValues = "";
        foreach ($data as $key => $val) {
            $setValues .= "$key = :$key, ";
        }
        $setValues = rtrim($setValues, ", ");
        $query = "UPDATE " . $this->table . " SET $setValues WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);

        foreach ($data as $key => &$val) {
            $stmt->bindParam(":$key", $val);
        }

        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}



