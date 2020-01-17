  <?php  
  session_start;
  $dbServername = "localhost";
            $dbUsername = "u815710449_playtolearn";
            $dbPassword = "Sce2019";
            $dbName="u815710449_playtolearn";
            $connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
                    or die('could not connect to database');
    $query = "SELECT username, count(*) as number FROM MyGuests GROUP BY note";
    $result = mysqli_query($connect, $query);
 ?>  
 <!DOCTYPE html>  
 <html> 
 <style>
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
      <head>  
            <button onclick="window.location.href = 'allusers.php';" class="button">Return</button>
           <title>Diagram Child</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ["Element", "Density", { role: "style" } ],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               if ($row['username']==$_SESSION['Child1'] or $row['username']==$_SESSION['Child2'] or $repons['username']==$_SESSION['Child3'] or $repons['username']==$_SESSION['Child4'])
                               echo "['".$row["username"]."', ".$row["note"]."],";
                               
                          }  
                          ?> 
                        
                     ]);
                     
                var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);     
                var options = {  
                       title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" }, 
                     };  
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));  
                chart.draw(view, options);  
           }  
           </script>  
      </head>  
                <div id="columnchart_values" style="width: 900px; height: 300px;"></div> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
         <?php  
  session_start;
  $dbServername = "localhost";
            $dbUsername = "u815710449_playtolearn";
            $dbPassword = "Sce2019";
            $dbName="u815710449_playtolearn";
            $connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
                    or die('could not connect to database');
    $query = "SELECT username, count(*) as number FROM MyGuests GROUP BY note";
    $result = mysqli_query($connect, $query);
 ?>  
      var data = google.visualization.arrayToDataTable([  
                          ["Element", "Density", { role: "style" } ],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               if ($row['username']==$_SESSION['Child1'] or $row['username']==$_SESSION['Child2'] or $repons['username']==$_SESSION['Child3'] or $repons['username']==$_SESSION['Child4'])
                               echo "['".$row["username"]."', ".$row["note"]."],";
                               
                          }  
                          ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
 </html>  