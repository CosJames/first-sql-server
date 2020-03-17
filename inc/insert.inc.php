<?php
    include_once 'databaseHelper.inc.php';
    # Call the variable in the form using the $_POST[] method
    # mysqli_real_escape_string is used to protect from SQL Injection
    $username = mysqli_real_escape_string($conn, $_POST['Name']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $password = mysqli_real_escape_string($conn, $_POST['Password']);;
    # Insert Query
    $queryInsert = "INSERT INTO Members(id, username, password, email) VALUES ('0','$username','$password','$email');";
    mysqli_query($conn, $queryInsert);
    # Teleport to the front page
    # If signup is successful it will lead user to the front page
    header("Location: ../index.php?signup=success");
