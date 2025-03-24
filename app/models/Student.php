<?php
require_once __DIR__ . '/../../config/database.php';

class Student {
    public static function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function add($first_name, $last_name, $email, $password, $contact, $address, $gender, $age) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO students (first_name, last_name, email, pass, contact, addr, gender, age) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$first_name, $last_name, $email, $password, $contact, $address, $gender, $age]);
    }
}
?>
