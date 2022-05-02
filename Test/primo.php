<?php

function primos($inicial, $final)
{
    $inicial++;
    $final--;
    $array = array();

    for ($i = $inicial; $i <= $final; $i++) {
        $div = 0;

        for ($j = $i; $j >= 1; $j--) {
            if (($i % $j) == 0) {
                $div++;
            }
        }
        if ($div == 2) {
            $array[] = $i;
            
        }
    }
    $result = implode(",", $array);
    echo "Resposta: Array [" . $result . "]";
}

primos(10, 29);