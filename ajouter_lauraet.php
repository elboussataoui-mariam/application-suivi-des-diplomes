<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/Espace scolarité.css">
    <link rel="stylesheet" type="text/css" href="css/styleformulaire.css">
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
      <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" id="esp">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">INFORMATIONS:</h2>
                </div>
                <div class="card-body">
                    <form  method="POST">
                 <div class="form-row m-b-55">
                            <div class="name">NOM & PRENOM</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="NOM-PRENOM"  id="np"  >
                                            <?php 
                                            if(!empty($_POST['NOM-PRENOM'])){
                                             $re1=$_POST['NOM-PRENOM'] ;
                                            }
                                               
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DATE DE NAISSANCE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="DATE-DE-NAISSANCE" >
                                    <?php if(!empty($_POST['DATE-DE-NAISSANCE'])){
                                             $re2=$_POST['DATE-DE-NAISSANCE'] ;
                                            }
                                             
                                               
                                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">CIN</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="CIN" >
                                    <?php 
                                            if(!empty($_POST['CIN'])){
                                             $re3=$_POST['CIN'] ;
                                            }
                                               
                                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">TELE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="tel" name="TELE">
                                    <?php 
                                            if(!empty($_POST['TELE'])){
                                             $re4=$_POST['TELE'] ;
                                             }
                                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">EMAIL</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="EMAIL" >
                                    <?php 
                                          if(!empty($_POST['EMAIL'])){
                                             $re5=$_POST['EMAIL'] ;
                                               }
                                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">FILIERE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="FILIERE"  > 
                                    <?php 
                                            if(!empty($_POST['FILIERE'])){
                                             $re6=$_POST['FILIERE'] ;
                                              }

                                            ?>
                                      
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">CNE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="CNE"  >
                                  <?php 
                                            if(!empty($_POST['CNE'])){
                                             $re7=$_POST['CNE'] ;
                                              }

                                            ?>
                                      
                                </div>
                            </div>
                        </div>
                        <div>
                            <input  type="submit" value="ajouter">
                        </div>
                    </form>
                    
                    <?php 

    $connection = new mysqli("localhost", "root", "", "bdbd");
  if(!empty($re1) && !empty($re2) && !empty($re3) && !empty($re4) && !empty($re5) && !empty($re6)  && !empty($re7)){
    $request="INSERT INTO donnees VALUES ( '$re1 ', '$re2', '$re3','$re4 ','$re5 ','$re6 ','$re7 ')";
     $results = $connection->query($request);
     var_dump($results);
    }
// header("location:ajouter_lauraet.php");

  ?>
              </div>
            </div>
        </div>
    </div>

     </body>
</html>