<form method="get" action="">
    <h1>Rentrez dans l'équipe : </h1>
	<label for="nom">nom:</label>
	<input type="" name="nom">
    <label for="age">age:</label>
	<input type="" name="age">
    <label>Sexe : </label> <input method="get" type="radio" name="sexe" value="homme"> H <input method="get" type="radio" name="sexe" value="femme"> F
	
  <br>
  
	<input type="submit" name="submit" value="Greet me now">
</form>


<?php

if ((isset($_GET['age']))&&(isset($_GET['sexe']))&&(isset($_GET['nom']))){
    $age= $_GET['age'];
    $sexe=$_GET['sexe']; 
    $nom=$_GET['nom'];

    if ($age >=21 && $sexe == 'femme'){
        echo "Félicitations , bienvenue dans l'équipe $nom !";
    } else {
        echo "Désolé, vous ne répondez pas aux critères";
    }

}
