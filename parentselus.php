<?php include './config/debut.php'; ?>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 bg-1">
                <h1 class="text-center text-light"><strong>Compte rendu des conseils d'école</strong></h1>
                <h5 class="text-center text-light py-3">Compte rendu n°1 du mardi 28 juin 18h (Prise de note rapide sans relecture) :
                </h5>
                <p class="text-center"><a class="text-4" href="assets/conseil3.pdf" target="blank_"> Compte rendu en pdf</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img class="rounded mx-auto d-block" src="assets/undraw_data_reports_706v.png" height="200px">
            </div>
        </div>

        <div class="row">
            <div class="col-12 bg-1 p-4">
                <h3 class="text-center text-light py-3"><strong>Résumé des points essentiels :</strong></h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-1 text-light"> Les enseignants ont organisé énormement de sorties et de projets cette année, cela leur a demandé beaucoup d'efforts et beaucoup de temps personnel,
                        ils comptent sur les parents pour de l'aide et de l'investissement pour les aider à l'organisation dans les prochaines années, sans ce soutien, ils
                        n'auront plus l'energie ni la motivation de le faire au detriment de leur vie personnelle.
                    </li>
                    <li class="list-group-item bg-1 text-light">
                        Des travaux de sécurité seront effectués pendants les vacances scolaires particulierement pour sécuriser la cour de maternelle.
                    </li>
                    <li class="list-group-item bg-1 text-light">
                        L'entrée de l'école est trop petite pour les 250 élèves, les elementaires devront rentrer dans la cour par le couloir qui longe le college.
                    </li>
                    <li class="list-group-item bg-1 text-light">
                        L'année prochaine le local vélo, prévu initialement uniquement pour le personnel, ne pourra plus être utilisé par les élèves.
                    </li>
                    <li class="list-group-item bg-1 text-light">
                        Probleme avec la rue et les voitures mal garés. Qui rend très difficile les sorties scolaires en bus scolaire.
                        Il est possible de rendre la rue pietonne le matin, ils ont le matériel mais pas assez d'agents pour le faire. Et ce n'est pas leur métier.
                    </li>
                    <li class="list-group-item bg-1 text-light">
                        Sarah Bernhardt a effectué des actions très appréciés, particulierement pour la liaison CM2 / 6eme.
                    </li>
                    <li class="list-group-item bg-1 text-light">
                        Les enseignants ont souligné que la majorité des parents attendent toujours le dernier moment pour apporter les documents ou matériels demandés,
                        ce qui est une source de stress pour eux, qu'ils interpretent comme un manque d'implication des parents. Ce qui les découragent
                        dans leurs demarches de proposer des activités interessantes pour nos enfants.
                    </li>
                    <li class="list-group-item bg-1 text-light">
                        Pour ouvrir le self à la cantine en élémentaire, ils ont besoin de 9 agents. Ils en ont que 7. Sans action des parents auprès de la mairie
                        pour demander ces agents, le self restera fermé.
                    </li>
                    <li class="list-group-item bg-1 text-warning"><strong>Les parents peuvent agir pour </strong> :
                        <ol class="list-group list-group-numbered list-group-flush py-2">
                            <li class="list-group-item bg-1 text-light">Accelerer les travaux de sécurité du batiment aupres de la mairie</li>
                            <li class="list-group-item bg-1 text-light">Demander plus de personnel de la marie pour augmenter la sécurité de la rue et ouvrir le self</li>
                            <li class="list-group-item bg-1 text-light">Exiger que les enseignants absents soient remplacés par du personnel remplacant de l'education nationale, particulierement
                                pour celles qui sont prévisibles (Ex : Sejour à l'hopital programmé, maternité)</li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img class="rounded mx-auto d-block" src="assets/undraw_Share_opinion_re_4qk7.png" height="200px">
            </div>
        </div>

        <?php if (isset($_SESSION['confirme']) && ($_SESSION['confirme'] == 1)) : ?>

            <?php
            $isban = $db->prepare('SELECT * FROM utilisateurs WHERE user_id=?');
            $isban->execute([$_SESSION['user_id']]);
            $isbaned = $isban->fetch();
            if (!$isbaned['ban']) : ?>

                <div class="row">
                    <div class="col-12 col-md-6 bg-2 p-3 justify-content-center">
                        <h3 class="text-center text-light"><strong>Vous pouvez en discuter ici :</strong></h3>
                        <form class="" action="configchat.php" method="post" id="form1" name="form1">
                            <div class="mb-3">
                                <label for="form1" class="mb-1 text-light">Ecrire un message :</label>
                                <textarea class="form-control" id="form1" rows="3" name="mess" placeholder="Exprimez-vous ici :" required onkeypress="validerForm(event);"></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary">Envoyer</button>
                        </form>
                    </div>


                    <?php include('./config/chat.php'); ?>
                </div>

            <?php else : ?>

                <div class="row">
                    <div class="col-12 col-md-6 bg-2 p-3">
                        <form class="">
                            <div class="mb-3">
                                <label for="form1" class="mb-1 text-light py-1">Ecrire un message :</label>
                                <textarea class="form-control" rows="3" placeholder="Vous avez été banni par un adminstrateur pour le motif suivant : <?php echo ($isbaned['motif']); ?>"></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary">Envoyer</button>
                        </form>
                    </div>



                    <?php include('./config/chat.php'); ?>
                </div>

            <?php endif; ?>

    </div>



<?php else : ?>

    <div class="row">
        <div class="col-12 bg-1 p-4 text-center">
            <p class="text-5">
                Connectez vous sur le site pour faire des commentaires ou poser des questions.
            </p>
        </div>
    </div>

<?php endif; ?>

</body>

<?php include './headers/footer.php'; ?>

</html>