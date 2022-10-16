<?php

function countChar($message){
    $compteur=0;
    $message= str_replace(' ', '', $message);

    foreach(str_split($message) as $tab){
        $compteur++;
    }

    return $compteur;
}

echo countChar('bonjour B '); 
