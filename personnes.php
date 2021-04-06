<?php

$persons = [
    "madup" => [
        "prenom" => "Martin", 
        "nom" => "Dupond", 
        "age" => 25, 
        "ville" => "Paris"
    ],
    "jemar" => [
        "prenom" => "Jean", 
        "nom" => "Martin", 
        "age" => 20, 
        "ville" => "Lyon"
    ],
    "toton" => [
        "prenom" => "Tom", 
        "nom" => "Tonge", 
        "age" => 18, 
        "ville" => "Rennes"
    ],
    "ardup" => [
        "prenom" => "Arnaud", 
        "nom" => "Dupond", 
        "age" => 33, 
        "ville" => "Paris"
    ],
    "email" => [
        "prenom"=>"Emilie", 
        "nom"=>"Ailta", 
        "age"=> 46, 
        "ville"=>"Lyon"
    ],
    "daask" => [
        "prenom"=>"Damien", 
        "nom"=>"Askier",
        "age"=> 7,
        "ville"=>"Lyon"
    ]
]; 

// CONSIGNES

// 1.1 Ecrire une fonction permettant d’afficher le tableau dans son ensemble, grâce au tag HTML <table><thead><tr><thead>......</table>. 
// 1.2 Ajouter une première ligne contenant les clés ’prenom’, ’nom’, ’age’ et ’ville’
// 1.3 Ajoutez également le typage de sortie.

function displayTable(array $array)
{
    // A VOUS DE CODER

}

echo displayTable($persons);


// 2.1 Ecrire une fonction permettant de récupérer les informations de la personne dont la valeur est égale à un paramètre donné. 
// 2.2 Ajoutez également le typage de sortie.

function findPersonWhereValue(array $array, string $key, string $comparator, string|int $value)
{
    // A VOUS DE CODER

}

var_dump(findPersonWhereValue($persons, "age", ">=", 33)); // Nous récupérons la ou les personnes ou la clé age est supérieure ou égale à 33
var_dump(findPersonWhereValue($persons, "ville", "==", "Lyon")); // Nous récupérons la ou les personnes ou la clé ville est égale à "Lyon"


// 3.1 Adapter cette page de façon à ce que si un paramètre pseudo est appelé en URL => personnes.php?pseudo=toton, on affiche le tableau de la consigne 1 avec le filtre précisé, soit dans notre exemple d'URL => les valeurs stockées dans la clé "toton" du tableau $persons. Vous pouvez recréer ou non, une ou des fonctions si vous en ressentez le besoin. 
