<?php  
session_start();?>
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
                  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menu</span>
                </div>
            </a> 
          <div id="di1">
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="page-recuperer.php">consulter mon renduvous</a>
            </div>
          </div>
          <ul class="nav justify-content-end">
            <li class="nav-item">
            <a style="color:white" class="nav-link" href="basedonne.php?dec=out">Deconnexion</a>
            </li>
           
          </ul> 
      </div>  
      </nav>
      <div class="container-fluid">
        <center>
        <p id="P1"> 
         <strong> MERCI DE VERIFIER VOTRE INFORMATIONS</strong>
        </p>
      
            <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">INFORMATIONS:</h2>
                </div>
                <div class="card-body">
                    <form action="traitement.html" method="POST">
                      <?php
                        $connection = new mysqli("localhost", "root", "", "bdbd");
                        $request = "SELECT * FROM donnees  WHERE CNE='".$_SESSION['cne']."'";
                        $results = $connection->query($request);
                        while($ligne = $results->fetch_assoc()):
                        ?> <?php  $nom=$ligne['NOM-PRENOM'];
                     $date=$ligne['DATE-DE-NAISSANCE'] ;
                     $cin=$ligne['CIN'];
                    $tele=$ligne['TELE'];
                     $email=$ligne['EMAIL'];
                     $filiere=$ligne['FILIERE'];
                   ?>
                        <div class="form-row m-b-55">
                            <div class="name">NOM & PRENOM</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="NOM-PRENOM" value=" <?php echo $nom ; ?> "  id="np" disabled >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DATE DE NAISSANCE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="DATE-DE-NAISSANCE" value=" <?php echo $date ; ?> "disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">CIN</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="CIN" value=" <?php echo $cin ; ?> "disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">TELE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="tel" name="TELE"value=" <?php echo $tele ; ?> "disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">EMAIL</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="EMAIL" value=" <?php echo $email ; ?> "disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">FILIERE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="FILIERE"  value=" <?php echo $filiere ; ?> "disabled> 
                                     <?php  endwhile ;?> 
                                </div>
                            </div>
                        </div>
                        <div>
                            <input  type="submit" value="approuver">
                        </div>
                    </form>
                    <form  action="#" method="POST">
                      <div id="message">
                        <p>message </p>
                        <textarea   name="message"  placeholder="taper votre réclamation"></textarea>
                        <?php
                        if(!empty($_POST['message'])){
                            
                         $_SESSION['message']=$_POST['message'];
                        }
                        ?>
                        <input  type="submit"  value="réclamer">
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

      </center>
  </body>
  <script src="JS/nav.js"></script>
</html>
