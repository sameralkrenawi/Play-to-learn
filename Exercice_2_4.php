<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Partie 2 - Exercice - Question5</title>
    <link rel="stylesheet" href="css/Exercice-1.css">
  </head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
  <body>
    <style type="text/css">
      body {
      background-image:url(image/cinq-super-heros.jpg);
      background-position: center;
      background-repeat:no-repeat;
      }
      </style>

    <audio id="myAudio">
      <source src="audio/i-like-eat-french-fries1578408172mp3" type="audio/mp3">
    </audio>

    <div id="draggable2"><font size="5">Keep</font></div>
    <div id="draggable"><font size="5">Eat</font></div>
    <div id="draggable1"><font size="5">Tricj</div>
    <div id="draggable3"><font size="5">Bit</div>
    <div id="dropper">"i like ________ french fries"</div>

    <a href="Exercice_2_5.php" class="button">Next</a>
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
  