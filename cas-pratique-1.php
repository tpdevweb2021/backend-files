<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe de 4eme D</title>
</head>
<body> 
    <h1>Moyennes de la classe de 4ème D</h1>
<?php


require('./vendor/autoload.php');


$notesEleves = [
    "Alvin"     => 13,
    "Diego"     => 6.5,
    "Mathilde"  => 12,
    "Frederico" => 10.5,
    "Hatem"     => 17,
    "Louis"     => 8.5
];

/* 
CONSIGNES 

1. Ajouter au tableau précédent, il n'est pas possible d'en créer un nouveau, les moyennes suivantes :
-> Alain : 12.5
-> Virginie : 14
-> Louison : 11
*/


/*

2. Afficher via une boucle "for" puis une boucle "foreach" la moyenne de chacun des élèves de la classe

3. Calculez la moyenne de la classe en utilisant "impérativement une fonction" avec pour seul paramètre le tableau $notesEleves

4. Retirez Alvin du tableau de notes

5. Ré-effectuez et affichez la nouvelle moyenne de classe en dessous de la moyenne précédente.

6. Colorisons les notes de chacun des élèves en fonction de leur moyenne, toujours dans notre boucle, voici les correspondances :
-> En dessous de 10, afficher la moyenne en rouge
-> Entre 10 et 12, en orange
-> Entre 12.2 et 14.7, en bleu
-> Au dessus de 13.3, en vert
---> La moyenne générale héritera des mêmes réglages

*/
?>

</body>
</html>