<?php

function arraySort()
{
    $array = array();

    for ($i = 1; $i <= 20; $i++) {
        $randomNumber = rand(1, 10);
        $array[] = $randomNumber;
    }
    $arrayResult = implode(",", $array);
    echo "Array sorteado = [" . $arrayResult . "] <br>";

    $val = array_count_values($array);

    $new = array();
    foreach ($val as $k => $v) {
        if ($v === 1) $new[] = $k;
    }

    if (count($new) == 1){
        $result = implode(",", $new);
        echo "O uníco número que não se repetem é o " . $result;
    }
    if (count($new) >= 2){
        $result = implode(", ", $new);
        echo "Os números que não se repetem são os " . $result;
    }
}

arraySort();
