<?php      
 //criação de um vetor (ou lista obs: melhor q o vetor).

    $carro = array("<br/>gol", "celta", "fox", "corola", "palio");
    var_dump($carro);

    echo "<br/>=======================<br/>";

    $carro1[]="hb20";
    $carro1[]="hilux";
    $carro1[]="porsche";
    $carro1[]="ferrari";
    $carro1[]="punto";
    $carro1[]="gol";
    var_dump($carro1);

    
    echo "<br/>=======================<br/>";
    echo " eu tenho um " .$carro1[0]; //impresso um item do vetor

    echo "<br/>=======================<br/>";
    echo " eu tenho um " .$carro[0]; //impresso um item do vetor


        // o que ocorre é o seguinte..fazemos com que o array $car assuma o valor de cada elemento do array maior $carro


    foreach($carro as $car){
        // impresso todo o conteúdo do vetor
        echo $car. "</br>";
    }




?>