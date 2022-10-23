<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: INDEX V1.php ');
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page d'acceuil</title>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="css/Espace scolarité.css">
    <link rel="stylesheet" type="text/css" href="css/styleformulaire.css">
      <link rel="stylesheet" type="text/css" href="css/Liste réclamation.css">
          <link rel="stylesheet" type="text/css" href="css/styless.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
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
              <a href="#home" class="nav-link">log out</a>
            </li>
           
          </ul> 
      </div>  
      </nav>


<body>

    <div class="limiter">
        

        <?php if(isset($_SESSION['reponseSup'])): ?>
        <div class="alert alert-danger text-center ">
            <strong><?php echo $_SESSION['reponseSup'] ?></strong>
            <?php unset($_SESSION['reponseSup'])?>

        </div>
        <?php endif?>
</div>
        

                    
                
          </div>
</div>

</body>

</html>
