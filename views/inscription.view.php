
<?php $title = "Créer compte " ?>
<?php include('partials/header.php'); ?>


<body>
      <section id="contact" class="contact"> 
        <div class="container center-div" data-aos="fada-up">
        <form method="POST" autocomplete="off" >   
       
          <div class="formule">
          <div class="section-title" data-aos="fade-up">
            <h2>Créer compte</h2>
          </div>
          <form class="needs-validation">
            <div class="row g-3">
            <?php include("partials/errors.php") ?>
              <div class="col-sm-12">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control"  id="nom" name="nom" placeholder="" value="<?= getInput('nom') ?>" >
              </div>

              <div class="col-sm-8">
                <label for="postnom" class="form-label">Postnom</label>
                <input type="text" class="form-control" id="postnom" name="postnom" placeholder="" value="<?= getInput('postnom') ?>" >
              </div>

              <div class="col-sm-4">
                <label for="Sexe" class="form-label"  >Sexe</label>
                <select class="form-select" id="sexe" name="sexe"  value="<?= getInput('sexe') ?>">
                <option value="">Choisir...</option>                
                <option>F</option>
                <option>M</option>
              </select>
              </div>

              <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Genius@gmail.com" value="<?= getInput('email') ?>">
            </div>

            <div class="col-md-6">
              <label for="promotion" class="form-label" >Promotion</label>
              <select class="form-select" id="promotion" name="promotion" value="<?= getInput('sexe') ?>" >
                <option value="">Choisir...</option>
                <option>United States</option>
              </select>
            </div>

            <div class="col-sm-6">
                <label for="numerorecu" class="form-label" >Numéro Paiement</label>
                <input type="password" class="form-control" id="numerorecu" name="numpaie" placeholder="" value="" >
              </div>
            </div>
          <hr class="my-4">
      <input class="w-100 btn btn-primary btn-lg" name="submit" type="submit" value="valider">
      <div class="text-center">
        <p class="compte">Vous avez dejà un compte ? <a href="connecter.php">Se connecter</a></p>
      </div>
</form>
    </section>
    <?php include('partials/footer.php'); ?>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="form-validation.js"></script>
</body>
</html>