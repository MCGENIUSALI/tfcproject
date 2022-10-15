<?php $title = "Profil "; ?>
<?php include('include/constants.php'); ?>
<?php include('partials/header.php'); ?>
<!DOCTYPE html>
<body>
  <div class="container">
    <div class="col-md-12 col-sm-2">
      <div class="card-container">
        <div class="card">
          <div class="font">
            <div class="cover">              
              <img src="assets/img/portfolio/covert.jpg" alt="" width="100%">
            </div>
            <div class="user">
             <img class="img-circle" src="<?= get_avatar_url($user->email) ?>" alt="Image de profil de <?= e($user->nom) ?>" >
            </div>
            <div class="content">
              <div class="main">
                <h3><?= $user->nom ." ".$user->postnom ?></h3>
                <p>Compte mail: <a href="<?= 'mailto:'.$user->email ?>" target="_blanc"><?= $user->email ?></a></p>
                <p>Cette platteforme est à caractère Educative et <br> Professionnelle pour la gestion et l'organisation de nos projets</p>
                <button type="button" class="btn btn-primary">Modifier profil</button> <a href="creaWSP.php"><button type="button" class="btn btn-secondary">Créer Workspace</button></a>  
            </div>
              <hr>
                <div>
                      <div class="card" style="width: 18rem; margin:2rem">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <button type="button" class="btn btn-primary">Ouvrir Workspace </button>
                         </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
  </div>
</body>
</html>





