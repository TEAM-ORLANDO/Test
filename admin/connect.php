<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_article";
$mysqli = new mysqli($servername, $username, $password, $dbname);
$mysqli->set_charset("UTF8");

if ($mysqli->connect_error) {
    die ("Failed to connect (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $text = $_POST['file'];
    $category = $_POST['products'];

    $query = "INSERT INTO new_article (title, text, category) VALUES ('$title', '$text', '$category')";
    if($mysqli->query($query) === TRUE){
        header("Location: ../index/index.php");
    } else {
        echo $mysqli->error;
        echo "Error";
    }
}


