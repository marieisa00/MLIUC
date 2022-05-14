<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $nomDemande=$_POST['nomDemande'];
    $prenomDemande=$_POST['prenomDemande'];
    $justificatif=$_POST['justificatif'];
    $classeDemande=$_POST['classeDemande'];

    $sql="insert into `Demande` (nomDemande,prenomDemande,matricule,matiere,classeDemande) values('$nomDemande','$prenomDemande','$matricule','$matiere','$classeDemande')";
    $result=mysqli_query($con,$sql);
    if($result){
      // echo "Donnée inserée avec succès!";
       header('location:justif.php');
    }else{
        die(mysqli_error($con));
    } 
    
}
    
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Justification</title>
    <link rel="stylesheet" type="text/css" href="justif.css">
</head>
<body >
     <form action="" method="post">
           <div class="logo"></div>

         <p  style="margin-left:160px;font-weight: bold;margin-top: 20px;margin-bottom: 40px;"> Demande d'inscription</p>
       
        <input type="text" name="nomDemande" placeholder="entrer votre nom"><br>

     
        <input type="text" name="prenomDemande" placeholder="entrer votre prénom"><br>

      
        <input type="text" name="classeDemande" placeholder="entrer votre classe"><br>
        
        <input type="textarea" name="justicatif" placeholder="Justification" style="width: 350px;height: 70px;margin-left:76px"/></p></br>

        <button type="submit">Envoyer</button>

     </form>
</body>
</html>