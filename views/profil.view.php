<?php $title = "Profil " ?>
<!DOCTYPE html>
<?php include('partials/header.php');?>
<body>
<div class="container">
  <main>
    <div class="bg-light p-5 m-5 rounded">
    <h4>Mon profil</h4>
    <div class="p-10">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <div class="p-2">
          <h4><?= e($_SESSION['nom']) ?></h4>
          <p><a href="">mail</a></p>
        </div>
      </div>

    <hr class="col-3 col-md-2 mb-5 m-2">
  <div class="chef">
    <h4>Gérer Workspace</h4>
        <p class="lead">Dévenez professionnelle dans la gestion de vos projets Avec tous les outils possibles <br> pour les méner à bien.</p>
        <a class="btn btn-lg btn-primary rounded-pill" href="#" role="button">Créer Workspace &raquo;</a>
      </div>
    </div>
  </main>
</body>
</html>

<?php include('partials/footer.php'); ?>



