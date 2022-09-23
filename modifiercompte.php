<?php include './config/debut.php'; ?>

<body>

    <div class="row">
        <div class="col-12">
            <img class="rounded mx-auto d-block" src="assets/undraw_Account_re_o7id.png" height="200px">
        </div>
    </div>

    <?php if ((isset($_SESSION['confirme'])) && ($_SESSION['confirme'] == 1)) : ?>

        <div class="row">
            <div class="col-12 text-center bg-1 p-4">
                <p>
                    Vous êtes connecté en tant que <strong><?php echo ($_SESSION['prenom']) . ' ' . $_SESSION['nom'] ?>. <a href="deconect.php" class="text-light">(Déconnexion)</a></strong>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img class="rounded mx-auto d-block" src="assets/undraw_My_password_re_ydq7.png" height="200px">
            </div>
        </div>

        <div class="row">
            <div class="col-12 py-5 bg-1 p-4">
                <h1 class="text-light"><strong>Modifier le mot de passe :</strong></h1>

                <form action="exemodifiercompte.php" method="post">

                    <div class="mb-3">
                        <label for="amdp" class="form-label text-light">Ancien mot de passe :</label>
                        <input type="password" class="form-control" name="amdp" id="amdp">
                    </div>

                    <div class="mb-3">
                        <label for="nmdp" class="form-label text-light">Nouveau mot de passe :</label>
                        <input type="password" class="form-control" name="nmdp" id="nmdp">
                    </div>

                    <button type="submit" class="btn btn-secondary">Valider</button>

                    <?php
                    if (isset($_SESSION['newmdp']) && $_SESSION['newmdp'] == 1) {
                        echo ('<p class="text-4">Votre mot de passe a été modifié avec succès.</p>');
                    } elseif (isset($_SESSION['newmdp']) && $_SESSION['newmdp'] == 0) {
                        echo ('<p class="text-5">Ancien mot de passe incorrect. Aucune modification.</p>');
                    }
                    unset($_SESSION['newmdp']);
                    ?>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img class="rounded mx-auto d-block" src="assets/undraw_Domain_names_re_0uun.png" height="200px">
            </div>
        </div>

        <div class="row">
            <div class="col-12 py-5 bg-2 p-4">
                <h1 class="text-light"><strong>Modifier le nom :</strong></h1>

                <form action="exemodifiercompte.php" method="post">
                    <div class="mb-3">
                        <label for="nnom" class="form-label text-light">Nouveau nom :</label>
                        <input type="text" class="form-control" name="nnom" id="nnom">
                    </div>

                    <button type="submit" class="btn btn-secondary">Valider</button>

                    <?php
                    if (isset($_SESSION['newnom']) && $_SESSION['newnom'] == 1) {
                        echo ('<p class="text-4">Votre nom a été modifié avec succès.</p>');
                    }
                    unset($_SESSION['newnom']);
                    ?>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img class="rounded mx-auto d-block" src="assets/undraw_Editable_re_4l94.png" height="200px">
            </div>
        </div>

        <div class="row">
            <div class="col-12 py-5 bg-2 p-4">
                <h1 class="text-light"><strong>Modifier le prénom :</strong></h5>

                    <form action="exemodifiercompte.php" method="post">

                        <div class="mb-3">
                            <label for="nprenom" class="form-label text-light">Nouveau prénom :</label>
                            <input type="text" class="form-control" name="nprenom" id="nprenom">
                        </div>

                        <button type="submit" class="btn btn-secondary">Valider</button>

                        <?php
                        if (isset($_SESSION['newprenom']) && $_SESSION['newprenom'] == 1) {
                            echo ('<p class="text-4">Votre prenom a été modifié avec succès.</p>');
                        }
                        unset($_SESSION['newprenom']);
                        ?>

                    </form>
            </div>
        </div>

    <?php else : ?>

        <div class="row">
            <div class="col">
                <h5 class="text-decoration-underline">Que faites-vous ici ?</h5>
                <p class="text-danger"> Vous devez avoir un compte et être connecté pour le modifier.</p>
            </div>
        </div>

    <?php endif ?>

    </div>

    <?php include './headers/footer.php'; ?>

    </html>