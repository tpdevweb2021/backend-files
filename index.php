<?php


require('./vendor/autoload.php');



// // IL FAUT CREER 4 VEHICULES AVEC DES PROPRIETES DEFINIES :
// // - MARQUE (string)
// // - MODELE (string)
// // - CYLINDREE (int)
// // - MOTEUR (string)
// // - CV (int)


// $voitures = [
//     [
//         "marque"    => "Alfa Romeo",
//         "modele"    => "Giuletta",
//         "cylindree" => 1700,
//         "moteur"    => "Diesel",
//         "cv"        => 160
//     ],
//     [
//         "marque"    => "Ford",
//         "modele"    => "Transit",
//         "cylindree" => 1450,
//         "moteur"    => "Essence",
//         "cv"        => 110
//     ],
//     [
//         "marque"    => "Peugeot",
//         "modele"    => "Partner",
//         "cylindree" => 1800,
//         "moteur"    => "Diesel",
//         "cv"        => 115
//     ],
//     [
//         "marque"    => "Volkswagen",
//         "modele"    => "Polo",
//         "cylindree" => 1800,
//         "moteur"    => "Essence",
//         "cv"        => 125
//     ]
// ];

// // EFFECTUER UNE BOUCLE QUI AFFICHERA : 
//     // "Le véhicule $MARQUE $MODELE ($CYL cm3) de $CV chevaux est un $MOTEUR"

//     // BOUCLE FOR
//     // for($i = 0; $i < count($voitures); $i++){
//     //     echo "Le véhicule {$voitures[$i]['marque']} {$voitures[$i]['modele']} ({$voitures[$i]['cylindree']} cm3) de {$voitures[$i]['cv']} chevaux est un {$voitures[$i]['moteur']}<br>";
//     // }
//     // echo "<br>";
//     // for($i = 0; $i < count($voitures); $i++){
//     //     echo "Le véhicule " . $voitures[$i]['marque'] . " " . $voitures[$i]['modele'] . " (" . $voitures[$i]['cylindree'] . " cm3) de " . $voitures[$i]['cv'] . " chevaux est un " . $voitures[$i]['moteur'] . " <br>";
//     // }

//     // BOUCLE FOREACH
//     foreach($voitures as $voiture){
//         echo "Le véhicule {$voiture['marque']} {$voiture['modele']} ({$voiture['cylindree']} cm3) de {$voiture['cv']} chevaux est un {$voiture['moteur']}<br>";
//     }


// // krumo équivaut à var_dump (mais pas chez vous ! faites donc du var_dump)
// // krumo($voitures);


// $telephones = [
//     "Iphone XR" => 128,
//     "Galaxy S20" => 64,
//     "Huawei P30" => 32
// ];

// $tailleMini = 64;

// foreach($telephones as $telephone => $giga){
//     if($giga >= $tailleMini){
//         echo "$telephone possède $giga Go<br>";
//     }else {
//         echo "$telephone fait moins de $tailleMini Go ($giga Go)<br>";
//     }
// }
// // Avec la boucle foreach, on affiche autant de fois que de telephones la ligne :  $TEL est un téléphone qui existe et qui possède $GIGA de disque dur


// $meubles = [
//     "buffet",
//     "canapé",
//     "fauteuil"
// ];
// // Avec la boucle for, on affiche autant de fois due demeubles dans le tableau la ligne  : $MEUBLE est un meuble de la maison


// $computers = [
//     [
//         "marque"    => "HP",
//         "coeurs"    => 4,
//         "RAM"       => 16,
//         "disqueDur" => 500
//     ],
//     [
//         "marque"    => "Acer",
//         "coeurs"    => 8,
//         "RAM"       => 32,
//         "disqueDur" => 1000
//     ],
//     [
//         "marque"    => "Apple",
//         "coeurs"    => 4,
//         "RAM"       => 8,
//         "disqueDur" => 256
//     ]
// ];

// // FOR POUR AFFICHER LA $MARQUE DU PC AINSI QUE SA $RAM
// for($i = 0 ; $i < count($computers) ; $i++){
//     echo "La marque {$computers[$i]['marque']} possède {$computers[$i]['RAM']} de RAM<br>";
// }

// $depts = [
//     0 => "10000",
//     1 => "10100",
//     2 => "10200",
//     3 => "10300",
//     4 => "10400",
// ];

// $i=0;
// foreach($depts as $dept){
//     unset($depts[$i]);
//     $depts[$dept] = ["departement" => "Aube"];
//     $i++;
//     // 1ERE BOUCLE -> $tableau["10000"] => "test"
//     // 2ERE BOUCLE -> $tableau["10100"] => "test"
//     // 3ERE BOUCLE -> $tableau["10200"] => "test"
// }
// krumo($depts);



// SORTIE
// $depts = [
//     "10000" => ["departement" => "Aube"],
//     "10200" => ["departement" => "Aube"],
//     "10100" => ["departement" => "Aube"],
//     "10400" => ["departement" => "Aube"],
//     "10500" => ["departement" => "Aube"]
// ];
// var_dump($depts);


// Ecrivez une boucle en PHP avec la méthode la plus adaptée allant du chiffre 23 au chiffre 87, et mentionnez la phrase « nouvelle dizaine » après chaque dizaine (30, 40, 50 …) affichée.

// for($i = 23 ; $i <= 900 ; $i++ ){
//     echo $i;
//     if($i % 10 === 0){
//         echo " -> Nouvelle dizaine";
//     }
//     echo "<br>";
// }


// Affichez les éléments pairs d’une boucle allant de 7 à 28 en tant que $i. Puis, séparé par une virgule, affichez le résultat de la multiplication de l’élément affiché ($i) par la moitié de son triple.

// for($i = 7 ; $i <= 28 ; $i++){
//     if($i % 2 === 0){
//         echo $i . ", " . $i * ($i * 3 / 2) ."<br>";
//         // 8 * (8 x 1,5)
//     }
// }


// LES FONCTIONS
// $var = [12.56, "value", ["name" => "Doe"]];
// foreach($var as $uniqvar){
//     echo gettype($uniqvar);
// }



// function applyCoeff(float $acNombre, float $acCoeff):int|float
// {
//     return $acNombre * $acCoeff;
// }

// echo applyCoeff(56, 1.5);

// function addInfinite(...$values){
//     $sum = 0;
//     foreach($values as $value){
//         if(is_int($value)) $sum += $value;
//     };
//     return $sum;
// }

// echo addInfinite(1, "de", 2, 4, "il", 4, 3, 6, "E");


