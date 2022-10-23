<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/Espace scolarité.css">
    <link rel="stylesheet" type="text/css" href="css/Corriger.css">
     <link rel="stylesheet" type="text/css" href="css/styleformulaire.css">
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <a class="navbar-brand"  >
           </a> 
          <ul class="nav justify-content-end">
             <li class="nav-item">
            <a style="color:white" class="nav-link" href="basedonne.php?dec=out">Deconnexion</a>
            </li>
          </ul> 
      </div>  
      </nav>
    <center> 
      <form methode="POST">
        <div class="container-fluid">
          <div class="form-group container" id="mes">
            <label for="comment" >Message</label>
            
            <textarea class="form-control" rows="5" id="message"  disabled ><?php  session_start();
        echo $_SESSION['message'];?></textarea>
          </div> 

          <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" id="mod">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">MODIFICATION:</h2>
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
                                            <input class="input--style-5" type="text" name="NOM-PRENOM" value=" <?php echo $nom ; ?> " id="np" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DATE DE NAISSANCE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="DATE-DE-NAISSANCE" value=" <?php echo $date ; ?> ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">CIN</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="CIN" value=" <?php echo $cin ; ?> ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">TELE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="tel" name="TELE"value=" <?php echo $tele ; ?> ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">EMAIL</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="EMAIL" value=" <?php echo $email ; ?> ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">FILIERE</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="FILIERE"  value=" <?php echo $filiere ; ?> "> 
                                     <?php  endwhile ;?> 
                                </div>
                            </div>
                        </div>
                        
              <input  type="submit"  id="butt1" value="enregister la modification">
            </div>  
         
         
          </div>
        </form>
    
    </center>
  </body>
</html>