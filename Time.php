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
         
         
         $gamesPlayed = playedGames();
         echo $gamesPlayed;
         echo "<br>";
         
         $time = elapsedTime();
         echo $time;
         echo "<br>";
         
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