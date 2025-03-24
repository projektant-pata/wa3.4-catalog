<?php

class User_model extends Model {

    public function save_user($name, $password) {
        $sql = "INSERT INTO user (name, password) VALUES(?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, password_hash($password, PASSWORD_DEFAULT)]);
    }

    public function get_user($name) {
        $sql = "SELECT * FROM user WHERE name = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}