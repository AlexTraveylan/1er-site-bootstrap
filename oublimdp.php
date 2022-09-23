<?php include './config/debut.php'; ?>

<body>


  <div class="container">

    <div class="row">
      <div class="col-12">
        <img class="rounded mx-auto d-block" src="assets/undraw_Forgot_password_re_hxwm(1).png" height="200px">
      </div>
    </div>

    <div class=row>
      <div class="col p-4 bg-1">
        <form action="" method="post">
          <div class="mb-3">
            <label for="reintmdp" class="form-label text-light">Email de connexion à reinitialiser :</label>
            <input type="email" class="form-control" name="reintmdp">
          </div>
          <button type="submit" class="btn btn-secondary">Valider</button>
          </fieldset>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <img class="rounded mx-auto d-block" src="assets/undraw_access_denied_re_awnf(1).png" height="200px">
      </div>
    </div>


    <?php
    if (isset($_POST['reintmdp'])) {
      $email = htmlspecialchars($_POST['reintmdp']);
      $recupUser = $db->prepare('SELECT * FROM utilisateurs WHERE email = ?');
      $recupUser->execute([$email]);
      $userInfos = $recupUser->fetchAll();
      if (count($userInfos) != 0) {
        $newmdp = rand(100, 999) . '&a*' . rand(1000, 9999) . 'hD!';
        $modifmdp = $db->prepare('UPDATE utilisateurs SET password = ? WHERE email = ?');
        $modifmdp->execute([password_hash($newmdp, PASSWORD_DEFAULT, ['cost' => 14]), $email]);

        $from = 'ne-pas-repondre@parent-nelson-mandela.xyz';
        $to = $email;
        $subject = 'Email de confirmation de compte';
        $headers[] = 'MIME-Version:1.0';
        $headers[] = 'From:' . $from;
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'Association de parents de l\'école Nelson Mandela';
        $msg = 'Email de connexion : ' . $email . '  Mot de passe provisoire : ' . $newmdp . '
         Changez le !   : ' . $dossier . 'register.php';
        mail($to, $subject, $msg, 'From:' . $from);
        echo ('<br><p class="text-3">Email envoyé</p>');
      } else {
        echo ('<br><p class="text-5">L\'email n\'existe pas dans la base de donnée . </p><a class="text-5" href="register.php">Cliquer ici pour créer un compte.</a>');
      }
    }

    ?>
  </div>
  </section>
</body>

<?php include './headers/footer.php'; ?>

</html>