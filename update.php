<?php
include 'connect.php';
$idInscrit=$_GET['updateid'];
$sql="Select * from `inscrit` where idInscrit=$idInscrit";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$idInscrit=$row['idInscrit'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $matricule=$row['matricule'];
    $matiere=$row['matiere'];
    $classe=$row['classe'];

if(isset($_POST['submit'])){

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $matricule=$_POST['matricule'];
    $matiere=$_POST['matiere'];
    $classe=$_POST['classe'];

    $sql="update `inscrit` set idInscrit=$idInscrit, nom='$nom', prenom='$prenom', matricule='$matricule', matiere='$matiere', classe='$classe' where idInscrit=$idInscrit";
    $result=mysqli_query($con,$sql);
    if($result){
      //echo "Mise à jour avec succès!";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    } 
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MLIUC Session</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style_index.css">
    <!--jQuery code-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    
</head> 

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>MLIUC</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.html"><span class="las la-table" ></span>
                    <span>Tableau de bord</span></a>
                </li>
                <li>
                    <a href="matiere.html"><span class="las la-bookmark" ></span>
                    <span>Matieres</span></a>
                </li>
                <li>
                    <a href="classe.html"><span class="las la-user-graduate" ></span>
                    <span>Classes</span></a>
                </li>
                <li>
                    <a href="inscrit.php" class="active"><span class="las la-business-time" ></span>
                    <span>Liste Inscrits</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle" ></span>
                    <span>Demandes</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-print"></span>
                    <span>Exporter</span></a>
                </li>
            </ul>
        </div>
    </div>

    
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                    </label> Liste Inscrits
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Recherche ici" />
            </div>

            <div class="user-wrapper">
                <img src="admin.png" width="35px" height="30px" alt="">
                <div>
                    <h4>TCHOUTA ALAIN</h4>
                    <small>Responsable de filiere</small>
                </div>
            </div>
        </header>

    <div class="main-content">
        <main>
       

            <form method="post">
                <div class="mb-3">
                    <label>Nom</label>
                    <input type="text" class="form-control" placeholder="Entrez le nom" name="nom" autocomplete="off" value=<?php echo $nom;?>>
                </div>
                <div class="mb-3">
                    <label>Prénom</label>
                    <input type="text" class="form-control" placeholder="Entrez le prénom" name="prenom" autocomplete="off" value=<?php echo $prenom;?>>
                </div>
                <div class="mb-3">
                    <label>Matricule</label>
                    <input type="text" class="form-control" placeholder="Entrez le matricule" name="matricule" autocomplete="off" value=<?php echo $matricule;?>>
                </div>
                <div class="mb-3">
                    <label>Matière</label>
                    <input type="text" class="form-control" placeholder="Entrez la matière" name="matiere" autocomplete="off" value=<?php echo $matiere;?>>
                </div>
                <div class="mb-3">
                    <label>Classe</label>
                    <input type="text" class="form-control" placeholder="Entrez la classe" name="classe" autocomplete="off" value=<?php echo $classe;?>>
                </div>

            
                
                <button type="submit" class="btn btn-primary" name="submit">Mettre à jour</button>
            </form>

            

    </div>
</body>

</html>