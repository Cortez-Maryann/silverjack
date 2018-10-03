<?php
    global $totals;
    global $players;
    // class Card {
    //     public $suit;
    //     public $value;
    // }
    // $values = range(0,51);
    // $suits = array("hearts","spades", "clubs","diamonds");
    // $deck = [];
    
    // function makeDeck(){
    //     for($i = 0; $i < 4;$i++){
    //         for($j = 0; $j<13; $j++) {
    //             $n = new Card;
    //             $n->$suit = $suits[$i];
    //             $n->$value = $i;
    //             array_push($deck,$n);
    //             //$deck[] = $n;
    //         }
    //     }
        
    // }
    
    
    
    function displayWinner(){
        global $totals;
        global $players;
        $highestScore=0;
        //this will get the highest score
        foreach ($totals as $value) {
            if($highestScore<$value){
                $highestScore=$value;
            }
        }

    
        //next we have to check if there are multiple winners. If there are, all winners will 
        // be added to $tiedWinners
        $winnersNames = array();
        $tiedWinners = array();// dictionary of winners and their scores
        
        /////// NOT SURE IF THIS SYNTAX IS 100%  CORRECT
        foreach ($totals as $key=>$value) {
            if($highestScore==$value){
                $tiedWinners[$key]=$value;
            }
        }
        
        //////******** IGNORE **********/////////
        // for($i=0;$i<count($totals);$i++){
        //     if($highestScore==$totals[$players[$i]]){
        //         $tiedWinners[$players[$i]]=$totals[$players[$i]];
        //         $winnersNames[]=$players[$i];
        //     }
        // }
        //*************************************//
        
        // added score of all people who didnt win
        $winnersFinalScore;
        foreach ($totals as $key => $value) {
            foreach ($tiedWinners as $key2 => $value2) {
                if ($key!=$key2){
                    $winnersFinalScore+=$value;
                }
            }
        }
    
        // display winners(if there are more than one)
        foreach ($tiedWinners as $key=>$value) {
            echo $key. " has the score of ". $winnersFinalScore;
        }
    }

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