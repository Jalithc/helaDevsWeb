<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "web";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if ($conn) {
    echo "Success";
}
else {
    die("Error". mysqli_connect_error());
}
?>
