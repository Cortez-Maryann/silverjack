<?php
  include './inc/function_Antonio.php';
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
          }
          play();
        ?>
    </body>
</html>