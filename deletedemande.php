<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $idDemande=$_GET['deleteid'];

    $sql="delete from `demande` where idEtudiant=$idDemande";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted sucessfull";
        header('location:code1.php');
    }else{
        die(mysqli_error($con));
    }
    

}
?>