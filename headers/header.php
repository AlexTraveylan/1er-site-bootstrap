<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-body fixed-top">
    <div class="container-fluid text-end">
      <a class="navbar-brand col-4" href="index.php"><img src="assets/LogoAsso-removebg-preview.png" alt="LogoAsso" width="180px"></a>
      <div class="p-3">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end p-3" id="navbarNav">
        <ul class="navbar-nav">
          <?php if (!isset($_SESSION['confirme']) || !$_SESSION['confirme']) : ?>
            <li class="nav-item"><a class="nav-link" href="register.php">Se connecter</a></li>
          <?php else : ?>
            <li class="nav-item"><a class="nav-link" href="modifiercompte.php"><span class="text-1">Bonjour</span> <span class="bg-1 bg-gradient p-1 rounded-3 text-light"><?php echo ($_SESSION['prenom']) ?></span></a></li>
            </li>
          <?php endif ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Page d'acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ensuite.php">Idées et membres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="parentselus.php">Parents élus</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</header>