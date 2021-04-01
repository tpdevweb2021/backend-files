<?php

$listFurnitures = [
    "pens"      => 21,
    "pencils"   => 14,
    "books"     => 3,
    "folders"   => 9,
    "bags"      => 1,
    "rubbers"   => 2,
    "rulers"    => 4,
];
// var_dump($listFurnitures);

/*
CONSIGNES

1. Trouver un moyen de supprimer un produit sur la base de son nom
// EXEMPLE : SUPPRIMONS LA CLEF "pencils"
// */
// function deleteKey(array &$array, string $key){
//     // On supprime une clé 
//     unset($array[$key]);
// }
// // On stocke le tableau dupliqué à la place de l'initial
// deleteKey($listFurnitures, "pencils");
// var_dump($listFurnitures);


/*
2. Calculer le nombre de produits composant le caddie ($listFurnitures), d'abord avec une boucle, puis ensuite direction la doc PHP et sa fonction "array_sum"
*/
// echo $counter = array_sum($listFurnitures); 

/*
3. Créer une liste non numérotée, grâce à une boucle, affichant la liste des éléments composant le caddie de course ci-dessus <ul>

<ul>
    <li></li>
    <li></li>
</ul>
*/

// echo "<ul>";
// foreach($listFurnitures as $type => $counter){
//     echo "<li>$type fait partie du caddie.</li>";
// }
// echo "</ul>";

/*
4. Créer une fonction permettant d'ajouter dans ce caddie 3 unités de type "cases" (trousses)
*/
function addProduct(array &$array, string $key, int $value){
    $array[$key] = $value;
}

addProduct($listFurnitures, "cases", 3);
var_dump($listFurnitures);