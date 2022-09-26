<?php
  session_start();
  require('config/database.php');
  require('include/functions.php');


if(isset($_POST['submit'])){

if(!empty($_POST['nom']) && !empty($_POST['numpaie']) and isset($_POST['nom']) && isset($_POST['numpaie'])){

 
 extract($_POST);

  $q = $db->prepare('SELECT id FROM membre WHERE nom = :nom and numpaie = :numpaie');
  //$q1 = $db->prepare('SELECT numpaie FROM membre');

  $q->execute([
    'nom' => $nom,
    'numpaie' => $numpaie
  ]);
  

  $userbeen = $q->rowCount();

  if($userbeen){
    redirect('profil.php?id=');
  }else{
    $errors[]="Combinaison Username/Numero paiement incorrecte!";
    saveInput();
  }
    } else{
      $errors[]="Veuillez remplir tous les champs SVP";
      saveInput();
    }
  } 


?>







<?php
  require ("views/connecter.view.php");
?>