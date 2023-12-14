<!-- Exercice 1 : -->
<!-- Afficher kiwi : -->
<?php
echo $messyArray[0];

//afficher Cerise 
foreach($messyArray as $clé => $valeur){
    if(is_array($valeur) && array_key_exists("Cerise",$valeur)){ // la condition fait qu'on entre dans le if si Cerise existe dans le tableau

        echo $valeur["Cerise"]; // donc ici on affiche Cerise après l'avoir trouvé 
        break; // on sort de la boucle 
    }
}

//supprimer prune

foreach($messyArray as $clé => $valeur){
    if(is_array($valeur) && in_array("Prune",$valeur)){ // la condition fait qu'on entre dans le if si on trouve Prune 

        unset($messyArray[$clé][array_search("Prune",$valeur)]); // ici on supprime prune
    }

    print_r($messyArray); // on affiche donc le tableau sans prune
}


// <!-- exercice 2 : -->

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



// exercie 3

class Calcul {

public function removeDoublon($array){
    return array_unique($array); //ici il supprime tous les doublons
}
}
 $Calcul = new Calcul(); //on créer une instance de la class 
 $nametb = ["Carole", "David", "Alice", "Bobby", "Bob", "David","Carole"]; // on initialise donc le tableau des prénoms avec les doublons
 $nameWithoutDoublon =$Calcul->removeDoublon($nametb); // on appelle la methode removeDoublon pour retirer les doublons

echo (implode(", ", $nameWithoutDoublon)); // affichage du tableau sans doublon

 

?>

