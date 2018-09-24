<?php
    
    class Card {
        public $name;
        public $value;
    }
    
    class Deck {
        
        public $deck;
        
        function __construct() {
            $this->createDeck();
        }
        
        function createDeck() {
            $this->deck = array();
            $suit = array("clubs", "diamonds", "hearts", "spades");
        
            for ($i = 0; $i < 52; $i++) {
                $card = new Card();
                $card->name = 'img/'.$suit[$i/13].'/'.($i%13+1).'.png';
                $card->point = ($i%13+1);
                $this->deck[$i] = $card;
            }
        }
        
        function printDeck() {
            foreach ($this->deck as $card) {
                echo "$card->name  $card->point<br />";
            }
        }
        
        function shuffleDeck() {
            shuffle($this->deck);
        }
        
        function drawFromDeck() {
            return array_pop($this->deck);
        }
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
    

    </body>
</html>