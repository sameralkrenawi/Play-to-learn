
<!DOCTYPE html>
<html>
    <style>button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
    width: 140px;
    height: 128px;
	font-size: 15px;
    font-weight: bold;
  }
  </style>
	<head>     
    	<title> Admin Page</title>
        <meta charset="utf-8">
	</head>
	<body> 
	<div class="imgcontainer">
		<img src="image/imageLogin.png" alt="Avatar" class="avatar" style="width:250px; border-radius: 50%;   display: block;
        margin-left: auto;
        margin-right: auto;">
	</div> 
			<?php
            session_start();
            $dbServername = "localhost";
            $dbUsername = "u815710449_playtolearn";
            $dbPassword = "Sce2019";
            $dbName="u815710449_playtolearn";
            $db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
                or die('could not connect to database');
            $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
            $requete = "SELECT * FROM Admin";
            $exec_requete = mysqli_query($db,$requete);
            $repons = mysqli_fetch_array($exec_requete);
            while($repons = mysqli_fetch_array($exec_requete)){
                if ($_SESSION['username']!=$repons['username']){
                echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
                echo("<button style=\"margin-left: 540px; width: 190px;height: 50px;\" onclick=\"location.href='Sign-in.html'\">Login</button>");
                exit(); 
                }
            }
            if (empty($_SESSION['username']))
            {
            echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
            echo("<button style=\"margin-left: 540px; width: 190px;
    height: 50px;\" onclick=\"location.href='Sign-in.html'\">Login</button>");
            exit();
            }
            ?>
            <button class="btn btn-lg btn-primary btn-block" type="submit">All Users</button>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login2</button>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login3</button>
	</body>
</html>