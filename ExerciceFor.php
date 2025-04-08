<?php

print("exercie 1 </br></br>");

for ($i = 0; $i <= 10; $i++) {
    echo $i;
    echo "</br>";
}

print("</br></br>-------------------------------------</br></br>");
print("exercie 2 </br></br>");

$somme = 0;
for ($i = 0; $i <= 100; $i++) {
    $somme = $somme+$i;
}
echo $somme;

print("</br></br>-------------------------------------</br></br>");
print("exercie 3 </br></br>");
 

for ($i = 0; $i <= 10; $i++) {
    echo "2 X $i = " , $i*2 , "<br>";
} 