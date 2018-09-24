<?php
  include './inc/function_Antonio.php';
  include './inc/function_Brandon.php';
  include './inc/function_Brett.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
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
                echo "<h4 class='player'>$players[$i]</h4>";
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