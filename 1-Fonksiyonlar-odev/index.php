<?php

function ucgen ($satir){
    
    for ($i = 1; $i <= $satir; $i++){

        $j = 1;
        while ($j <= $i){

            echo ("O ");
            $j++;
        }

        echo ("<br>");
    }
}

ucgen(15);


?>