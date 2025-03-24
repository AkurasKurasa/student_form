<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }

        form {
            width: 75%;
            margin-bottom: 5rem;
        }
    </style>
</head>
<body>

    <h1>Student Login</h1>

    <form action="../controllers/LoginProcess.php" method="POST" id="loginForm">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./script.js"></script>
</html>