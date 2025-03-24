<?php
$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "students"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = $_POST['email'];
    $input_password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM students WHERE email = ?");
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (md5($input_password) === $user['pass']) {
            header('Location: /student_form/app/views/dashboard.php?first_name='. urlencode(serialize($user['first_name'])));

            session_start();

            
            $_SESSION['first_name'] =  $user['first_name'];
            
            exit;
        } else {
            echo "Invalid password. Please try again.";
            echo '<p><a href="login.php">Go back to login</a></p>';
            exit;
        }
    } else {
        echo "Invalid username. Please try again.";
        echo '<p><a href="login.php">Go back to login</a></p>';
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
