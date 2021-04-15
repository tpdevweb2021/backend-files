<?php

$notesEleves = [
    "Alvin"     => 13,
    "Diego"     => 6.5,
    "Mathilde"  => 12,
    "Frederico" => 10.5,
    "Hatem"     => 17,
    "Louis"     => 8.5
];

$notesEleves['Alain'] = 12.5;
$notesEleves['Virginie'] = 14;
$notesEleves['Louison'] = 11;

function retirerEleve(array &$array, string $eleve){
    unset($array[$eleve]);
}
retirerEleve($notesEleves, "Alvin");

$moyenneClasse = moyenneClasse($notesEleves);

function moyenneClasse(array $array){
    $moyenne = array_sum($array) / count($array);
    return round($moyenne, 2);
}

foreach($notesEleves as $prenomEleve => $moyenneEleve){
    if($moyenneEleve < 10){
        $color = 'red';
    }elseif($moyenneEleve < 12){
        $color = 'orange'; 
    }elseif($moyenneEleve < 14){
        $color = 'blue';
    }else{
        $color = 'green';
    }

    echo "Voici la moyenne de $prenomEleve : <span style='color:$color'>$moyenneEleve</span><br>";
}