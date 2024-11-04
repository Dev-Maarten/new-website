<?php
$db_server = "localhost";
$db_username = "Maarten";
$db_password = "Snoes2425!";
$db_name = "pa";

// connectie maken
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

// connectie checken
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$naam = $_POST['naam'];
$bericht = $_POST['bericht'];


$naam = $conn->real_escape_string($naam);
$bericht = $conn->real_escape_string($bericht);

$sql_insert = "INSERT INTO contact (naam, bericht) VALUES ('$naam', '$bericht')";
if (mysqli_query($conn, $sql_insert)) {
$message = "New record created successfully";
} else {
$message = "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
}
}

$sql = "SELECT naam, bericht FROM contact";
$result = mysqli_query($conn, $sql);
?>

<html>
<body>
<link rel="Stylesheet" href="styles.css">
<header>
    <nav class="topnav">
        <img src="logo.png" class="logo">
        <ul>
            <li> <a href="homepage.php">home</a></li>

            <li><a href="over.php">over</a></li>

            <li><a href="school.php">school</a></li>

            <li><a href="werk.php">werk</a></li>

            <li><a href="contact.php">contact</a></li>

            <li><a href="dbconnection.php">blog</a></li>
        </ul>
    </nav>
</header>
    <h1>blog</h1>
<form method="post" action="">
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam" required>
    <br>
    <label for="bericht">Bericht:</label>
    <input type="text" id="bericht" name="bericht" required>
    <br>
    <div class="button-s"><button>submit</button></div>
</form>
    <p><?php echo $bericht; ?></p>
</form>
<!--doorgestreept voor een of andere reden-->
<table border="1" cellspacing="2" cellpadding="2">
        <tr>
            <td> <strong>Naam</strong> </td>
            <td> <strong>Bericht</strong> </td>
        </tr>
        <?php
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $field1name = htmlspecialchars($row["naam"]);
                $field2name = htmlspecialchars($row["bericht"]);
                echo '<tr> 
                          <td>'.$field1name.'</td> 
                          <td>'.$field2name.'</td> 
                      </tr>';
            }
            mysqli_free_result($result);
        }
        ?>
    </table>
</body>
</html>
<?php
mysqli_close($conn);
?>


<footer>
    <ul>
        <li><h3>Email</h3></li>
        <li>Maarten@sitskoorn.tel</li>
    </ul>
    <ul>
        <li><a href="https://www.linkedin.com/in/maarten-sitskoorn-624974336/">linkedin</a></li>
    </ul>
    <ul>
        <li><h3>github</h3> </li>
        <li><a href="https://github.com/Dev-Maarten">https://github.com</a></li>
    </ul>


</footer>
