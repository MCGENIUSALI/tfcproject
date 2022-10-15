<?php
session_start();
include('filtre/auth_filter.php');
require('config/database.php');
require('include/functions.php');

if (isset($_POST['create'])) {
    $isset = isset($_POST['titre' ]) and isset($_POST['descri' ]);
    $not_empty = !empty($_POST['titre']) and !empty($_POST['descri']);

      if($isset && $not_empty){

        $errors=[];
        extract($_POST);

        $req = 'SELECT * FROM workspace WHERE IDWSP = ?';
        $prep = $db->prepare($req);
        $prep->execute(array($titre)); 
        $workexist = $prep->rowCount();

          if($workexist == 0){
          $req2 = 'INSERT INTO workspace(TitreWSP, descri)
          VALUES(:titre, :descri)';
          $prep2 = $db->prepare($req2);
          $prep2->execute([
            'titre' => $titre,
            'descri' => $descri
          ]);
          redirect('workspace.php');
        }else{
          $errors[]="Ce titre existe dejà!";
          saveInput();
        }

      }else{
        $errors[]= "Veuillez remplir tous les champs svp !!";
        saveInput();
      }
    }


/*
if(isset($_POST['create'])){
    if(!empty($_POST['titre']) and isset($_POST['titre'])){

        extract($_POST);
        $errors=[];
        
        $req = 'SELECT * FROM workflow WHERE IDWSP = ?';
        $prep = $db->prepare($req);
        $prep->execute();
        $WSPexist = $prep->rowCount();
        
        if($WSPexist != 1){
            $req2 = 'INSERT INTO workspace(TitreWSP)
            VALUES(:TitreWSP)';
            $prep2 = $db->prepare($req2);
            $q->execute([
                'titre' => $titre,
              ]);
            redirect('workspace.php');
        }


    }else{
      $errors[]="Veuillez remplir tous les champs SVP";
      saveInput();
      clearInput();
    }

}
*/
require ("views/creaWSP.view.php");