<?php
  session_start();
  if(isset($_SESSION['auth'])){
    header('Location: html dispo.php ');     
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <!--  document Bootstrap -->
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <!-- css for more style stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/log.css" />
  </head>
  <body>
    <div id="booking" class="section">
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="booking-form">
              <div class="booking-bg">
                <div class="form-header" style="background-image: url('im3.jpg');">
                  <h2>LOGIN</h2>
                </div>
              </div>
              <form action="basedonne.php" name="formulaire" method="post">
              <?php if(isset($_SESSION['msg'])): ?>
                    <div class="alert alert-danger">
                        <?php unset($_SESSION['msg'])?>
                        <strong>Erreur</strong> la connexion a échoué,veuillez réessayer..!
                    </div>
                    <?php endif?>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Email</span>
                      <input class="form-control" type="text" name="add" placeholder="Adresse_email"required>
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <span class="form-label">Password</span>
                      <input class="form-control" type="password" name="cne" placeholder="CNE" required>
                    </div>
                  </div>
                </div>
                <div class="form-btn">
                  <button class="submit-btn" name="envoyer">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

   