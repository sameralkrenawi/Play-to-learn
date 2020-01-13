<?php 
session_start();
$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
$requete = "SELECT * FROM MyGuests";
$exec_requete = mysqli_query($db,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
echo $temp;
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    if($repons['username']==$username and (password_verify($password,$repons['password'])==1)){
        session_start();
        $_SESSION['username'] = $username;
        echo 'Vous êtes connecté !';
        echo $repons['username'];
        $temp=1;
        header('Location:/home1.php');
        exit();
    }
}
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
$requete = "SELECT * FROM MyParents";
$exec_requete = mysqli_query($db,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    if($repons['username']==$username and (password_verify($password,$repons['password'])==1)){
        session_start();
        $_SESSION['username'] = $username;
        echo 'Vous êtes connecté !';
        echo $repons['username'];
        $temp=1;
        header('Location:/home.php');
        exit();
    }
}
    header('Location:/Sign-in-error.html');
   exit();
?>