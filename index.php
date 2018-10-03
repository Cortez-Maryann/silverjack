<?php
  include './inc/function_Antonio.php';
  include './inc/function_Brandon.php';
  include './inc/function_Brett.php';
?>

<!DOCTYPE html>
<html>
    <head>
<<<<<<< HEAD
        <title> </title>
    </head>
    <body>
=======
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>
      <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
      <title>SilverJack</title>
    </head>
    <body>
      <header><h1>SilverJack</h1></header>
>>>>>>> 334b1129e38d1d663af10840cc0989ba6583b2e2
        <?php
          $deck = new Deck();
          $players = array("Maryann", "Antonio", "Brandon", "Brett");
          $totals = array();
          function play() {
            global $deck;
            global $players;
            global $totals;

            for($i=0; $i<count($players); $i++) {
                echo "<div class='row'>";
<<<<<<< HEAD
                echo "<h4 class='player'>$players[$i]</h4>";
=======
                echo "<div class='player-container'>";
                echo "<img src='./img/avatar.jpg' class='player-img' alt='$player[$i]'/>";
                echo "<h4 class='player-title'>$players[$i]</h4></div>";
>>>>>>> 334b1129e38d1d663af10840cc0989ba6583b2e2
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