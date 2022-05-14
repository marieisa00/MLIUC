<?php
include 'connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLIUC Inscrit</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style_index.css">
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
                    <a href="tabbord.php"><span class="las la-table" ></span>
                    <span>Tableau de bord</span></a>
                </li>
                <li>
                    <a href="matiere.php"><span class="las la-bookmark" ></span>
                    <span>Matieres</span></a>
                </li>
                <li>
                    <a href="index.php"><span class="las la-user-graduate" ></span>
                    <span>Etudiants</span></a>
                </li>
                <li>
                    <a href="display.php" class="active"><span class="las la-business-time" ></span>
                    <span>Liste Inscrits</span></a>
                </li>
                <li>
                    <a href="code1.php"><span class="las la-user-circle" ></span>
                    <span>Demandes</span></a>
                </li>
                <li>
                    <a href="emargement.php"><span class="las la-print"></span>
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
    <div class="card-header">
            <h3>Nouveaux Inscrits</h3>
            
            <!--<button><a href="inscrit.php" class="text-light">Ajoutez étudiant<span class="las la-arrow-right"></span></a>
            
            </button>-->
    </div>
            <div class="card">
            <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Matricule</th>
      <th scope="col">Matière</th>
      <th scope="col">Classe</th>
      <th scope="col">Operation</th>


    </tr>
  </thead>
  <tbody>

<?php

$sql="Select * from `etudiant`";
$result=mysqli_query($con,$sql);
if($result){
    while ($row=mysqli_fetch_assoc($result)){
    $idEtudiant=$row['idEtudiant'];
    $nomEtudiant=$row['nomEtudiant'];
    $prenomEtudiant=$row['prenomEtudiant'];
    $matricule=$row['matricule'];
    $matiere=$row['matiere'];
    $classe=$row['classe'];
    echo '<tr>
    <th scope="row">'.$idEtudiant.'</th>
    <td>'.$nomEtudiant.'</td>
    <td>'.$prenomEtudiant.'</td>
    <td>'.$matricule.'</td>
    <td>'.$matiere.'</td>
    <td>'.$classe.'</td>
    <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$idEtudiant.'" class="text-light" >Mettre à jour</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$idEtudiant.'" class="text-light">Supprimer</a></button>
    </td>
  </tr>';
    }
}

?>

    
  </tbody>
</table>

            </div>
            </div>
    </main>
        </div>
</body>
</html>