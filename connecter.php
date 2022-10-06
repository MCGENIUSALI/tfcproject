<?php
  session_start();
  include('filtre/guest_filter.php');
  require('config/database.php');
  require('include/functions.php');


if(isset($_POST['submit'])){

if(!empty($_POST['nom']) && !empty($_POST['numpaie']) and isset($_POST['nom']) && isset($_POST['numpaie'])){

 
 extract($_POST);

  $q = $db->prepare('SELECT id, nom FROM membre 
  WHERE nom = :nom and numpaie = :numpaie');

  $q->execute([
    'nom' => $nom,
    'numpaie' => $numpaie
  ]);

  $userbeen = $q->rowCount();

  if($userbeen){
    $user = $q->fetch(PDO::FETCH_OBJ);
    $_SESSION['user_id'] = $user->id;
    $_SESSION['nom'] = $user->nom;

    redirect('profil.php?id='.$user->id);
  }else{
    $errors[]="Combinaison Username/Numero paiement incorrecte!";
    saveInput();
  }
    } else{
      $errors[]="Veuillez remplir tous les champs SVP";
      saveInput();
      clearInput();
    }
  } 


?>







<?php
  require ("views/connecter.view.php");
?>