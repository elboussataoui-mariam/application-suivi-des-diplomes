
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styless.css">
    <link rel="stylesheet" type="text/css" href="css/styleformulaire.css">
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
      <div class="container-fluid" >
            <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" id="fix">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">RENDEZ-VOUS:</h2>
                </div>
                <div class="card-body">
                    <form  method="POST">
                      
                        <div class="form-row m-b-55">
                            <div class="name">FILIERE</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="FILIERE"   id="np"  >
                                            <?php  
                                            if(!empty($_POST['FILIERE'])){
                                            $nom=$_POST['FILIERE'] ;
                                            }
                                              
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">ANNEE SCOLAIRE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ANNEE-SCOLAIRE" >
                                    <?php 
                                   if(!empty($_POST['ANNEE-SCOLAIRE'])){ 
                                            $date=$_POST['ANNEE-SCOLAIRE'] ;
                                              }
                                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DATE DE RECUPERATION</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="DATE-DE-RECUPERATION" > <?php
                                    if(!empty($_POST['DATE-DE-RECUPERATION'])){  
                                            $dtre=$_POST['DATE-DE-RECUPERATION'] ;
                                              }
                                            ?>
                                   
                                </div>
                            </div>
                        </div>
                        <div>
                            <input  type="submit" value="fixer">
                        </div>
                    </form>
                    <?php

                      if(!empty($nom)&& !empty($date)&& !empty($dtre)){
                        $connection = new mysqli("localhost", "root", "", "bdbd");
                        $request="INSERT INTO rendezvous VALUES ( '$nom ', '$date', '$dtre')";
                        $results = $connection->query($request);
                        }
                        ?>
                     
                        
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
