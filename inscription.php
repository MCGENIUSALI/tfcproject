

<?php
session_start();
require('include/constants.php');
require('config/database.php');
require('include/functions.php');
  ?>
  
  <?php
  
  if (isset($_POST['submit'])) {
    $isset = isset($_POST['nom' ]) && isset($_POST['postnom' ]) && isset($_POST['sexe' ]) && isset($_POST['email' ]) && isset($_POST['promotion' ]) && isset($_POST['numpaie'] );
    $not_empty = !empty($_POST['nom' ]) && !empty($_POST['postnom' ]) && !empty($_POST['sexe' ]) && !empty($_POST['email' ]) && !empty($_POST['promotion' ]) && !empty($_POST['numpaie'] );

      if($isset && $not_empty){

        $errors=[];
        extract($_POST);

        $req = 'SELECT * FROM paiement_projet WHERE numpaie = ?';
        $prep = $db->prepare($req);
        $prep->execute(array($numpaie));
        $userexist = $prep->rowCount();
          if($userexist == 1){
          $req2 = 'INSERT INTO membre(nom, postnom, sexe, email, promotion, numpaie)
          VALUES(:nom, :postnom, :sexe, :email, :promotion, :numpaie)';

          $prep2 = $db->prepare($req2);
          $prep2 -> execute([
            'nom' => $nom,
            'postnom' => $postnom,
            'sexe' => $sexe,
            'email' => $email,
            'promotion' => $promotion,
            'numpaie' => $numpaie
          ]);

          redirect('profil.php?id=');
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
