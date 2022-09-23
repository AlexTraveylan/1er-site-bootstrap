<?php include './config/debut.php'; ?>

<body>
    <div class="row">
        <div class="col bg-1 text-center p-4">
            <?php
            if (isset($_SESSION['user_id'])) {
                $recupUser = $db->prepare('SELECT * FROM utilisateurs WHERE user_id = ?');
                $recupUser->execute([$_SESSION['user_id']]);
                // if($recupUser->rowcount() > 0){
                $userInfos = $recupUser->fetch();
                $email = $userInfos['email'];
                $lien = $dossier . 'verifmail.php?id=' . $_SESSION['user_id'] . '&clef=' . $userInfos['clef'];

                // include 'function.php';

                // $to   = $email;
                // $from = 'ne-pas-repondre@parent-nelson-mandela.xyz';
                // $name = 'Association de parents de l\'école Nelson Mandela';
                // $subj = 'Email de confirmation de compte';
                // $msg = '<a href=' . $lien . '>' . $lien .'</a>';

                // $error=smtpmailer($to,$from, $name ,$subj, $msg);

                $from = 'ne-pas-repondre@parent-nelson-mandela.xyz';
                $to = $email;
                $subject = 'Email de confirmation de compte';
                $message = $lien;
                $headers = 'From:' . $from;
                mail($to, $subject, $message, $headers);
                echo ('<p class=text-light">Un e-mail, vous a été envoyé pour confirmer votre compte, vérifiez vos <strong>spams</strong>.<p>');
                echo ('<p><a href="renvoimail.php">Envoyer un autre email de confirmation.</a></p>');
            } else {
                header('Location: ' . $dossier . 'index.php');
                exit();
            }
            ?>
        </div>
    </div>
</body>

<?php include './headers/footer.php'; ?>

</html>