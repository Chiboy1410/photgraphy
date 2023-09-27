<?php
// connect to database using mysqli procedural technique
$host = "localhost";
$username = "pediforte";
$password = "pediforteDB2020";
$db_name = "php_auth";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['registration'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];
    $confirm_p = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    // validate form
    if($password !== $confirm_p) {
        header('location: register.php?err=confirm_p');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: register.php?err=email');
    }
    if (strlen($phone) < 11) {
        header('location: register.php?err=phone');
    }
    if ($gender === 'male') {
        $g = 0;
    } else {
        $g = 1;
    }
    
    $sql = "INSERT INTO users (username, password, email, phone, gender)
    VALUES('$name','$password', '$email', '$phone', '$g')";

    try{
        mysqli_query($conn, $sql);
        echo "Reg succcessful!";
    } catch(Exception $e) {
        echo "Error happened: $e";
    }
}