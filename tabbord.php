
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MLIUC Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

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
                    <a href="index.html" class="active"><span class="las la-table" ></span>
                    <span>Tableau de bord</span></a>
                </li>
                <li>
                    <a href="matiere.html"><span class="las la-bookmark" ></span>
                    <span>Matieres</span></a>
                </li>
                <li>
                    <a href="classe.html"><span class="las la-user-graduate" ></span>
                    <span>Etudiants</span></a>
                </li>
                <li>
                    <a href="datatable.html"><span class="las la-business-time" ></span>
                    <span>Liste Inscrits</span></a>
                </li>
                <li>
                    <a href="code.html"><span class="las la-user-circle" ></span>
                    <span>Demandes</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-print"></span>
                    <span>Exporter</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                    </label> Tableau de bord
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

        <main>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>50</h1>
                        <span>Inscrits</span>
                    </div>
                    <div>
                        <span class="las la-bookmark"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>3</h1>
                        <span>Classes</span>
                    </div>
                    <div>
                        <span class="las la-user-graduate"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span>Session</span>
                    </div>
                    <div>
                        <span class="las la-business-time"></span>

                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2021-2022</h1>
                        <span>Année scolaire</span>
                    </div>
                    <div>
                        <span class="las la-calendar"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Matière Semestre</h3>

                            <a href="matiere.html"> <button>Tout voir <span class="las la-arrow-right">
                            </span></button></a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Matiere</td>
                                            <td>Effectif</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Java avancée</td>
                                            <td>11</td>
                                            <td>
                                                <span class="status purple"></span> En progression
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Developpement Web</td>
                                            <td>17</td>
                                            <td>
                                                <span class="status pink"></span> Terminé
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UML</td>
                                            <td>5</td>
                                            <td>
                                                <span class="status orange"></span> A Revoir
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Connaissance de l'entreprise</td>
                                            <td>22</td>
                                            <td>
                                                <span class="status purple"></span> En progression
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Anglais</td>
                                            <td>6</td>
                                            <td>
                                                <span class="status pink"></span> Terminé
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Système d'exploitation</td>
                                            <td>12</td>
                                            <td>
                                                <span class="status orange"></span> A Revoir
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>POO</td>
                                            <td>12</td>
                                            <td>
                                                <span class="status purple"></span> En progression
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Base de données</td>
                                            <td>9</td>
                                            <td>
                                                <span class="status pink"></span> Terminé
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Communication</td>
                                            <td>3</td>
                                            <td>
                                                <span class="status orange"></span> A Revoir
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LV2</td>
                                            <td>15</td>
                                            <td>
                                                <span class="status purple"></span> En progression
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="students">
                    <div class="card">
                        <div class="card-header">
                            <h3>Nouveaux Inscrits</h3>

                            <a href="datatable.html">
                                <button>Tout voir <span class="las la-arrow-right"></span>
                                </button>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Alan Peck</h4>
                                        <small>3IL3</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                   
                                </div>
                            </div>

                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Pascal Diarra</h4>
                                        <small>3IL4</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    
                                </div>
                            </div>

                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Girond Virgil</h4>
                                        <small>3IL3</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    
                                </div>
                            </div>

                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Mbakam Dennis</h4>
                                        <small>3IL3</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                   
                                </div>
                            </div>

                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Grus Alexandre</h4>
                                        <small>3IL5</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                  
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    </div>
    </main>


</body>

</html>