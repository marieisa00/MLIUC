<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "mliuc");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM etudiant";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         
                         <th>NomEtudiant</th>  
                         <th>PrenomEtudiant</th>  
       <th>Matricule</th>
       <th>Matiere</th>
       <th>Classe</th>
       <th>Signature</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                          
     <td>'.$row["nomEtudiant"].'</td>  
     <td>'.$row["prenomEtudiant"].'</td>  
       <td>'.$row["matricule"].'</td>  
       <td>'.$row["matiere"].'</td>
       <td>'.$row["classe"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=emargement.xls');
  echo $output;
 }
}
?>