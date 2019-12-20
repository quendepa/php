<form method="get" action="">
  <label>Sexe : </label> <input method="get" type="radio" name="sexe" value="mister"> H <input method="get" type="radio" name="sexe" value="Mrs"> F
  <input type="submit" name="submit" value="Greet me now">
</form>

<?php
$hello = "hello";
if ((isset($_GET['sexe']))){
$sexe = $_GET['sexe'];
echo $hello," ", $sexe;
}

?>