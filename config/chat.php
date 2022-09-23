    <?php
    $recupchat2 = $db->prepare('SELECT * FROM chat INNER JOIN utilisateurs ON chat.user_id = utilisateurs.user_id');
    $recupchat2->execute();
    $recuperedchat2 = $recupchat2->fetchAll();

    $nbmessage = count($recuperedchat2) - 1; // nombre de message dans la base donnée
    ?>
    <div class="col-12 col-md-6 p-3 bg-1">

      <?php
      if (isset($_GET['p'])) {
        $page = htmlspecialchars($_GET['p']);
      } else {
        $page = 1;
      }
      $pagemin = ($page - 1) * 10;
      $pagemax = $page * 10 - 1;

      for ($i = $pagemin; $i <= min($pagemax, $nbmessage); $i++) {
        //Envoie des 50 derniers messages de la bases de données, 10 par page.
        echo ('<div><p class="text-light">De : <strong>' . $recuperedchat2[$nbmessage - $i]['nom'] . ' ' . $recuperedchat2[$nbmessage - $i]['prenom'] .
          '</strong>    <span class="chat-modif">(' . $recuperedchat2[$nbmessage - $i]['date'] . ')</span></p><p class="text-black"><em>' . $recuperedchat2[$nbmessage - $i]['message'] . '</em></p>');

        //acces à la modification/suppression si bon mot de passe, message non supprimé, et utilisateur non banni.
        if (($recuperedchat2[$nbmessage - $i]['user_id']) == ($_SESSION['user_id']) && !($recuperedchat2[$nbmessage - $i]['supp']) && !($recuperedchat2[$nbmessage - $i]['ban'])) {
          $id = $recuperedchat2[$nbmessage - $i]['message_id']; // id contient le message_id
          echo ('<p class="chat-modif"><a href="modifiermessage.php?id=' . $id . '" class="text-warning">Modifier</a>'); //envoie du message_id par l'URL pour modification
          echo ('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="supprimermessage.php?id=' . $id . '" class="text-danger">Supprimer</a></p></div>'); //envoie du message_id par l'URL pour suppression
        } else {
          echo ('</div>');
        }
      }

      ?>

    </div>