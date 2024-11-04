<?php
include_once "dbconnection.php";
$db_server = "localhost";
$db_username = "Maarten";
$db_password = "Snoes2425!";
$db_name = "pa";

$name=
$post=

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $post = mysqli_real_escape_string($conn, $_POST['post']);


    $query = ("insert into contact (naam, bericht) values ('$name', '$post');");

    if (mysqli_query($conn, $query)) {
        echo "Values have been inserted";
    } else {
        echo "error" . $query . "<br>" . mysqli_error($conn);

    }
}

$query = "SELECT naam, bericht FROM contact";
$result = mysqli_query($conn, $query);

mysqli_close($conn);

//phpinfo();


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>