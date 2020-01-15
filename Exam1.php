<?php 
            session_start();
            $dbServername = "localhost";
            $dbUsername = "u815710449_playtolearn";
            $dbPassword = "Sce2019";
            $dbName="u815710449_playtolearn";
            $db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
                or die('could not connect to database');
            $note = 100 - 10*2*$_GET['t'];
            $name=$_SESSION['username'];
            $sql = "UPDATE MyGuests SET note='$note' WHERE username='$name' ";
            if(mysqli_query($db,$sql)){
                header("Refresh: 0; url=/youraccountChild.php");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("❗️Your grade is $note ❗️ ");
            }
?>