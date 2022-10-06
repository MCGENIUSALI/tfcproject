
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><?= WEBSITE_NAME; ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <?php if($title == "Accueil "): ?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="">Workspace</a></li>
          <li><a class="getstarted scrollto" href="connecter.php">Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


      <?php elseif($title == "Se connecter "): ?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="">Workspace</a></li>
          <li><a class="getstarted scrollto active" href="connecter.php">Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


      <?php elseif($title == "Workspace "): ?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto active" href="">Workspace</a></li>
          <li><a class="getstarted scrollto" href="connecter.php">Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php else: ?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto " href="">Workspace</a></li>
          <li><a class="getstarted scrollto" href="connecter.php">Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php endif; ?>
    </div>
  </header><!-- End Header -->
