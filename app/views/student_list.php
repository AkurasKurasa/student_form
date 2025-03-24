<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <h2>Student List</h2>
    <a href="app/views/student_form.php">Add New Student</a>
    <ul>
        <?php foreach ($students as $student): ?>
            <li><?php echo $student['first_name'] . " - " . $student['email']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
