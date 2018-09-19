<?php
    
    class Deck {
        private $cards;
        
        public function Deck() {
            createDeck();
        }
        
        public function createDeck() {
            $cards = array(52);
            $suit = array("clubs", "diamonds", "hearts", "spades");
        
            for ($i = 0; $i < $cards.sizeof(); ++$i) {
                $name = $suit[$i + 1] + '/' + ($i+1)%13;
                $cards[$i] = $name;
            }
        }
        
        public function shuffleDeck() {
            shuffle($cards);
        }
        
        public function drawFromDeck() {
            return array_pop($cards);
        }
    }
    
?>