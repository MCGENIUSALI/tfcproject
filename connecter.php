<?php
  session_start();
  require('config/database.php');
  require('include/functions.php');


if(isset($_POST['submit'])){

if(!empty($_POST['nom']) && !empty($_POST['numpaie']) and isset($_POST['nom']) && isset($_POST['numpaie'])){

 
 extract($_POST);

  $q = $db->prepare('SELECT id FROM membre WHERE nom = :nom, numpaie = :numpaie');
  $q1 = $db->prepare('SELECT numpaie FROM paiement_projet');

  $q->execute([
    'nom' => $nom
  ]);
  
  $q1->execute([
    'numpaie' => $numpaie
  ]);

  $userbeen = $q->rowCount();
  $numbeen = $q1->rowCount();

  if($userbeen and $numbeen){
    redirect('profil.php?id=');
  }else{
    $errors[]="Combinaison Username/Numero paiement incorrecte!";
    saveInput();
  }
    } else{
      $errors[]="Veuillez remplir tous les champs SVP";
    }
  } 


?>







<?php
  require ("views/connecter.view.php");
?>