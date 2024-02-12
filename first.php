<?php
session_start();
include_once('db_conn.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["name"]);
    $password = test_input($_POST["psw"]);

    // Your login validation logic here...
    // Assuming the login is successful
    // Redirect the user to the layout page
    header("Location: layout.php");
    exit();
}
?>
