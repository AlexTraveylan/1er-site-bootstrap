<?php include './config/debut.php'; ?>

<body>
  <div class="container-fluid">

    <div class="row">
      <div class="col bg-1">
        <h1 class="text-center text-light"><strong>Contactez-nous ici directement </strong></h1>
        <p class="fs-6 text-center text-light">(si vous êtes connecté avec un compte)</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <img class="rounded mx-auto d-block" src="assets/undraw_Access_account_re_8spm.png" height="200px">
      </div>
    </div>

    <?php if (isset($_SESSION['confirme']) && $_SESSION['confirme']) : ?>

      <div class="row">
        <div class="col-12 p-4 bg-1">
          <h3 class="text-light"><strong>Envoyez un message à l'adminisateur du site :</strong></h3>

          <form action="" method="post" class="registerform">
            <div class="mb-3">
              <label for="mess" class="text-light py-1">Ecrire un message :</label>
              <textarea class="form-control" name="mess" cols="45" rows="10" placeholder="Bonjour, "></textarea>
            </div>

            <?php if (isset($_POST['mess'])) {
              $date = date("d-m-Y H:i:s");
              $mess = htmlspecialchars($_POST['mess']);
              echo ('<p class="text-success">Votre message a bien été reçu ! Nous vous enverons la réponse sur votre e-mail de connexion.</p>');
              $ajoutmessage = $db->prepare('INSERT INTO contact (message, user_id, date) VALUES (?,?,?)');
              $ajoutmessage->execute([$mess, $_SESSION['user_id'], $date]);
            } else {
              echo ('<button type="submit" class="btn btn-secondary">Envoyer le message</button>');
            }
            ?>
          </form>
        </div>
      </div>

    <?php else : ?>

      <div class="row">
        <div class="col text-center bg-2 p-4">
          <h4 class="text-5">Vous n'êtes pas connecté :</h4>
          <p class="text-light">Connectez vous en cliquant <a class="text-5" href="register.php">ici</a> ou envoyez un e-mail à l'adresse en bas de page.</p>

        </div>

      </div>
    <?php endif ?>

  </div>



</body>

<?php include './headers/footer.php'; ?>

</html>