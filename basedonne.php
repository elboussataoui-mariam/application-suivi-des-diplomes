<?php
session_start();
$connexion_bd = new PDO('mysql:host=localhost;port=3306;dbname=bdbd;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$db= mysqli_connect('localhost','root','','bdbd');

    if(isset($_GET['dec']) && $_GET['dec']=='out' ){
        unset( $_SESSION['auth']);
        header('location: INDEX V1.php'); 
    }

// traitement pour se connecter
if(isset($_POST['envoyer'])){

   // die(var_dump($connexion_bd));
  $requete1=$connexion_bd -> prepare('SELECT CNE FROM donnees WHERE EMAIL=? and CNE=?;');
    
  $requete1 -> execute(array($_POST['add'],$_POST['cne']));
    
  $enregistrement1=$requete1 -> fetch();
  $requete1->closeCursor();
    
  if($enregistrement1['CNE']==$_POST['cne']) 
    {
    $_SESSION['add']=$_POST['add'];
    $_SESSION['cne']=$_POST['cne'];
    $_SESSION['auth']=$_POST['cne'];
           

 header('location: html dispo.php'); 
    }
    else{
        $_SESSION['msg']="Erreur";
        header('location: INDEX V1.php'); 

    }
    
}


?>