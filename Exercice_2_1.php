<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Partie 2 - Exercice - Question2</title>
    <link rel="stylesheet" href="css/Exercice-1.css">
    <style type="text/css">
      body {
      background-image:url(image/superman.png);
      background-color:0;
      background-position:300px;
      background-size:55em;
      background-repeat:no-repeat;
      }
      </style>
  </head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <body>
    <audio id="myAudio">
      <source src="audio/kevin-like-playing-football1578408340.mp3" type="audio/mp3">
    </audio>

    <div id="draggable1" ><font size="5">Spying</font></div>
    <div id="draggable" ><font size="5">Playing</font></div>
    <div id="draggable2" ><font size="5">Stayin</font></div>
    <div id="draggable3" ><font size="5">Watching</font></div>
    <div id="dropper">"Kevin like _________ football"</div>

    <a href="Exercice_2_2.php" class="button">Next</a>
    <a href="Menu_Exercice.php" class="button1">Menu</a>


<script>
    var clickme = document.getElementById('draggable');
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'Good!';
    });

    var clickme = document.getElementById('draggable1');
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'NoGood!';
    });

    var clickme = document.getElementById('draggable2');
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'NoGood!';
    });

    var clickme = document.getElementById('draggable3');
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'NoGood!';
    });
</script> 
  </body>
  
  
  
</html>
<div class="container">
  <button onclick="playAudio()" class="btn">Play Audio</button>
</div>
<script>
  var x = document.getElementById("myAudio"); 
  function playAudio() { x.play(); } 
</script>
</body>
</html>
  