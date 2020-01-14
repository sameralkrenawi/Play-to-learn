
<!DOCTYPE html>
<html>
	<head>     
    	<title> Login to play to read !</title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="css/Sign-in.css">
	</head>

	<body> 
	<div class='login-form'>
		<form method="post" action="Sign-in.html">
			<div class="imgcontainer">
				<img src="image/imageLogin.png" alt="Avatar" class="avatar"> 
			</div>

			<div id="background1"></div>

			<div class="container">
				<form class="form-signin"> 
					<?php
                    session_start();
                    if (empty($_SESSION['username']))
                    {
                    
                    echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
                    echo("<button onclick=\"window.location.href = 'Sign-in.html';\"style=\" width: 190px;
    height: 50px;\" >Login</button>");
                    exit();
                    }
                    if($_SESSION['username'] !== ""){
                    echo "Your Username:";
                    echo $_SESSION['username'];
                    echo "Your Email:";
                    echo $_SESSION['email'];
                }
            ?>  
				</form>
			</div>
	</div>
		</form>
	</body>
</html>