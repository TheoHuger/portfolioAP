<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Portfolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Accueil<br></a></li>
          <li><a href="#about">À propos de moi</a></li>
          <?php if (!isset($_SESSION["login"])) { ?>
            <li class="nav-item"><a class="nav-link" href="index.php?uc=creationcompte">Créer un compte</li>
            <li class="nav-item"><a class="nav-link" href="index.php?uc=authentification&action=se_connecter">Se connecter<span class="bi bi-box-arrow-in-left"></span></a></li>
          <?php } ?>
          
          <?php if (isset($_SESSION["login"])) { ?>
                <li><a href="#resume">Mon Parcours</a></li>
                <li><a href="#services">Mes Compétences</a></li>
                <li><a href="#portfolio">Mes Certifications</a></li>
                <li><a href="#contact">Contact</a></li>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><span class="bi-person-fill"></span>
                    <?php echo " " . $_SESSION["login"]; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?uc=authentification&action=se_deconnecter">Se déconnecter<span class="bi-box-arrow-in-right"></span></a></li>
                <?php } ?>
        </ul>


        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
</header>