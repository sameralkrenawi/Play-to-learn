
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

$dbServername = "localhost"; //Connect to server
$dbUsername = "u815710449_playtolearn"; // Username Database
$dbPassword = "Sce2019"; // Password Database
$dbName="u815710449_playtolearn"; // Name of table
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName); // Connect to Databse
$name = $_POST["username"]; // Collect username
$sex = $_POST["sexe"]; // Collect Sex
$email = $_POST["email"]; // Collect email
$age = $_POST["age"]; // Collect age
$country = $_POST["country"];// Collect Country
$password=password_hash($_POST["password"],PASSWORD_DEFAULT); // Collect and Crypted password
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
}//Collect Adress IP 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MyGuests (username,email,sex,password,pays,age,Adress_IP)
VALUES ('$name','$email','$sex','$password','$contry','$age','$ip')";
$conn->query($sql);
?>
