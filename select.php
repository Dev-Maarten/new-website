<?php


$db_server = "localhost";
$db_username = "Maarten";
$db_password = "Snoes2425!";
$db_name = "pa";
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

$sql="select naam, bericht from contact";

$result = mysqli_query($conn,$sql);

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Naam</font> </td> 
          <td> <font face="Arial">Bericht</font> </td> 

      </tr>';

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

//$name =$_POST['name'];
//$message =$_POST['message'];
//
//var_dump($name, $message);
