<?php
    $errors = isset($_GET['errors']) ? unserialize($_GET['errors']) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/registration.css">
</head>
<body>

    <h2>Student Registration</h2>
    <!-- action="../controllers/StudentController.php" method="POST" -->
        <form action="../controllers/StudentController.php" method="POST" id="registrationForm">

            <div class="row mb-3">
                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name" pattern="[A-Za-z]+" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" pattern="[A-Za-z]+" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>

            <div class="row mb-3">
                <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                </div>
            </div>

            <div class="row mb-3">
                <label for="contact" class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="contact" name="contact">
                </div>
            </div>

            <div class="row mb-3">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="age" name="age">
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address">
                </div>
            </div>

            <div class="row mb-3">
                <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                <input type="date" id="birthday" name="birthday" required/>
                </div>
            </div>

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10" style="margin-left: 15rem;">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
                        <label class="form-check-label" for="gender">
                        Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                        <label class="form-check-label" for="gender">
                        Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="Other">
                        <label class="form-check-label" for="gender">
                        Other
                        </label>
                    </div>
                </div>
            </fieldset>

            <button class="btn btn-primary">Register</button>
        </form>

        <p class="tset"></p>

    <a href="../../index.php">Back to List</a>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./script.js"></script>
</html>
