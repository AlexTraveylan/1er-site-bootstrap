<?php include './config/debut.php'; ?>

<body>

  <div class="container">

    <div class="row">
      <div class="col-12">
        <img class="rounded mx-auto d-block" src="assets/undraw_Access_account_re_8spm.png" height="200px">
      </div>
    </div>

    <div class="row">
      <div class='col bg-1 p-4'>
        <h1 class="text-light"><strong>Connexion :</strong> <span class="fs-6">(Si vous avez déjà un compte)</span></h1>
        <form action="verif.php" method="post">
          <div class="mb-3">
            <label for="email" class="form-label text-light">Email de connexion :</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-light">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password">
            <p class="chat-modif p-1">Mot de passe oublié ? <a href="oublimdp.php" class=" chat-modif">Cliquez ici !</a></p>
          </div>
          <div class="py-2">
            <button type="submit" class="btn btn-secondary">Se connecter</button>
          </div>
          <?php include './headers/echec.php'; ?>
        </form>
      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <img class="rounded mx-auto d-block" src="assets/undraw_Connection_re_lcud.png" height="200px">
      </div>
    </div>

    <div class="row">
      <div class='col bg-2 p-4'>
        <h1 class="text-light"><strong>Création d'un compte :</strong></h1>
        <form action="valide.php" method="post">
          <div class="mb-3">
            <label for="nom" class="form-label text-light">Nom :</label>
            <input class="form-control" type="text" name="nom" id="nom">
          </div>
          <div class="mb-3">
            <label for="prenom" class="form-label text-light">Prénom :</label>
            <input class="form-control" type="text" name="prenom" id="prenom">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label text-light">Email de connexion :</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-light">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-secondary">Créer un compte</button>
        </form>
      </div>
    </div>


  </div>
</body>

<?php include './headers/footer.php'; ?>

</html>