<?php
print("exercie 1 </br></br>");

$jour = date('l');
$message = "";


switch ($jour) {
case "monday":
    $message = "aujourd'hui nous somme lundi";
    break;
case "Tuesday":
    $message = "aujourd'hui nous somme mardi";
    break;
case "Wednesday":
    $message = "aujourd'hui nous somme mercredi";
    break;
case "Thursday":
    $message = "aujourd'hui nous somme jeudi";
    break;
case "Friday":
    $message = "aujourd'hui nous somme vendredi";
    break;
case "Saturday":
    $message = "aujourd'hui nous somme samedi";
    break;
case "Sunday":
    $message = "aujourd'hui nous somme dimanche";
    break;
default:
    $message = "jour non valide";
}

echo $message . "<br><br>";

print("</br></br><hr></br></br>");
print("exercie 2 </br></br>");

$note = 18;

switch (true) {
case "$note >= 18":
      $Appréciation = "Excellent (A+)";
      break;
case "$note >= 16":
      $Appréciation = "Très bien (A)";
      break;
case "$note >= 14":
      $Appréciation = "Bien";
      break;
case "$note >= 12":
      $Appréciation = "Assez bien";
      break;
case "$note >= 10":
      $Appréciation = "Passable";
      break;
default:
      $Appréciation = "pas bien";
}
echo "Note: " . $note . "/20 " . $Appréciation . "</br></br>";