<?php
session_start();
if (isset($_POST['valider'])){
  if(!empty($_POST['login'] AND !empty($_POST['mdp']))){
  $logindf = "tchouta@iuc.com";
  $mdpdf = "tchoutaalain";

  $login_saisi = htmlspecialchars($_POST['login']);
  $mdp_saisi = htmlspecialchars($_POST['mdp']);
  
  if($logindf == $login_saisi AND $mdpdf == $mdp_saisi){
    $_SESSION['mdp'] = $mdp_saisi;
    header('Location: tabbord.php');
  }else{
    echo "Votre mot de passe est incorrect";
  }

  }else{
    $message = "Veuillez completer tout les champs";
  }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>connexion</title>
    <link rel="stylesheet" type="text/css" href="connexion.css">
</head>
<body >
     <form action="" method="post">
           <div class="logo"></div>

        <label>Login</label>
        <input type="text" name="login" placeholder="entrer votre login"><br>

        <label>Mot de passe</label>
        <input type="password" name="mdp" placeholder="entrer votre mot de passe"><br>

        <button type="submit" name="valider">S'authentifier</button>

     </form>
     
</body>
</html>