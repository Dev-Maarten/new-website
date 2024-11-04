<?php

$db_server = "localhost";
$db_username = "Maarten";
$db_password = "Snoes2425!";
$db_name = "pa";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    if($conn) {
        echo "you are connected";
    } else {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
} catch(Exception $e) {
    echo "could not connect to database: " . $e->getMessage();
}

