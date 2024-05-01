<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connect error" . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, phone, subject, message) VALUES('$name', '$email', '$phone', '$subject', '$message')";
    $result = $conn->query($sql);
    if($result){
        echo '<script>alert("Message has been sent Successfully"); window.location.href="index.php";</script>';
    }
    else{
        echo '<script>alert("Something went wrong"); window.location.href="index.php";</script>';
    }
}
