<?php

    for ($i = 1; $i < 10+1; $i++){
        if ($i == 5){
            continue;
        }

        echo $i . "<br>";
        
        if ($i == 8){
            break;
        }
    }

?>