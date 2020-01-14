<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Your Children</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.button{
        box-shadow: 3px 3px 0px 0px;
         border: 5px #03f302 outset;
        color:white;
         background-color:#03f302;
         padding: 20px 34px;
         display: block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
}
</style>
</head>
<body>
    <button onclick="window.location.href = 'ParentPage.php';" class="button">Return</button>
<h1 style="text-align: center;">Your Children</h1>
<table>
<tr>
<th>Username</th>
<th>Email</th>
<th>Note</th>
</tr>
            <?php
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
            while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
                if($_SESSION['child1'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"]. "</td></tr>";
                }
                if($_SESSION['child2'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"]. "</td></tr>";
                }
                if($_SESSION['child3'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"]. "</td></tr>";
                }
                if($_SESSION['child4'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"]. "</td></tr>";
                }
                if($_SESSION['child5'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"]. "</td></tr>";
                }
        }
            $conn->close();
            ?>
</table>
</body>
</html>