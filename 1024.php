<?php

$linhas = fgets(STDIN);

do{
    $entrada = fgets(STDIN);

    $aString = str_split($entrada);
    
    $passada1 = '';
    
    foreach($aString as $carctere){
        if(preg_match('/[a-z]/i', $carctere)){
            $novoCaractere = ord($carctere) + 3;
            $novoCaractere = chr($novoCaractere);
            $passada1.= $novoCaractere;
            continue;
        } else {
            $passada1.=$carctere;
        }
    }
    
    $passada2 = strrev($passada1);
    
    $tam = (int) ((strlen($passada2)/2));
    
    $aPassada2 = str_split($passada2);
    
    $passada3 = '';
    
    foreach($aPassada2 as $key=>$carctere){
        if($key > $tam){
            $novoCaractere = ord($carctere) - 1;
            $novoCaractere = chr($novoCaractere);
            $passada3.= $novoCaractere;
            continue;
        } else {
            $passada3.=$carctere;
        }
    }
    
    echo $passada3.PHP_EOL;
    
    --$linhas;

} while ($linhas != 0);
