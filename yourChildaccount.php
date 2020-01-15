<?php session_start();?>
<!DOCTYPE html>
<html>
    <style>
        .button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 15px;
    font-weight: bold;
}
    </style>
	<head>     
    	<title> Your account </title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="css/Sign-in.css">
	</head>

	<body> 
	<div class='login-form'>
		<form>
			<div class="imgcontainer">
				<img src="image/imageLogin.png" alt="Avatar" class="avatar"> 
			</div>

			<div id="background1"></div>

			<div class="container">
				<form class="form-signin"> 
					<?php
                    if (empty($_SESSION['username']) or $_SESSION['base']!="Child")
                    {
                    echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
                    echo("<center onclick=\"window.location.href = 'Sign-in.html';\"class=\"button\">Login</center>");
                    exit();
                    }
                    if($_SESSION['username'] !== ""){
                    echo '<a style="text-decoration:underline;" >Your Username: </a> <br>';
                    echo $_SESSION['username'].'<br>';
                       echo '<a style="text-decoration:underline;" >Your Email: </a> <br>';
                    echo $_SESSION['email'].'<br>';
                       echo '<a style="text-decoration:underline;" >Your last Connection: </a> <br>';
                    echo $_SESSION['last_connection'];
                }
            ?>  
				</form>
			</div>
			<button onclick="window.location.href = 'youraccountChild.php';" class="button">Return</button>
	</div>
	
		</form>
	</body>
</html>