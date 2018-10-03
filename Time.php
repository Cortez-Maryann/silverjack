<?php

    session_start();
    
    function playedGames(){
        
         if(!isset($_SESSION['played'])){
             $_SESSION['played'] = 0;
         }
            $_SESSION['played']++;
    
        return $_SESSION['played'];
    
    }
    
    $start = microtime(true);
    
    function elapsedTime(){
        global $start;
        $elapsedTime = microtime(true) - $start;
        return $elapsedTime;
    }
    
    function displayAverageTime(){
        if(!isset($_SESSION['average'])){
             $_SESSION['average'] = 0;
         }
         
         $time = elapsedTime();
         $gamesPlayed = playedGames();
         
         $_SESSION['average'] += $time;
         echo ($_SESSION['average'] /= $time);
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?= displayAverageTime() ?>

    </body>
</html>