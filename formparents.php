<?php
$dbServername = "localhost"; //Connect to server
$dbUsername = "u815710449_playtolearn"; // Username Database
$dbPassword = "Sce2019"; // Password Database
$dbName="u815710449_playtolearn"; // Name of table
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName); // Connect to Databse
$name = $_POST["username"]; // Collect username
$email = $_POST["email"]; // Collect email
$country = $_POST["country"];// Collect Country
$password=password_hash($_POST["password"],PASSWORD_DEFAULT); // Collect and Crypted password
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}//Collect Adress IP 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$country_ip = $details->country; //Collect Country from Adress IP
$sql = "INSERT INTO MyParents (username,password,email,pays,Adress_IP,Country_IP)
VALUES ('$name','$password','$email','$country','$ip','$country_ip')";//Add Value to Databse

$conn->query($sql);
header('Location:/Sign-in.html');
?>
