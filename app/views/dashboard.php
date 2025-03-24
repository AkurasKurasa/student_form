<?php
    $errors = isset($_GET['first_name']) ? unserialize($_GET['first_name']) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

        html {
            min-height: 100vh;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 3rem;
            min-height: 100vh;
            position: relative;
        }

        form {
            position: absolute;
            margin-bottom: 5rem;
            width: 150px;
            height: 50px;
            bottom: 0;
        }

        button {
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>

    <p>Welcome, 
        
        <?php 
            session_start();
            echo $_SESSION['first_name']; 
        ?> 
    
    </p>

    <form action="../controllers/SessionDestroy.php" method="POST">
        <button class="btn btn-danger" type="submit">Log out</button>
    </form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</html>