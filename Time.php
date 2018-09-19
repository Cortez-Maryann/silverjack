<?php


    function playedGames($gamesPlayed){
        global $gamesPlayed;
        
        $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0'; //Sees if the page was refreshed
        
        if($pageWasRefreshed){
            $gamesPlayed++;
        }
        
        echo $gamesPlayed;
    
    }
    
    $start = microtime(true);
    
    function displayElapsedTime(){
        global $start;
        $elapsedTime = microtime(true) - $start;
        echo $elapsedTime;
    }
    
    

    

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?php displayElapsedTime();
            echo "<hr>";
            playedGames(0); ?>

    </body>
</html>