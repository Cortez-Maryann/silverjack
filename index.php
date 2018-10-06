<<<<<<< HEAD
<!DOCTYPE html>

<?php
    include 'inc/function_John.php';
?>

<html>
    <body>
        <style>
            @import url("css/styles.css");
        </style>
        
        <div id="pageTitle">
              <h1>FF1 SILVER JACK</h1>  
        </div>
        
        <br><br>
        <?php
            displayPlayers();
         ?>  
        </div>
=======
<?php
  include './inc/function_Antonio.php';
  include './inc/function_Maryann.php';
  include './inc/function_Brandon.php';
  include './inc/function_Brett.php';
?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>
      <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
      <title>SilverJack</title>
    </head>
    <body>
      <header><h1>SilverJack</h1></header>
        <?php
          $moreThanOneWinner=false;
          $deck = new Deck();
          $players = array("Maryann", "Antonio", "Brandon", "Brett");
          shuffle($players);
          $totals = array();
          function play() {
            global $deck;
            global $players;
            global $totals;

            for($i=0; $i<count($players); $i++) {
                echo "<div class='row'>";
                echo "<div class='player-container'>";
                echo "<img src='./img/avatar.jpg' class='player-img' alt='$player[$i]'/>";
                echo "<h4 class='player-title'>$players[$i]</h4></div>";
                $hand = getHand();
                $total = array_pop($hand);
                $totals[$players[$i]] = $total;
                displayHand($hand, $total);
                echo "</div>";
            }
            echo "<div class='winner-container'><h2>";
            displayWinner();
            echo "</h2></div>";
            displayAverageTime();
          }
          play();
        ?>
>>>>>>> 2c12f20766d58d215fc81b57d7a48b80f997d232
    </body>
</html>