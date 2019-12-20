<form method="get" action="">
    <h1>Méchant prof: </h1>
	<label for="note">entrez la note de l'élève /20:</label>
	<input type="" name="note">
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php

if ((isset($_GET['note']))){
 $note= $_GET['note'];
  if ($note <= 4){
      echo "This work is really bad. What a dumb kid! ";
  } else if($note > 4 && $note<=9){
      echo "This is not sufficient. More studying is required.";
    }else if ($note == 10){
       echo "barely enough!";
    }else if ($note > 10 && $note <= 14){
       echo "Not bad!";
    }else if ($note > 14 && $note <=18){
       echo "Bravo, bravissimo!";
    }else if ($note == 20) {
        echo "Too good to be true : confront the cheater!";
    }
}
?>
   
   