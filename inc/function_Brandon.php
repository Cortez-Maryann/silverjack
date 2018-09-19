<?php
    
    class Card {
        public $name;
        public $value;
    }
    
    class Deck {
        public $cards;
        public $size;
        
        function Deck() {
            $cards = array();
            $size = 52;
            $this->createDeck();
        }
        
        function createDeck() {
            $suit = array("clubs", "diamonds", "hearts", "spades");
        
            for ($i = 0; $i < $size; $i++) {
                $card = new Card();
                $card->name = $suit[$i + 1] + '/' + ($i+1)%13;
                $card->point = ($i+1)%13;
                $cards[] = $card;
            }
        }
        
        function printDeck() {
            echo "Why does this work for '$size' <br />";
            for ($i = 0; $i < $size; $i++) {
                echo "And why doesn't this work <br />";
                $card = $cards[$i];
                echo $card->name . "  " . $card->value . "<br />";
            }
        }
        
        function shuffleDeck() {
            shuffle($cards);
        }
        
        function drawFromDeck() {
            return array_pop($cards);
        }
    }
    
    function testDeck() {
        $deck = new Deck;
        $deck->printDeck();
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?=testDeck()?>

    </body>
</html>