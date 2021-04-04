<?php

require('./vendor/autoload.php');

$listFurnitures = [
    "pens"      => 21,
    "pencils"   => 14,
    "books"     => 3,
    "folders"   => 9,
    "bags"      => 1,
    "rubbers"   => 2,
    "rulers"    => 4,
];

/*
CONSIGNES

1. Trouver un moyen de supprimer un produit sur la base de son nom
*/

function deleteKey($array, $key){
    unset($array[$key]);
    krumo($array);
}

deleteKey($listFurnitures, "pencils");

/*
2. Calculer le nombre de produits composant le caddie ($listFurnitures), d'abord avec une boucle, puis ensuite direction la doc PHP et sa fonction "array_sum"
*/
$elements = 0;
foreach($listFurnitures as $listFurniture){
    $elements += $listFurniture;
}
echo $elements . " éléments<br>";

echo $elementsArraySum = array_sum($listFurnitures) . " éléments";

/*
3. Créer une liste non numérotée, grâce à une boucle, affichant la liste des éléments composant le caddie de course ci-dessus
*/
echo "<ul>";
    foreach($listFurnitures as $type => $number){
        echo "<li>" . $type . "</li>";
    }
echo "</ul>";
/*
4. Créer une fonction permettant d'ajouter dans ce caddie 3 unités de type "cases" (trousses) */

$listFurnitures['cases'] = 3;
var_dump($listFurnitures);
