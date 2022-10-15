<?php
session_start();
include('filtre/guest_filter.php');
require('include/constants.php');
require('config/database.php');
require('include/functions.php');
  ?>
  
  <?php
  if (isset($_POST['submit'])) {
    $isset = isset($_POST['nm' ]) && isset($_POST['postnm' ]) && isset($_POST['sexe' ]) && isset($_POST['email' ]) && isset($_POST['promotion' ])  && isset($_POST['code'] );
    $not_empty = !empty($_POST['nm' ]) && !empty($_POST['postnm' ]) && !empty($_POST['sexe' ]) && !empty($_POST['email' ]) && !empty($_POST['promotion' ]) && !empty($_POST['code'] );

      if($isset && $not_empty){

        $errors=[];
        extract($_POST);

        $req = 'SELECT paiement.IDisipaie FROM paiement JOIN isietudiant ON paiement.fk_etud = isietudiant.IDisi WHERE paiement.IDisipaie = :code';
        $prep = $db->prepare($req);
        $prep->execute([
          'code' => $code,
        ]);
        $userexist = $prep->rowCount();

          if($userexist == 1){
          $req2 = 'INSERT INTO useretudiant(nom, postnom, sexe, email,  promotion, numpaie)
          VALUES(?, ?, ?, ?, ?, ?)';
          $prep2 = $db->prepare($req2);
          $prep2 -> execute([$nm, $postnm, $sexe, $email, $promotion, $code]);
          redirect('profil.php');
        }else{
          $errors[]="Numéro paiement déjà utilisé ou incorrect (Veuillez SVP regulariser avec la caisse de l'ISIPA)";
          saveInput();
        }

      }else{
        $errors[]= "Veuillez remplir tous les champs svp !!";
        saveInput();
      }

    }else{
      clearInput();
    }
  
  require ("views/inscription.view.php");
?>
