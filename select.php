<?php


$db_server = "localhost";
$db_username = "Maarten";
$db_password = "Snoes2425!";
$db_name = "pa";
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

$sql="select naam, bericht from contact";

$result = mysqli_query($conn,$sql);

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["naam"];
        $field2name = $row["bericht"];


        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 

              </tr>';
    }
    $result->free();
}
