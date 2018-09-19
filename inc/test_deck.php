<?php

class Card {
   public $cardValue;
   public $cardFace;
   public $cardImage;
}

$deck = createDeck();

function createDeck() {
    $deck = array();
    $suits = array("clubs","spades","hearts","diamonds");
    for ($i=0; $i<=3; $i++) {
        for ($j=1; $j<=13; $j++) {
            $card = new Card;
            $card->cardSuit = $suits[$i];
            $card->cardValue = $j;
            $card->cardImage = "../img/".$suits[$i]."/".$j.".png";
            $deck[] = $card;
        }
    }
    shuffle($deck);
    return $deck;
}

function displayDeck() {
    global $deck;
    foreach ($deck as $card) {
        echo "<img src=\"" . $card->cardImage . "\"/>";
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