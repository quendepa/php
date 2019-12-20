<form method="get" action="">
  <label>Humain: </label> <input method="get" type="radio" name="human" value="human"> Chat <input method="get" type="radio" name="human" value="chat"> Licorne
  <input method="get" type="radio" name="human" value="licorne">  <input type="submit" name="submit" value="Greet me now">
</form>

<?php
if ((isset($_GET['human']))){
    $catégorie = $_GET['human'];
    switch ($catégorie) {
        case "human":
            echo "hello human!";
            break;
        case "chat":
            echo "hello , Your are cat !?!";
            break;
        case "licorne":
            echo "hello , serieusement ? t'es une licorne !?";
            break;
      
    }
}
?>