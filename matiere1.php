<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MLIUC Matieres 3IL4</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>

<body>

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
                    <a href="matiere.php" class="active"><span class="las la-bookmark" ></span>
                    <span>Matieres</span></a>
                </li>
                <li>
                    <a href="index.php"><span class="las la-user-graduate" ></span>
                    <span>Etudiants</span></a>
                </li>
                <li>
                    <a href="display.php"><span class="las la-business-time" ></span>
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

    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label> Matieres 3IL4
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Rechercher ici" />
            </div>

            <div class="user-wrapper">
                <img src="admin.png" width="35px" height="30px" alt="">
                <div>
                    <h4>TCHOUTA ALAIN</h4>
                    <small>Responsable de filiere</small>
                </div>
            </div>
        </header>

        <main>
            <h3>Choisissez une classe:</h3>
        <table>
                            <tr>
                                <td>
                                    <span>
                                <button class=" btn btn-primary "><a href="matiere.php" class="text-light " >3IIL3</a></button>
                            </span>
                                </td>
                                <td>
                                    <span>
                                <button class="btn btn-primary "><a href=" matiere1.php" class="text-light ">3IL4</a></button>
                            </span>
                                </td>
                                <td>
                                    <span>
                                <button class="btn btn-primary "><a href="matiere2.php" class="text-light ">3IL5</a></button>
                            </span>
                                </td>
                            </tr>
                        </table>
            
       
                
                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h2>Matières Semestre 1</h2>

                            </div>

                            <div class="card-body">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Matière</td>
                                            <td>Coefficient</td>
                                            <td>Module</td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Méthode Linéaire</td>
                                            <td>2</td>
                                            <td><span class="status purple"></span> Systèmes</td>
                                        </tr>
                                        <tr>
                                            <td>Analyse numérique</td>
                                            <td>2</td>
                                            <td><span class="status purple"></span> Systèmes</td>
                                        </tr>
                                        <tr>
                                            <td>Outils Algorithmique</td>
                                            <td>3</td>
                                            <td><span class="status purple"></span> Systèmes</td>
                                        </tr>
                                        <tr>
                                            <td>Réseaux mise en oeuvre</td>
                                            <td>6</td>
                                            <td><span class="status orange"></span> Programmation</td>
                                        </tr>
                                        <tr>
                                            <td>Programmation Shell</td>
                                            <td>3</td>
                                            <td><span class="status orange"></span> Programmation</td>
                                        </tr>
                                        <tr>
                                            <td>Gestion de projet</td>
                                            <td>2</td>
                                            <td><span class="status blue"></span> Dev logiciel</td>
                                        </tr>
                                        <tr>
                                    
                                            <td>Anglais</td>
                                            <td>2</td>
                                            <td><span class="status pink"></span> SHES</td>
                                        </tr>
                                        <tr>
                                            <td>Langue vivante 2</td>
                                            <td>2</td>
                                            <td><span class="status pink"></span> SHES</td>
                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="customers">
                        <div class="projects">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Matières Semestre 2</h2>

                                </div>

                                <div class="card-body">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Matière</td>
                                                <td>Coefficient</td>
                                                <td>Module</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <td>Theorie des graphes</td>
                                            <td>2</td>
                                            <td><span class="status purple"></span> Informatique</td>
                                            </tr>
                                            <tr>
                                                <td>EPP1</td>
                                                <td>2</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                            </tr>
                                            <tr>
                                                <td>Systèmes embarqué</td>
                                                <td>3</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                            </tr>
                                            <tr>
                                                <td>Intelligence artificielle</td>
                                                <td>2</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                            </tr>
                                            <tr>
                                                <td>Big data</td>
                                                <td>1</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                            </tr>
                                            <tr>
                                                <td>Data mining</td>
                                                <td>3</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                            </tr>
                                            <tr>
                                                <td>Buisness Intelligence</td>
                                                <td>3</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                            </tr>
                                            <tr>
                                                <td>Traitement d'image</td>
                                                <td>3</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                            </tr>
                                            <tr>
                                                <td>Technique de gestion de projet</td>
                                                <td>2</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>
                                            <tr>
                                                <td>Système d'information de l'entreprise</td>
                                                <td>1</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>
                                            <tr>
                                                
                                                <td>Langue vivante 2</td>
                                                <td>2</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

        </main>
    </div>
</body>

</html>