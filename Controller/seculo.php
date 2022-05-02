<?php

    function seculoAno($ano){
        $sec = $ano/100;

        if ($sec <= 1){
            echo "Ano " . $ano . " = Século 1";
        }
		if (!is_float($sec) && $sec > 1){
            echo "Ano " . $ano . " = Século " . $sec;
        }
        if (is_float($sec) && $sec > 1){	
			$sec = $sec +1;
			echo "Ano " . $ano . " = Século " . (int)$sec;
        }
        
    }

seculoAno(1601);