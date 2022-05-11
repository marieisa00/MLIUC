<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $idInscrit=$_GET['deleteid'];

    $sql="delete from `inscrit` where idInscrit=$idInscrit";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted sucessfull";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
    

}
?>
