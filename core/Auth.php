<?php
class Auth {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function register($username, $password) {
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->close();
    }

public function login($username, $password) {
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $user = $result->fetch_assoc();

    if ($user) {
        // User is authenticated, save user data in session
        session_start();
        $_SESSION['user'] = $user;
    }

    return $user;
}
    public function logout() {


    }

    public function check() {
        // Use $this->db to interact with the database
    }

    public function user() {
        // Use $this->db to interact with the database
    }
}
