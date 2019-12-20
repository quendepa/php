<form method="get" action="">
	<label for="age">age:</label>
	<input type="" name="age">
    <label>Sexe : </label> <input method="get" type="radio" name="sexe" value="homme"> H <input method="get" type="radio" name="sexe" value="femme"> F
	
  <br>
  <label>Parlez vous anlais : </label> <input method="get" type="radio" name="anglais" value="oui"> oui <input method="get" type="radio" name="anglais" value="non"> non
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
 

// 3. "Different greetings according to age" Exercise;
if ((isset($_GET['age']))&&(isset($_GET['sexe']))&&(isset($_GET['anglais']))){
    $age= $_GET['age'];
    $sexe=$_GET['sexe']; 
    $anglais=$_GET['anglais'];
    
    //condition male femelle 
  if ($anglais=='oui'){
    if ($sexe== 'homme') {
      $kido = "hello kid!";
      $ado = "bonjour jeune homme";
      $adulte = "hello mister!";
      $robot = "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }else{
      $kido = "hello little girl!";
      $ado = "Bonjour jeune fille!";
      $adulte = "hello mrs!";
      $robot = "toujours en vie!? félicitatation , vous n'êtes pas un robot j'espère ?";
    }
  }
  if ($anglais=='non'){
    if($sexe== 'homme'){
      $kido = "bonjour petit garçon!";
      $ado = "bonjour jeune homme";
      $adulte = "Bonjour monsieur!";
      $robot = "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
     }else{
      $kido = "bonjour petite fille!";
      $ado = "Bonjour jeune fille!";
      $adulte = "Bonjour madame!";
      $robot = "toujours en vie!? félicitatation , vous n'êtes pas un robot j'espère ?";
    }
  
  }

    //condition age
    if( $age < 12){
      echo $kido;  
    }
    //si l’âge est entre 12 et 18 ans, affichez "Bonjour Adolescent!"
     else if( $age >= 12 && $age<18){
        echo $ado;  
      }
    
    //si l’âge est entre 18 et 115 ans, affichez Hello Adult!"
     else if( $age >= 18 && $age<115){
        echo $adulte;  
      }
      
    //si l’âge est au-delà de 115 ans, afficher "Wow! Toujours vivant ? Êtes-vous un robot, comme moi ? Puis-je vous serrer dans mes bras ?"
    else{
        echo $robot;  
      }
        
    
}//FINDU PREMIERIF
//si l’âge est inférieur à 12 ans, affichez "Hello kiddo!"

?>



