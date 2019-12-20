    
<?php
$heure = date("H:i");
//Si l’heure est entre 05h00 et 09h00, affichez "Bonjour !".
if ($heure >="05:00" && $heure<="09:00"){
echo "Bonjour !";
}
//Si l’heure est entre 09h01 et 12h00, affiche "Bonne journée !".
 else if ($heure>="09:01" && $heure<="12:00"){
echo "Bonne journée!";
 }
//Si l’heure est entre 12h01 et 16h00, affiche "Bon après-midi !".
 else if ($heure>="12:01" && $heure<="16:00"){
echo "Bon après-midi!";
 }
//Si l’heure est entre 16h01 et 21h00, affiche "Bonsoir !".
 else if ($heure>="16:01" && $heure<="21:00"){
echo "Bonsoir !";
 }
//Si l’heure est entre 21h01 et 04h59, affiche "Bonne nuit !".
 else{
    echo"Bonne nuit !";
 }

?>

