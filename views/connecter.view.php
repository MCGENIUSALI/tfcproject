<?php $title = "Se connecter " ?>
<?php   require('include/constants.php'); ?>
<?php include('partials/header.php');?>

<!DOCTYPE html>
<html lang="fr">
<body>
      <section id="contact" class="contact"> 
        <div class="container center-div" data-aos="">
        <form class="" method="POST">     
          <div class="formule">
          <div class="section-title" data-aos="fade-up">
            <h2>Se connecter</h2>
          </div>
          <form class="needs-validation" method="POST" >
            <div class="row g-3">
            <?php include("partials/errors.php") ?>
              <div class="col-sm-12">
                <label for="lastName" class="form-label">Nom Utilisateur</label>
                <input type="text" name="nom" class="form-control" id="lastName" placeholder="" value="<?= getInput('nom') ?>" >
              </div>

              <div class="col-sm-12">
                <label for="lastName"  class="form-label">Numéro Paiement</label>
                <input type="password" name="numpaie" class="form-control" id="lastName" placeholder="" value="">
              </div>
            </div>
          <hr class="my-4">
          <input type="submit" class="w-100 btn btn-primary btn-lg" name="submit" value="Valider">
      <div class="text-center">
        <p class="compte">Numéro paiement oublié ? <a href="connecter.php">Restaurer</a></p>
      </div>
</form>
    </section>
    <?php include('partials/footer.php'); ?>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="form-validation.js"></script>
</body>
</html>