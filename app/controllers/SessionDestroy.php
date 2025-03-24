<?php
    session_destroy();
    header('Location: /student_form/app/views/student_login.php');
    exit();
?>