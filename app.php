<?php

function countChar($message){
    $compteur=0;

    foreach(str_split($message) as $tab){
        $compteur++;
    }

    return $compteur;
}

echo countChar('bonjour'); 
