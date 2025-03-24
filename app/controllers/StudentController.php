<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/Student.php';

$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "students"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (count($errors) == 0) {
        echo "" . implode($errors);
        Student::add($first_name, $last_name, $email, md5($password), $contact, $address, $gender, $age);
        header("Location: /student_form/app/views/student_list.php");
        echo json_encode($response);
        exit;
    } 
    
    // else {
    //     header('Location: /student_form/app/views/student_form.php?errors=' . urlencode(serialize($errors)));
    //     exit;
    // }
}

$students = Student::getAll();
require_once __DIR__ . '/../views/student_list.php';
?>
