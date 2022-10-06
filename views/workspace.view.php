<?php $title = "Workspace "; ?>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>

  <?php
    echo isset($title)
        ? $title.'- '.WEBSITE_NAME 
        :  WEBSITE_NAME. '- Premium Soft';
  ?>

  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/profil.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/Kanban.css">

</head>

<body>
    <div class="container">
    <header class="p-3 mb-3 border-bottom sticky">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="profil.php"><button type="button" class="btn btn-dark m-2" >Retour</button></a></li>
            <li><button type="button" class="btn btn-primary m-2" >Inviter membre</button></li>
            <li><button type="button" class="btn btn-primary m-2" >Télécharger Canvas</button></li>
        </ul>
        <div class="dropdown text-end">
            <a href="profil.php">
            <img src="assets/img/portfolio/anonyme.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
            <img src="assets/img/portfolio/anonyme.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
            <img src="assets/img/portfolio/anonyme.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
    <div class="port">
      <div class="todo-container">
        <div class="etat">
          <p class="title">Backlog/idées</p>
          <div class="todo">
            <p class="text">Gérer projet</p>
            <span class="close">&times;</span>
            <p class="user">Par Alipana...</p>
          </div>
          <button id="add_btn">+ Ajouter tâche</button>
        </div>
        <div class="etat">
          <p class="title">A faire</p>
          <button id="add_btn">+ Ajouter tâche</button>
        </div>
        <div class="etat">
          <p class="title">En cours</p>
          <button id="add_btn">+ Ajouter tâche</button>
        </div>
        <div class="etat">
          <p class="title">Réalisé</p>
          <button id="add_btn">+ Ajouter tâche</button>
        </div>
      </div>
      <div class="chatbox">
        <p class="chat">Discussions</p>
      </div>
    </div>
  </div>
  <script src="assets/kanban/js/main.js" type="module"></script>
</body>