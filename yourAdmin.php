

<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Admin Page</title>
    
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /*statr of AddChild and YourChild buttons style*/
        .btn {
            border: none;
            background-color: inherit;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
        }

        .btn:hover {
            background: #eee;
        }

        .btnAddChild {
            color: dodgerblue;
        }

        .btnYourChild {
            color: dodgerblue;
        }
        .btnyouraccountParents{
            color: dodgerblue;
        }
        buttonn {
            border: dodgerblue;
            background-color: inherit;
            padding: 50px 28px;
            font-size: 24px;
            cursor: pointer;
            display: inline-block;
        }
        buttonn:hover{
            background: #eee;
        }
        .btnAddChild{
            color: dodgerblue;
        }
        .btnYourChild{
            color: dodgerblue;}
    </style>
</head> 
<body>
    <div>
        <center>
            <img src="image/imageLogin.png" class="btn btn-primary" id="btn-y" style="width:250px; border-radius: 50%;   display: block;
        margin-left: auto;
        margin-right: auto;">
        </center>
    </div>
    <center>
        Welcome <?php echo htmlentities(trim($_SESSION['username'])); ?> !<br />
    </center>
    	<?php
            session_start();
            $_SESSION['username'];
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
   <div>
        <img onclick="window.location.href = 'disconnect.php';" src="image/disconnect.png" class="btn btn-primary" id="btn-y" style=" height: 60px;width:60px;padding: 0px ;
        margin:0px 0px 0px 950px" >
    </div>
    <center>
        <buttonn onclick="window.location.href = 'review2.php';" class="btnAddChild">All Reviews</buttonn>
        <buttonn onclick="window.location.href = 'report2.php';" class="btnYourChild">All Report</buttonn>
        <buttonn onclick="window.location.href = 'yourchild.php';" class="btnYourChild">All Review of exercises and lessons</buttonn>
        <buttonn onclick="window.location.href = 'allusers.php';" class="btnyouraccountParents">All Users</buttonn>
    </center>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body> 
</html>