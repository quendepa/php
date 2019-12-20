<?php
$amount_of_lines = 0;

while ($amount_of_lines < 120)
{
    $amount_of_lines = $amount_of_lines +1 ;
    echo "<br>$amount_of_lines";
}

echo '<br>';

for ($amount_of_lines = 0; $amount_of_lines <= 120; $amount_of_lines ++)
{
    
    
    echo "<br>$amount_of_lines";
   
}

$startup = array ('ETHAN','NICOLAS','EZECKIEL','JOACHIM','ABDOUL','FATIMA','GABRIELE','SIMON','GAIA','IBRAHIM','IMAN','ISAAC','ISMAEL','TRISTAN','JACQUE','JACOB','JAMAL','JAPHET','JEAN','JEAN-MARC');



echo '<br>';

for ($Compteur=0 ; $Compteur < count($startup) ;$Compteur++ )
{

    echo "<br>$startup[$Compteur]";
}

$Pays= array ('Belgique','Italie','Pays-Bas','Autriche','Lituanie','Lettonie','Roumanie','Serbie','Croatie','Allemangne');

for ($Compteur=0 ; $Compteur < count($Pays) ;$Compteur++ )
{
    
    echo "<div class="btn-group">$Pays[$Compteur]</btn>";
}

?>