<?php
    //guarde em um array 5 idades. Exiba quantas pessoas são maior de idade (18 anos) e quantas são menores.
    $idade = array(20,35,5,74,7);

    $qtmaior = 0;
    $qtmenor = 0;

    foreach($idade as $i){
        if ($i >= 18) {
            $qtmaior++;
          } else {
            $qtmenor++;
          }
    }

    echo "<br/> Total de Maiores de idade: " .$qtmaior;
    echo "<br/> Total de Menores de idade: " .$qtmenor;


?>