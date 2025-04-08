<?php

print("exercie 1 </br></br>");

$fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];

foreach ($fruits as $i) {
  echo "$i <br>";
}

print("</br></br><hr></br></br>");
print("exercie 2 </br></br>");

$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "ville" => "Paris"
];

foreach ($personne as $i => $j) {
    echo "$i : $j </br>";
};

print("</br></br><hr></br></br>");
print("exercie 3 </br></br>");

$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];

foreach ($etudiants as $soustableau) {
    foreach ($soustableau as $etudiants) {
        echo "$etudiants </br>";
    };
    echo"</br>";
};