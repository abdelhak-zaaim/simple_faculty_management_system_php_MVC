<?php
class Auth {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function register($username, $password,$fName,$lName) {
        // username is the email address

        // Hash the password using password_hash function and PASSWORD_DEFAULT algorithm
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (email, password, l_name,f_name) VALUES (?, ?)";
        $stmt = $this->db->getConnection()->prepare($query);
        // we used bind_param to bind the parameters to the query
        // s means string
        $stmt->bind_param("ssss", $username, $password,$fName,$lName);
        $stmt->execute();
        $stmt->close();
    }

public function login($username, $password) {
    // Check if the user exists in the database
    // Use prepared statements to avoid SQL injection
    // hash the password using password_hash function and PASSWORD_DEFAULT algorithm
    $password = password_hash($password, PASSWORD_DEFAULT);
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
        // Destroy the session
        session_start();
        session_destroy();
    }

    public function check() {
        // Check if the user is authenticated
        session_start();
        return isset($_SESSION['user']);
    }

    public function user() {
        // Get the authenticated user data
        session_start();
        return $_SESSION['user'];
    }
}
