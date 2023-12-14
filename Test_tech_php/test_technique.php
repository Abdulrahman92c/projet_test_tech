<!-- Exercice 1 : -->
<!-- Afficher kiwi : -->
<?php
echo $messyArray[0];

//afficher Cerise 
foreach($messyArray as $clé => $valeur){
    if(is_array($valeur) && array_key_exists("Cerise",$valeur)){
        echo $valeur["Cerise"];
        break;
    }
}

//supprimer prune

unset($messyArray[3][0]);


<!-- exercice 2 : -->

$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];

function comparaisonMots($a,$b){

    $comparaisonlongueur = strlen($a) - strlen($b); //ici nous comparons la longueur 

    if($comparaisonlongueur == 0){ // ici on trie par ordre alphabetique si la longueur est la même
        return strcmp($a,$b);
    }
    return $comparaisonlongueur;

    usort($random_words,'comparaisonMots'); // ici se passe le tri de $randomwords à travers la fonction $comparaisonmots

    print_r($random_words);
}












?>