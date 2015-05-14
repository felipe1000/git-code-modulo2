<?php

$nome="Felipe";

$exibe= function ($x) use ($nome){
   
   echo $x."-".$nome."<br>";
};

$array = [1, 2, 3, 4, 5, 6, 8, 90];

array_walk($array, $exibe);


/*function soma($x,$y){
    echo "Imprimiu!!!<br>";
   return $x+$y;
   echo "Não Mostra Imprimiu!!!";

}

$valor= soma(10, 20);

echo $valor;*/