<?php
session_start();
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['psw'])) {

    // Validate and sanitize input
    $name = validate($_POST['name']);
    $psw = validate($_POST['psw']);

    if(empty($name)) {
        header("Location: layout.php?error=name is required");
        exit();
    }
    elseif(empty($psw)) {
        header("Location: layout.php?error=psw is required");
        exit();
    }

    // SQL query with corrected spaces
    $sql = "SELECT * FROM user WHERE name = '$name' AND hash = '$psw'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
        // Username and password both match
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['psw'] = $row['hash'];
        $_SESSION['id'] = $row['id'];
        header("Location: courses.html");
        exit();
    }
    else {
        // Incorrect username or password
        header("Location: login.php?error=Incorrect user name or password");
        exit();
    }
}
// Function to validate and sanitize input
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
