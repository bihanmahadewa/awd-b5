<?php

    $timeInOneMinutes = time() + 1*60;
    $currentTime = time();

    
    if ($timeInOneMinutes == $currentTime){
        echo ("1 minute is gone");
    }else{
        echo ("no time");
    }
?>

