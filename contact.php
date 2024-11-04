<?php
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
        echo "message has been sent!";
    } else {
        echo "error" . $query . "<br>" . mysqli_error($conn);

    }
}
// uit comments halen als het nodig is om $messages te displayen op pagina

//$query = "SELECT naam, bericht FROM contact";
//$result = mysqli_query($conn, $query);

mysqli_close($conn);
?>
<!doctype HTML>
<html lang="nl">
<meta charset="UTF=8">
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
<body>
<link rel="Stylesheet" href="styles.css">

<script src="main.js"></script>
<h1>contact</h1>
<form action="" method="post">
    <div class="name">
    <label for="name">name </label>
    <input type="text" id="name" name="name" required>
    </div>
 <br>
    <div class="message">
    <label for="message">message</label>
    <textarea id="message" name="message" required></textarea>
    </div>
    <div class="button-s"><button>submit</button></div>


</form>
</body>
</html>




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

    </div>
</footer>

