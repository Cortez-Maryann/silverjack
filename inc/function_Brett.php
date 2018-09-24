
<?php
//   include 'function_Maryann.php';
//   include 'function_Antonio.php';
  include 'function_Brandon.php';
//   include 'function_John.php';
//   include 'test_deck.php';

$deck = new Deck();
$players = array("Maryann", "Antonio", "Brandon", "Brett");

function play() {
    global $deck;
    global $players;
    $totals = array();
    for($i=0; $i<count($players); $i++) {
        echo "<div class='row'>";
        echo "<h4 class='player'>$players[$i]</h4>";
        $hand = getHand();
        $total = array_pop($hand);
        array_push($totals, $total);
        displayHand($hand, $total);
        echo "</div>";
    }
}

function getHand() {
    global $deck;
    $sum = 0;
    $hand = array();
    while($sum <= 35) {
        $card = $deck->drawFromDeck();
        array_push($hand, $card);
        $sum += $card->value;
    }
    array_push($hand, $sum); // Add sum as last element in array
    return $hand;
}

function displayHand($hand, $total) {
    echo "<div class='hand'>";
    for($i=0; $i<count($hand); $i++) {
        echo "<img src=\"../" . $hand[$i]->name . "\"/>";
    }
    echo "</div><div class='total'><h3>$total</h3></div></div>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
            play();
        ?>
    </body>
</html>