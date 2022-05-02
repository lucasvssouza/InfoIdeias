<?php

function sequenciaCrescente($array)
{
    $oldvalue = null;
    $try = 0;
    $removed = 0;

    foreach ($array as $key=>$value) {
        if ($try <= 1) {
            if ($key == 0) {
                echo "(Erros: " . $try . ") " . "Valor atual: " . $value . "<br>" . $oldvalue;
            } elseif ($oldvalue < $value) {
                echo "(Erros: " . $try . ") " . "Valor Anterior: " . $oldvalue . " - Valor Atual: " . $value . "<br>";
            } elseif ($oldvalue > $value) {
                $try++;
                $removed = "Maior";
                echo "(Erros: " . $try . ") " . "Valor Anterior: " . $oldvalue . " - Valor Atual: " . $value . "<br>";
            } elseif ($oldvalue == $value) {
                $try++;
                $removed = "Igual";
                echo "(Erros: " . $try . ") " . "Valor Anterior: " . $oldvalue . " - Valor Atual: " . $value . "<br>";
            }
            

        }
        if ($removed == 0){
            $oldvalue = $value;
        }
        if ($try >= 1 && $removed == "Maior") {
            echo "Maior 1";
            $removed--;
            $oldvalue = null;
        }
        if ($try >= 1 && $removed == "Igual") {
            echo "Igual 2";
            $removed--;
            $oldvalue = $oldvalue;
        }

        if ($try >= 2) {
            $result = "FALSE";
        } else {
            $result = "TRUE";
        }
    }

    $finalArray = implode(", ", $array);
    echo "[" . $finalArray . "] - " . $result . "<br>";
}

sequenciaCrescente($array = array(1, 3, 2, 1));
sequenciaCrescente($array = array(1, 3, 2));
sequenciaCrescente($array = array(1, 2, 1, 2));
sequenciaCrescente($array = array(3, 6, 5, 8, 10, 20, 15));
sequenciaCrescente($array = array(1, 1, 2, 3, 4, 4));
sequenciaCrescente($array = array(1, 4, 10, 4, 2));
sequenciaCrescente($array = array(10, 1, 2, 3, 4, 5));
sequenciaCrescente($array = array(1, 1, 1, 2, 3));
sequenciaCrescente($array = array(0, -2, 5, 6));
sequenciaCrescente($array = array(1, 2, 3, 4, 5, 3, 5, 6));
sequenciaCrescente($array = array(40, 50, 60, 10, 20, 30));
sequenciaCrescente($array = array(1, 1));
sequenciaCrescente($array = array(1, 2, 5, 3, 5));
sequenciaCrescente($array = array(1, 2, 5, 5, 5));
sequenciaCrescente($array = array(10, 1, 2, 3, 4, 5, 6, 1));
sequenciaCrescente($array = array(1, 2, 3, 4, 3, 6));
sequenciaCrescente($array = array(1, 2, 3, 4, 99, 5, 6));
sequenciaCrescente($array = array(123, -17, -5, 1, 2, 3, 12, 43, 45));
sequenciaCrescente($array = array(3, 5, 67, 98, 3));