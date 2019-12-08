
<?php

$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
$name = $_GET["username"];
$password = $_GET["password"];
$sex = $_GET["sexe"];
$email = $_GET["email"];
$age = $_GET["age"];
$contry = $_GET["pays"];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (username,email,sex,password,pays,age)
VALUES ('$name','$email','$sex','$password','$contry','$age')";
$conn->query($sql);


//$result = $conn->query($sql);

?>
