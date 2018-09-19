<?php
    class Card {
        public $suit;
        public $value;
    }
    $values = range(0,51);
    $suits = array("hearts","spades", "clubs","diamonds");
    $deck = [];
    
    function makeDeck(){
        for($i = 0; $i < 4;$i++){
            for($j = 0; $j<13; $j++) {
                $n = new Card;
                $n->$suit = $suits[$i];
                $n->$value = $i;
                array_push($deck,$n);
                //$deck[] = $n;
            }
        }
        
    }
    
    function display(){
        
        // for($i = 0; $i < 53;$i++){
        //     print_r($deck);
        // }
        //echo "<h1>hello<h2>";
        // for($i = 0; $i < count($deck); $i++){
        //     echo $deck[$i]->$suit;
        //     echo $deck[$i]->$value;
        // }
        
        echo count($deck);
       // echo print_r($deck->$suit);
    }

    // function findWinner(){
    //     $scores["a"]
    // }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>php</title>
    </head>
    
    <body>
        <?= display() ?>
    </body>
</html>