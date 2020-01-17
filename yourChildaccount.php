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
				          <?php 
		if(!empty($_SESSION['image'])){    
		echo "<img src='image/".$_SESSION['image']."' style=\"
        width: 150px;
        border-radius: 50%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 150px;
        \">";}
        else echo "<img src=\"image/imageLogin.png\" alt=\"Avatar\" class=\"avatar\"> ";
        ?> 
			</div>
	
		    <div id="background1"></div>

			<div class="container" style="padding-top: 20px;">
				<form class="form-signin">    
				
					<?php
                    if (empty($_SESSION['username']) or $_SESSION['base']!="Child")
                    {
                        
                    echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
                    echo("<center onclick=\"window.location.href = 'Sign-in.html';\"class=\"button\">Login</center>");
                    exit();
                    }
                    if($_SESSION['username'] !== ""){
                        if(empty($_SESSION['image']))
                            echo "<a class=\"button\" onclick=\"window.location.href = 'Newpicture.php';\" type=\"submit\" name=\"upload\">Choose Picture</a>";
                        else echo "<a class=\"button\" onclick=\"window.location.href = 'Newpicture.php';\" type=\"submit\" name=\"upload\">Change Picture</a>";
                        echo '<br>';
                        echo '<br>';
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