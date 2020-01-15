<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>All Users</title>
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
    <button onclick="window.location.href = 'yourAdmin.php';" class="button">Return</button>
<h1 style="text-align: center;">Child Users</h1>
<table>
<tr>
<th>Username</th>
<th>Sexe</th>
<th>Email</th>
<th>Age</th>
<th>Country</th>
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
               echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["sex"] . "</td><td>"
            . $repons["email"]. "</td><td>". $repons["age"]. "</td><td>". $repons["Country_IP"]. "</td></tr>";
        }
            ?>
</table>


<h1 style="text-align: center;">Parents Users</h1>
<table>
<tr>
<th>Username</th>
<th>Email</th>
<th>Child1</th>
<th>Child2</th>
<th>Child3</th>
<th>Child4</th>
<th>Child5</th>
<th>Country</th>
<th>Delete</th>
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
            $requete = "SELECT * FROM MyParents";
            $exec_requete = mysqli_query($db,$requete);
            $repons = mysqli_fetch_array($exec_requete);
            while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
               echo "<tr><td>" . $repons["username"]. "</td><td>". $repons["email"] . "</td><td>" . $repons["Child1"] . "</td><td>". $repons["Child2"]. "</td><td>". $repons["Child3"]. "</td><td>".$repons["Child4"]. "</td><td>". $repons["Child5"]. "</td><td>".$repons["Country_IP"]."</td></tr>";
        }
            $conn->close();
            ?>
</table>

</body>
<script>
$(document).on("click", ".delete", function(event)
{
    var sData = "?id=" + $(this).data("id");
    $.ajax({
        url: "pages/delete_script.php",
        type: "POST",
        data: sData,
        success: function(sResult)
        {
            // Process the data you got back from the delete script
            // For example removing the row if successfully deleted:
            if(sResult == "OK")
            {
                $(this).closest("tr").remove();
            }
        },
        statusCode: 
        {
            404: function() 
            {
                alert("page not found");
            }
        }
    });
});</script>
</html>