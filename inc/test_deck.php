<?php
include 'function_Brandon.php';

function displayDeck() {
    $deck = new Deck();
    $deck->createDeck();
    $deck->shuffleDeck();
    for ($i = 0; $i < 52; ++$i) {
        $card = $deck->drawFromDeck();
        echo "<img src=../$card->name>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?=displayDeck()?>
    </body>
</html>