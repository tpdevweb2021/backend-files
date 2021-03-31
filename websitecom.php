<?php

require('./vendor/autoload.php');

$websitecom = [
    "Allan" => [
        "id"            => 1,
        "poste"         => "CEO",
        "salaire"       => 56000,
        "email"         => "ceo@website.com",
        "team"          => "direction",
        "repsonsableID" => null,
        "dateEntree"    => "2018-03-02"
    ],
    "Paulo" => [
        "id"            => 2,
        "poste"         => "CTO",
        "salaire"       => 38000,
        "email"         => "cto@website.com",
        "team"          => "direction",
        "repsonsableID" => 1,
        "dateEntree"    => "2018-03-04"
    ],
    "Cynthia" => [
        "id"            => 4,
        "poste"         => "Commercial",
        "salaire"       => 32000,
        "email"         => "cynthia@website.com",
        "repsonsableID" => 2,
        "dateEntree"    => "2018-04-12"
    ],
    "Judith" => [
        "id"            => 3,
        "poste"         => "Webmarketeuse",
        "salaire"       => 27500,
        "email"         => "judith@website.com",
        "team"          => "webmarketing",
        "repsonsableID" => 2,
        "dateEntree"    => "2018-04-03"
    ],
    "Pedro" => [
        "id"            => 12,
        "poste"         => "Community Manager",
        "salaire"       => 23600,
        "email"         => "pedro@website.com",
        "team"          => "webmarketing",
        "repsonsableID" => 3,
        "dateEntree"    => "2018-09-23"
    ],
    "Chloé" => [
        "id"            => 34,
        "poste"         => "Assistante des ventes",
        "salaire"       => 19800,
        "email"         => "chloe@website.com",
        "team"          => "vente",
        "repsonsableID" => 4,
        "dateEntree"    => "2018-11-09"
    ]
];

// GRACE A DES FONCTIONS :
// 1. Classez en ordre décroissant les arrivées des employés dans la société

function sortStartDateDesc(array $array) :array
{
    $arrayEntriesDate = [];
    foreach($array as $employe => $props):
        $arrayEntriesDate[$employe] = $props['dateEntree'];
    endforeach;
    array_multisort($arrayEntriesDate, SORT_DESC, $array);
    return $array;
}
// dd(sortStartDateDesc($websitecom));

// 2. Calculez la moyenne salariale des personnes faisant partie des équipes de vente et des équipes de webmarketing

function averageSalary(array $array) :float
{
    $arrayAverageSalary = [];
    foreach($array as $employe => $props):
        if($props['team'] == "vente" OR $props['team'] == "webmarketing"):
            $arrayAverageSalary[$employe] = $props['salaire'];
        endif;
    endforeach;
    return round(array_sum($arrayAverageSalary) / count($arrayAverageSalary), 2);
}
// dd(averageSalary($websitecom));

// 3. Afficher toutes les personnes ayant la lettre o dans leur prénom

function lettersInFirstName(array $array, string $letter) :array
{
    foreach($array as $employe => $props):
        if(strpos($employe, $letter)):
            $arrayLetters[] = $employe;
        endif;
    endforeach;
    return $arrayLetters;
}
// dd(lettersInFirstName($websitecom, "o"));

// 4. Combien de jours y'a t'il entre la personne arrivée en premier dans l'entreprise et la plus ancienne (vous ne devez pas spécifier de manière direct Allan et Chloé)

function deltaStartedDates(array $array){
    $employes = sortStartDateDesc($array);
        $datePremierEngage = new DateTime($employes[array_key_first($employes)]['dateEntree']);
        $dateDernierEngage = new DateTime($employes[array_key_last($employes)]['dateEntree']);
    $diff = $datePremierEngage->diff($dateDernierEngage);
    return $diff->format("%a");
}
// dd(deltaStartedDates($websitecom));


// 5. Créer un organigramme simple de la structure de la société Website.com au format :
    // Employé (id) __GRADE 1 
    //     Employé (id) __GRADE 2 (Responsable (id))
    //         Employé (id) __GRADE_3 (Responsable (id))