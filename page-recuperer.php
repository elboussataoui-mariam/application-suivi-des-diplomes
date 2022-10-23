<?php  
session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styless.css">
    <link rel="stylesheet" type="text/css" href="css/Liste réclamation.css">

     <link rel="stylesheet" href="bootstrap.min.css">

  </head>
<body>
 
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <a class="navbar-brand"  >
           </a> 
          <ul class="nav justify-content-end" id="lg">
           
             <li class="nav-item">
            <a style="color:white" class="nav-link" href="basedonne.php?dec=out">Deconnexion</a>
            </li>
          </ul> 
      </div>  
      </nav>
  <div class="container">
      <table class="table table-bordered">
    <tr>
      <th>FILIER</th>
      <th>ANNEE SCOLAIRE</th>
      <th>DATE DE RECUPERATION</th>
    </tr>
    <?php 
        $connection = new mysqli("localhost", "root", "", "bdbd");
        $request = "SELECT * FROM rendezvous";

      $results = $connection->query($request);
      while($ligne = $results->fetch_assoc()):
         ?>
          <tr>
         <td><?php   $em=$ligne['FILIERE']; echo  $ligne['FILIERE'] ?></td>
         <td> <?php  echo  $ligne['ANNEE-SCOLAIRE'] ?></td>
         <td> <?php  echo  $ligne['DATE-DE-RECUPERATION'] ?></td>
          <?php endwhile ;?>  
        </tr>
         
      
  </table>
</div>
  </body>
</html>