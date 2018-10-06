<?php


     function displayPlayers(){
        
        $players = array(0,1,2,3);
        shuffle($players);
      
        echo "<div id='players' style='width:60px;'>";
           
        for($i=0; $i<4; $i++){
            
            $random = array_pop($players);
            
            switch($random){
                case 0: $symbol = "black";
                           break;
                case 1: $symbol = "master";
                           break;
                case 2: $symbol = "ninja";
                           break;
                case 3: $symbol = "white";
                           break;
            }
            echo "<h2> ".ucfirst($symbol).":  </h2>";
            echo "<img src='img/player_img/$symbol.png' alt='player' title='".ucfirst($symbol)."' style='width:60px; float:left; padding-bottom:10px; padding-left:100px;'  />";
           
        }
         echo"</div>";  
        
    }

    function displayScore($score1, $score2, $score3, $score4){
    
        $players = array("black", "master", "nija". "white");
        
        switch($players)  {
            
        }      
        
        
    }

?>