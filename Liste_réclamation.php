<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/Espace scolarité.css">
      <link rel="stylesheet" type="text/css" href="css/Liste réclamation.css">
          <link rel="stylesheet" type="text/css" href="css/styless.css">
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <a class="navbar-brand" >
            <div id="main">
              
            </div>
           </a> 
          <div id="di1">
            <div id="mySidenav" class="sidenav">
              
            </div>
          </div>
          <ul class="nav justify-content-end">
             <li class="nav-item">
            <a style="color:white" class="nav-link" href="basedonne.php?dec=out">Deconnexion</a>
            </li>
           
          </ul> 
      </div>  
      </nav>
    </div>
    <div class="container">
      <table class="table table-bordered">
      <tr>
        <th>Nom-Prénom</th>
       
        <th>Date de réclamation</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>ELBOUSSATAOUI mariam</td>
        
        <td>14-01-2022</td>
        <td><?php  session_start();
        if(!empty($_SESSION['message'])){ 
        echo $_SESSION['message'];}?></td>
        <td><a id="liencorrige" href="Corriger.php">Corriger</a></td>
      </tr>
       
        
    </table>
    </div>
    