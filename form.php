
<?php

$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
$name = $_GET["username"];
$sex = $_GET["sexe"];
$email = $_GET["email"];
$age = $_GET["age"];
$contry = $_GET["pays"];
$password = password_hash($_GET["password"],PASSWORD_DEFAULT);

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MyGuests (username,email,sex,password,pays,age,Adress_IP)
VALUES ('$name','$email','$sex','$password','$contry','$age','$ip')";
$conn->query($sql);
?>
