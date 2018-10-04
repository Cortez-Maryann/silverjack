<?php
    global $totals;
    global $players;
    global $moreThanOneWinner;
    
    function displayWinner(){
        global $totals;
        global $players;
        $highestScore=0;
        $everyPlayerScoreAdded = 0;
        //this will get the highest score
        foreach ($totals as $playerScore) {
            if($highestScore<$playerScore &&$playerScore <=42){
                $highestScore=$playerScore;
            }
            $everyPlayerScoreAdded+=$playerScore;
        }
        // echo "highest score :". $highestScore;
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        
        //next we have to check if there are multiple winners. If there are, all winners will 
        // be added to $tiedWinners
        // $winnersNames = array();
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
        
        // $countr = 0;
        // foreach ($totals as $key => $value) {
        //     foreach ($tiedWinners as $key2 => $value2) {
        //         if ($key!=$key2){
        //             $countr++;
        //             $winnersFinalScore+=$value;
        //         }
        //     }
        // }
        
        if(count($tiedWinners)>1){
            $moreThanOneWinner=true;
        }
        // echo "amount of winners: ".count($tiedWinners);
        // echo "<br>";

        // display winners(if there are more than one)
        // echo "all scores added: ".$everyPlayerScoreAdded;
        // echo "<br>";
        foreach ($tiedWinners as $key=>$value) {
            // echo "hello";
            echo $key. " has the score of ". ($everyPlayerScoreAdded-(count($tiedWinners)*$highestScore));
            echo "<br>";
        }
    }

?>
