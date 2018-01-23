<!--***************************************************************page2.php = page cours MySQL *****************************************************************************-->

<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// variables de session dans $_SESSION
$_SESSION['prenom'] = 'Nathalie';
$_SESSION['nom'] = 'Roussel';
$_SESSION['age'] = 47;
setcookie('pseudo', 'naty24', time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'Périgueux', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
?>
    <!-----**********Fin code PHP (session et cookies) **********----->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Un site de démonstration | N.Roussel</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/prism.css" rel="stylesheet" />
        <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>


    <body>


        <!-----**********Début Présentation page2.php **********----->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Le langage SQL et la base de données</h1>
                <p class="lead">Alors que les variables en PHP stocke des données temporairement, une base de données (BDD) permet d'enregistrer des données de façon organisée et hiérarchisée sans limite de temps.</p>
                <p>MySQL est un système de gestion de bases de données libre et gratuit, le plus utilisé. </p>
                <hr class="m-y-md">
                <p>L'essentiel des fonctionnalités de SQL et son utilisation, sont réunis ici.</p>
                <p class="lead">
                    <a class="btn btn-success btn-lg" href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/presentation-des-bases-de-donnees-2" role="button">Voir le cours Openclassrooms</a>
                </p>
            </div>
        </div>
        <!-----**********Fin Présentation page2.php **********----->


        <!-----**********Menu de navigation page2.php **********----->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand " href="index.html">Home</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#structure_bdd">Structure base de données</a></li>
                    <li><a href="#section_pdo">PDO</a></li>
                    <li><a href="#tableaux">Tableaux</a></li>
                    <li><a href="#fonctions">Fonctions</a></li>
                    <li><a href="#get">GET</a></li>
                    <li><a href="#post">POST</a></li>
                    <li><a href="#sessions">Sessions</a></li>
                    <li><a href="#cookies">Cookies</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">TP COURS<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#mdp">Page protégée par mot de passe</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-----**********/Menu de navigation page2.php **********----->

        <!-----**********Début section structure des bases de données **********----->
        <section id="structure_bdd">
            <div class="jumbotron text-center">
                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <h1>Structure d'une base de données</h1>
                            <P>Les bases doivent être crées dans phpMyAdmin.</P>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#sections_bdd">Les différentes sections à définir </a></li>
                        <li><a data-toggle="tab" href="#types_bdd">Les types de champs</a></li>
                        <li><a data-toggle="tab" href="#cle_primaire">Les clés primaires</a></li>
                    </ul>


                    <!--**********Début des champs des bases de données **********-->
                    <div class="tab-content">
                        <div id="sections_bdd" class="tab-pane fade in active">
                            <br>
                            <p>
                                <span class="title-content">Champ</span>
                            </p>
                            <h4>Permet de définir le nom du champ (très important !)</h4>
                            <br>
                            <p>
                                <span class="title-content">Type</span>
                            </p>
                            <h4>Permet de définir le type de données que va stocker le champ (nombre entier, texte, date…)</h4>
                            <br>
                            <p>
                                <span class="title-content">Taille/Valeur</span>
                            </p>
                            <h4>Permet d'indiquer la taille maximale du champ, utile pour le type VARCHAR notamment, afin de limiter le nombre de caractères autorisés.</h4>
                            <br>
                            <p>
                                <span class="title-content">Index</span>
                            </p>
                            <h4>Active l'indexation du champ : le champ sera adapté aux recherches.<br> Le plus souvent, on utilise l'index <strong>PRIMARY</strong> sur les champs de type <strong>id</strong>.</h4>
                            <br>
                            <p>
                                <span class="title-content">AUTO_INCREMENT</span>
                            </p>
                            <h4> Permet au champ de s'incrémenter tout seul à chaque nouvelle entrée.<br> On l'utilise fréquemment sur les champs de type<strong>id</strong>.</h4>
                        </div>
                        <!--**********Fin Les champs des bases de données **********-->


                        <!--**********Début les types de champs des bases de données **********-->
                        <div id="types_bdd" class="tab-pane fade">
                            <br>
                            <p>
                                <span class="title-content">INT</span>
                            </p>
                            <h4>Permet de définir un nombre entier.</h4>
                            <br>
                            <p>
                                <span class="title-content">VARCHAR</span>
                            </p>
                            <h4>Contient du texte court (entre 1 et 255 caractères). Il faut limiter le champs à 255 caractères maximum par défaut.</h4>
                            <br>
                            <p>
                                <span class="title-content">TEXT</span>
                            </p>
                            <h4>Contient du texte long sans limite de caractères.</h4>
                            <br>
                            <p>
                                <span class="title-content">DATE</span>
                            </p>
                            <h4>Contient une date (jour, mois, année).</h4>
                            <br>
                            <p>
                        </div>
                        <!--**********Fin Les types de champs des bases de données**********-->

                        <!--**********Début les clés primaires **********-->
                        <div id="cle_primaire" class="tab-pane fade">
                            <br>
                            <p>
                                <span class="title-content">Les clés primaires </span>
                            </p>
                            <h4>Elles permettent d'identifier de manière unique une entrée dans la table. <br>En général, on utilise le champ <strong>id</strong> comme clé primaire.<br> Chaque table doit possèder sa clé primaire, c'est pour cela qu'il est important de créer un champs ID en lui donnant l'index <strong>PRIMARY.</strong> <br> On coche également la case <strong>AUTO_INCREMENT </strong>afin que ce champ gère lui-même les nouvelles valeurs automatiquement (1, 2, 3, 4…).</h4>
                            <br>
                            <img src="images/captures/creation_table.JPG">
                        </div>
                        <!--**********Fin les clés primaires **********-->
                    </div>
                </div>


                <!-----**********Début section pdo **********----->
                <section id="section_pdo">
                    <div class="jumbotron text-center">
                        <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="row">
                                <div class="text-center col-sm-8 col-sm-offset-2">
                                    <h1>Se connecter à MySQL avec PDO</h1>
                                    <P>Il faut activer et paramètrer l'extention PDO dans Wamp (PDO = extension orientée objet)</P>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#activation_pdo"> Activation PDO (en local)</a></li>
                                <li><a data-toggle="tab" href="#objet_bdd">Ligne de code (objet $bdd)</a></li>
                            </ul>


                            <!--********** Début activation pdo **********-->
                            <div class="tab-content">
                                <div id="activation_pdo" class="tab-pane fade in active">
                                    <br>
                                    <p>
                                        <span class="title-content">Nom de l'hôte (localhost)</span>
                                    </p>
                                    <h4>C'est l'adresse de l'ordinateur où MySQL est installé (comme une adresse IP).<br> Le plus souvent, MySQL est installé sur le même ordinateur que PHP : dans ce cas, mettez la valeur <strong>localhost</strong>.<br> Néanmoins, il est possible que votre hébergeur web vous indique une autre valeur à renseigner (qui ressemblerait à ceci:sql.hebergeur.com). Dans ce cas, il faudra modifier cette valeur lorsque vous enverrez votre site sur le Web.</h4>
                                    <br>
                                    <p>
                                        <span class="title-content">La base (nom de la base de données)</span>
                                    </p>
                                    <h4>C'est le nom de la base de données à laquelle vous voulez vous connecter. </h4>
                                    <br>
                                    <p>
                                        <span class="title-content">Le login (root)</span>
                                    </p>
                                    <h4>Il permet de vous identifier. Renseignez-vous auprès de votre hébergeur pour le connaître. Le plus souvent (chez un hébergeur gratuit), c'est le même login que vous utilisez pour le FTP.</h4>
                                    <br>
                                    <p>
                                        <span class="title-content">Le mot de passe (aucun)</span>
                                    </p>
                                    <h4> Il y a des chances pour que le mot de passe soit le même que celui que vous utilisez pour accéder au FTP. Renseignez-vous auprès de votre hébergeur.</h4>
                                    <br>
                                    <!--**********Fin activation pdo **********-->
                                </div>

                                <!--********** Début objet_bdd **********-->
                                <div id="objet_bdd" class="tab-pane fade">
                                    <br>
                                    <h4>Cette ligne de code est ce qu'on appelle un <strong>objet $bdd</strong>.<br> Ce n'est pas vraiment une variable : c'est un objet qui représente la connexion de PHP à la base de données.<br> On crée la connexion en indiquant dans l'ordre dans les paramètres : nom de l'hôte, nom de la base, login et mot de passe.</h4>
                                    <br>
                                    <p>
                                        <img src="images/captures/activation_pdo.JPG">
                                    </p>
                                </div>
                                <!--**********Fin objet_bdd **********-->
                            </div>
                        </div>
                        <!--********** Fin section pdo **********-->




                        <!-----**********Début section boucles_for **********----->
                        <section id="boucles_for">
                            <div class="jumbotron text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center col-sm-8 col-sm-offset-2">
                                            <h1>Les boucles complexes (Boucles for)</h1>
                                            <p class="text-danger">Identique à WHILE, <strong>FOR</strong> rassemble sur une même ligne tout ce qu'il faut savoir sur le fonctionnement de la boucle.</p>
                                            <h3>Composée de 3 éléments sur une même ligne : L'initialisation <em>(valeur de départ à la variable)</em>, La condition <em>(la boucle se réexécute tant que la condition est remplie)</em>, L'incrémentation <em>(permet d'ajouter 1 à la variable à chaque tour de boucle)</em>.</h3>
                                            <p class="bg-warning text-white"> Utiliser FOR quand on sait d'avance combien de fois on veut que les instructions soient répétées.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Début Boucle for (exemple 1: répéter une même ligne avec des valeurs différentes)-->
                                <div class="text-center our-services">
                                    <div class="row">
                                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="service-icon">
                                                <i class="fa fa-circle-o"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Boucle For <br>(exemple 1)</h3>
                                                <p>Répéter une même ligne avec une valeur différente</p>
                                                <a href="php/boucle_for.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/boucle_for.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin Boucle for (exemple 1 : répéter une même ligne avec des valeurs différentes-->

                                        <!--/Début Boucle for (exemple 2 : Génération table de mutliplication du chiffre 9)-->
                                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                                            <div class="service-icon">
                                                <i class="fa fa-circle-thin"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Boucle For<br> (Exemple 2)</h3>
                                                <p> Générer la table de multiplication du chiffre 9</p>
                                                <a href="php/boucle_for_exemple2.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/boucle_for_exemple2JPG.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin Boucle for (exemple 2 : Génération table de mutliplication du chiffre 9)-->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-----**********Fin section boucles_for **********----->
                        <!-----**********Début section tableaux **********----->
                        <section id="tableaux">
                            <div class="jumbotron text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center col-sm-8 col-sm-offset-2">
                                            <h1>Les tableaux</h1>
                                            <h3>Un tableau (aussi appelé Array) est une variable un peu spéciale. </h3>
                                            <p>Grâce aux tableaux, il est possible d'enregistrer de nombreuses informations dans une seule variable.</p>
                                            <p class="bg-primary text white"> Il existe deux types de tableaux ; numérotés et associatifs</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Début tableaux numérotés (Array)-->
                                <div class="text-center our-services">
                                    <div class="row">
                                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="service-icon">
                                                <i class="fa fa-table"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Les tableaux numérotés<br> (Un array numéroté commence toujours à la case 0 !)</h3>
                                                <p> Tableau de la composition de notre famille. Afficher contenu de la case n°4</p>
                                                <a href="php/tableau_numerote_array.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/tableau_numerote_array.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin tableaux numérotés (Array)-->

                                        <!--/Début tableaux associatifs (Array) -->
                                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                                            <div class="service-icon">
                                                <i class="fa fa-tags"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Les tableaux associatifs<br> (Les cases sont étiquettées et non numérotées)</h3>
                                                <p> Tableau de mes coordonnées. Afficher le contenu de la cas "ville".</p>
                                                <a href="php/tableau_associatif_array.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/tableau_associatif_array.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin tableaux associatifs (Array)-->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-----**********Fin section tableaux **********----->
                        <!-----**********Début section boucle_foreach **********----->
                        <section id="boucle_foreach">
                            <div class="jumbotron text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center col-sm-8 col-sm-offset-2">
                                            <h1>Boucles Foreach</h1>
                                            <h3>Ce sont des boucles for spécialisées dans les tableaux. </h3>
                                            <p>Foreach passe en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple $element).</p>
                                            <p class="bg-warning text-white"> Permet de parcourir tous les tableaux (numérotés et associatifs)</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Début tableaux numérotés (Array)-->
                                <div class="text-center our-services">
                                    <div class="row">
                                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="service-icon">
                                                <i class="fa fa-table"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Parcourir un tableau numéroté<br> (Afficher les valeurs)</h3>
                                                <p> Afficher tous les prénoms de notre famille</p>
                                                <a href="php/boucle_foreach_tableau-numerote.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/boucle_foreach_tableau_numerote.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin tableaux numérotés (Array)-->

                                        <!--/Début tableaux associatifs (Array) -->
                                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                                            <div class="service-icon">
                                                <i class="fa fa-tags"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Parcourir un tableau associatif<br> (Afficher les valeurs)</h3>
                                                <p> Tableau de mes coordonnées. Afficher mes coordonnées complètes</p>
                                                <a href="php/boucle_foreach_tableau_associatif.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/boucle_foreach_tableau_associatif.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin tableaux associatifs (Array)-->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-----**********Fin section boucle_foreach **********----->
                        <!-----**********Début section fonctions **********----->
                        <section id="fonctions">
                            <div class="jumbotron text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center col-sm-8 col-sm-offset-2">
                                            <h1>Les fonctions</h1>
                                            <h3>Ce sont comme des sous-programme, des procédures.</h3>
                                            <p> On distingue deux types de fonctions : les "fonctions intégrées" ou "built-in" qui sont incluses par défaut avec les distributions de PHP comme print, echo et les fonctions définies par le programmeur, dites aussi "fonctions utilisateur".</p><br>
                                            <a href="http://fr.php.net/manual/fr/funcref.php" button type="button" class="btn btn-info btn-md">Voir toutes les fonctions intégrées</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Début fonction strlen (comptage de caractères d'une chaine)------>
                                <div class="text-center our-services">
                                    <div class="row">
                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="service-icon">
                                                <i class="fa fa-hand-o-up"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Fonction strlen<br> (Compter le nombre de caractères)</h3>
                                                <p> Combien de caractères comporte cette phrase?</p>
                                                <a href="php/fonction_longueur_chaine.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/fonction_strlen.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin fonctions strlen (comptage de caractères d'une chaine) ------>

                                        <!--/Début fonction str_replace (rechercher et remplacer) -->
                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                                            <div class="service-icon">
                                                <i class="fa fa-eraser"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Fonction str_replace<br> (Rechercher et remplacer)</h3>
                                                <p> Remplacer les débuts des mots par des P et non des B</p>
                                                <a href="php/fonction_str_replace.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/fonction_str_replace.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin fonction str_replace (rechercher et remplacer-->

                                        <!--/Début fonction str_shuffle (mélange de lettres) -->
                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                                            <div class="service-icon">
                                                <i class="fa fa-retweet"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Fonction str_shuffle<br> (Mélanger des lettres aléatoirement)</h3>
                                                <p> Mélanger la phrase :"J'apprends le PHP en ce moment" </p>
                                                <a href="php/fonction_str_shuffle.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/fonction_str_shuffle.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin fonction str_shuffle (mélange de lettres) -->

                                        <!--/Début fonction strtolower (écrire en minuscule) -->
                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
                                            <div class="service-icon">
                                                <i class="fa fa-pencil-square"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Fonction strtolower<br> (Ecrire en minuscules)</h3>
                                                <p> "APPRENDRE LE PHP" va être mis en minuscules. </p>
                                                <a href="php/fonction_strtolower.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/fonction_strtolower.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin fonction strtolower (écrire en minuscule) -->

                                        <!--/Début fonction strtoupper (écrire en majuscules) -->
                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
                                            <div class="service-icon">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Fonction strtoupper<br> (Ecrire en majuscules)</h3>
                                                <p> "apprendre le php" va être mis en majuscules. </p>
                                                <a href="php/fonction_strtoupper.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/fonction_strtoupper.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin fonction strtoupper (écrire en majuscules) -->

                                        <!--/Début fonction date (renvoie la date et l'heure) -->
                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
                                            <div class="service-icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Fonction date<br> (Renvoi de la date et de l'heure)</h3>
                                                <p> Affiche la date et l'heure du jour </p>
                                                <a href="php/fonction_date.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                                <a href="images/exemples_de_code/PHP/fonction_date.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                            </div>
                                        </div>
                                        <!--/Fin fonction date (renvoie la date et l'heure) -->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-----**********Fin section fonctions **********----->
                        <!-----**********Début section get **********----->
                        <section id="get">
                            <div class="jumbotron text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center col-sm-8 col-sm-offset-2">
                                            <h1>Méthode #GET </h1>
                                            <h3>Récupére la valeur des variables par l'URL</h3>
                                            <p>La méthode GET est la valeur de méthode par défaut. On l'utilise de préférence sauf si on ne veut pas que les paramètres soient ajoutés à l'URL. La fonction isset()teste si une variable existe et permet d'afficher un message spécifique si celle-ci est absente de l'URL.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Début METHODE GET ------>
                                <div class="text-center our-services">
                                    <div class="row">
                                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="service-icon">
                                                <i class="fa fa-paper-plane"></i>
                                            </div>
                                            <div class="service-info">
                                                <h3>Méthode GET<br> (Ajoute les données à l'URL)</h3>
                                                <p><a href="bonjour.php?nom=Roussel&prenom=Nathalie">Dis-moi bonjour, les variables sont renseignées !</a></p>
                                                <a href="images/exemples_de_code/PHP/methode_get.JPG" class="btn btn-success" role="button">Code de la page1.php</a>
                                                <a href="images/exemples_de_code/PHP/bonjour.jpg" class="btn btn-danger" role="button">Code bonjour.php</a>
                                            </div>
                                        </div>
                                        <!--/Fin METHODE GET ------>


                                        <!--/Début METHODE GET avec isset ------>
                                        <div class="text-center our-services">
                                            <div class="row">
                                                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                                    <div class="service-icon">
                                                        <i class="fa fa-paper-plane-o"></i>
                                                    </div>
                                                    <div class="service-info">
                                                        <h3>Méthode GET avec fonction isset()<br> (Teste si une variable existe)</h3>
                                                        <p><a href="bonjour_avec_isset.php?">Dis-moi bonjour alors qu'il manque des variables!</a></p>
                                                        <a href="images/exemples_de_code/PHP/methode_get.JPG" class="btn btn-success" role="button">Code de la page1.php</a>
                                                        <a href="images/exemples_de_code/PHP/get_avec_isset.JPG" class="btn btn-danger" role="button">Code bonjour_avec_isset.php</a>
                                                    </div>
                                                </div>
                                                <!--/Fin METHODE GET avec isset------>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-----**********Fin section GET **********----->
                        <!-----**********Début section POST **********----->
                        <section id="post">
                            <div class="jumbotron text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center col-sm-8 col-sm-offset-2">
                                            <h1>Méthode #POST </h1>
                                            <h3>Transmettre des données via un formulaire</h3>
                                            <p>Apprenons à créer des formulaires et à récupérer les données transmises</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/METHODE POST - Petites zones de texte ------>
                                <div class=" text-center our-services">
                                    <div class="row">
                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                                            <span class="label label-warning">Imput type text (nom, prénom, pseudo)</span><br>
                                            <h3> Récupérer les petites zones de texte</h3>
                                            <br>
                                            <form action="cible.php" method="POST">
                                                <p><label>Prénom : <input type="text" name="prenom" /></label></p>
                                                <p><input type="submit" value="Valider" /></p>
                                            </form>
                                        </div>
                                        <!--/METHODE POST - Petites zones de texte------>

                                        <!--/METHODE POST - mots de passe (type password) ------>
                                        <div class=" text-center our-services new">
                                            <div class="row">
                                                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                                    <span class="label label-warning">Imput type password (mot de passe crypté)</span><br>
                                                    <h3> Récupérer les mots de passe</h3>
                                                    <br>
                                                    <form action="cible_password.php" method="POST">
                                                        <p><label>Saisir votre mot de passe : <input type="password" name="Mot de passe" /></label>
                                                            <p><input type="submit" value="Valider" /></p>
                                                    </form>
                                                </div>
                                                <!--/METHODE POST - mots de passe (type password) ------>

                                                <!--/METHODE POST - Zones de texte multilignes ------>
                                                <div class=" text-center our-services new">
                                                    <div class="row">
                                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
                                                            <span class="label label-warning">Imput type textarea (message, commentaires)</span><br>
                                                            <h3> Récupérer les zones de texte multilignes</h3>
                                                            <br>
                                                            <form action="cible_message.php" method="POST">
                                                                <textarea name="message" rows="8" cols="45"></textarea>
                                                                <p><input type="submit" value="Valider" /></p>
                                                            </form>
                                                        </div>

                                                        <!--/METHODE POST - Zones de texte mutlignes ------>

                                                        <!--/METHODE POST -Liste déroulante ------>
                                                        <div class=" text-center our-services new">
                                                            <div class="row">
                                                                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1000ms">
                                                                    <span class="label label-warning">Liste déroulante avec select et option</span><br>
                                                                    <h3> Récupérer les zones choisies dans une liste déroulante</h3>
                                                                    <br>
                                                                    <form action="cible_select.php" method="POST">
                                                                        <p>Quel est votre niveau en PHP?</p>
                                                                        <p><select name="choix">
                                                    <option value="debutant">Débutant</option>
                                                    <option value="confirme">Confirmé</option>
                                                    <option value="expert">Expert</option>
                                                    <option value="ne se prononce pas">Ne se prononce pas</option>   
                                                    </select>
                                                                            <p><input type="submit" value="Valider" /></p>
                                                                    </form>
                                                                </div>
                                                                <!--/METHODE POST -Liste déroulante ------>

                                                                <!--/METHODE POST -Cases à cocher ------>
                                                                <div class=" text-center our-services new">
                                                                    <div class="row">
                                                                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                                                                            <span class="label label-warning">Cases à cocher avec checkbox et case</span><br>
                                                                            <h3> Récupérer les cases cochées</h3>
                                                                            <br>
                                                                            <form action="cible_case.php" method="POST">
                                                                                <p>Quels sont les langages que vous avez déja appris?</p>
                                                                                <input type="checkbox" name="case" id="case" /> <label for="case">Html</label>
                                                                                <input type="checkbox" name="case" id="case" /> <label for="case">CSS</label>
                                                                                <input type="checkbox" name="case" id="case" /> <label for="case">Javascript</label>
                                                                                <input type="checkbox" name="case" id="case" /> <label for="case">PHP</label>
                                                                                <input type="checkbox" name="case" id="case" /> <label for="case">Java</label>
                                                                                <p><input type="submit" value="Valider" /></p>
                                                                            </form>
                                                                        </div>
                                                                        <!--/METHODE POST -Cases à cocher ------>

                                                                        <!--/METHODE POST - boutons d'option ------>
                                                                        <div class=" text-center our-services new">
                                                                            <div class="row">
                                                                                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1400ms">
                                                                                    <span class="label label-warning">Boutons d'option avec radio</span><br>
                                                                                    <h3> Récupérer les cases cochées (checked = case cochée par défaut)</h3>
                                                                                    <br>
                                                                                    <form action="cible_bouton.php" method="POST">
                                                                                        <p>Etes vous inscrit à Openclassrooms?</p>
                                                                                        <input type="radio" name="openclassrooms" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
                                                                                        <input type="radio" name="openclassrooms" value="non" id="non" /> <label for="non">Non</label>
                                                                                        <p><input type="submit" value="Valider" /></p>
                                                                                    </form>
                                                                                </div>
                                                                                <!--/METHODE POST - boutons d'option ------>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-----**********Fin section POST **********----->
                            <!-----**********Début section sessions **********----->
                            <section id="sessions">
                                <div class="container">
                                    <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="row">
                                            <div class="text-center col-sm-12">
                                                <h1>Les sessions</h1>
                                                <h4> Permettent de stocker des informations qui seront automatiquement transmises de page en page pendant toute la durée de visite d'un internaute sur un site.<br> Il faut au préalable activer les sessions en appelant la fonction. </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container text-center">
                                    <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="row session">
                                            <div class="col-sm-6 box1">
                                                <h2><strong>session_start()</strong></h2>
                                                <span class="sous_titre_session">Démarre le système de session</span>
                                                <h5><em>Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré  spécialement pour lui.<br> Vous devez appeler cette fonction au tout début de chacune des pages où vous avez besoin des variables de session.</em></h5>
                                                <a href="images/exemples_de_code/PHP/session.JPG" class="btn btn-danger btn-md" role="button">Voir le code PHP</a>
                                                <h3>
                                                    Bonjour et bienvenue sur ton site
                                                    <?php echo $_SESSION['prenom']; ?> !<br /> Tu es sur la page1.php. <br>Tu veux aller sur une autre page ?
                                                </h3>
                                                <p>
                                                    <a href="index.html" class="btn btn-warning btn-md" role="button">Page Index.html</a>
                                                    <a href="information.php" class="btn btn-success btn-md" role="button">Page information.php</a><br />
                                                </p>
                                            </div>
                                            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                                <div class="col-sm-6 box1">
                                                    <h2><strong>session_destroy()</strong></h2>
                                                    <span class="sous_titre_session">Détruit la session existante</span>
                                                    <h5><em>Si vous voulez détruire manuellement la session du visiteur, vous pouvez faire un lien « Déconnexion » amenant vers une page qui fait appel à cette fonction<br> Sinon, la session sera automatiquement détruite au bout d'un certain temps d'inactivité. </em></h5>
                                                    <a href="images/exemples_de_code/PHP/destroy.JPG" class="btn btn-danger btn-md" role="button">Voir le code PHP</a>
                                                    <h3>
                                                        Tu souhaites te déconnecter maintenant? <br>Pour cela, cliques sur le bouton "deconnexion".<br> Sinon tu seras déconnecté autommatiquement.</h3>
                                                    <p>
                                                        <a href="destroy.php" button class="btn btn-info btn-md"> Déconnexion </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-----**********Fin section sessions **********----->
                            <!-----**********Début section cookies **********----->
                            <section id="cookies">
                                <div class="container">
                                    <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="row">
                                            <div class="text-center col-sm-12">
                                                <h1>Les cookies</h1>
                                                <h4>Ce sont des petits fichiers contenant du texte, que l'on enregistre sur l'ordinateur du visiteur. <br> Ils permettent de retenir des informations sur le visiteur. <br> Pour chaque information à retenir, un cookie est à créer. Il doit être écrit avant le code HTML.<br> Un cookie comme une variable est composé d'un nom et d'une valeur.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container text-center">
                                    <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="row session">
                                            <div class="col-sm-6 box1">
                                                <h2><strong>Ecrire et afficher un cookie </strong></h2>
                                                <span class="sous_titre_session">(setcookie)</span>
                                                <h5><em>Pour écire un cookie, on lui attribue 3 valeurs : un nom (ex: pseudo), une valeur (ex:naty24) et une date d'expiration ou timestamp () </em></h5>
                                                <a href="images/exemples_de_code/PHP/cookie.JPG" class="btn btn-danger btn-md" role="button">Voir le code PHP</a>
                                                <h3>
                                                    Pour afficher un cookie, on utilise <span class="sous_titre_session">$_COOKIE</span>
                                                </h3>
                                                <p>
                                                    Re-bonjour! Je me souviens de toi!<br /> Tu t'appelles
                                                    <?php echo $_COOKIE['pseudo']; ?> et tu viens de
                                                    <?php echo $_COOKIE['pays']; ?> c'est ça ?
                                                </p>
                                                <p>
                                                    <a href="images/exemples_de_code/PHP/afficher_cookie.JPG" class="btn btn-danger btn-md" role="button">Voir le code PHP</a>
                                                </p>
                                            </div>
                                            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                                <div class="col-sm-6 box2">
                                                    <p><span class="sous_titre_cookie">*Timestamp</span></p>
                                                    <h5><em>C'est la date d'expiration du cookie. Le timestamp est une valeur qui augmente de 1 toutes le secondes. Pour obtenir le timestamp actuel on fait appel à la fonction time(). 
                                                <ul>
                                                <li>Pour que le cookie soit supprimé dans 1 an : time() + 365*24*3600</li>
                                                </ul></em></h5><br>
                                                    <span class="sous_titre_cookie">*Sécuriser son cookie avec le mode httpOnly</span>
                                                    <h5><em>Cette option permet de réduire drastiquement les risques de faille XSS sur votre site.
                                                <ul>
                                                <li>Pour que le cookie soit supprimé dans 1 an : time() + 365*24*3600</li>
                                                </ul></em></h5><br>
                                                    <span class="sous_titre_cookie">*Modifier un cookie</span>
                                                    <h5><em>Il suffit de reprendre l'ancien cookie avec setcookie et de le modifier.
                                                <ul>
                                                <li>Le temps d'expiration est remis à zéro pour un an à partir de sa date de modification </li>
                                                </ul> </em></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-----**********Fin section cookies **********----->
                            <!-----********** Début section mdp (TP)**********----->
                            <section id="mdp">
                                <div class="jumbotron">
                                    <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="row">
                                            <div class="text-center col-sm-8 col-sm-offset-2">
                                                <h1>Page protégée par mot de passe (TP) </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Page protégée par mot de passe ------>
                                    <div class=" text-center our-services">
                                        <div class="row">
                                            <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                                                <p><span class="label label-warning">Imput type password (mot de passe)</span><br></p>
                                                <p>Veuillez entrer le mot de passe pour obtenir le lien d'accès à mon site sur themecloud:</p>
                                                <form action="secret.php" method="post">
                                                    <p>
                                                        <input type="password" name="mot_de_passe" />
                                                        <input type="submit" value="Valider" />
                                                    </p>
                                                </form>
                                                <h4>Cette page est réservée aux personnes autorisées.</h4>
                                                <h6><em>Si vous ne connaissez pas le code secret, inutile d'insister vous ne trouverez jamais le mot de passe !</em></h6>
                                                <a href="images/exemples_de_code/PHP/secret.JPG" class="btn btn-success" role="button">Code page1.php</a>
                                                <a href="images/exemples_de_code/PHP/code_secret.JPG" class="btn btn-danger" role="button">Code secret.php</a>
                                            </div>
                                            <!--/Page protégée par mot de passe ------>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-----********** Fin section mdp (TP)**********----->
                            <script type="text/javascript" src="js/jquery.js"></script>
                            <script type="text/javascript" src="js/bootstrap.min.js"></script>
                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
                            <script type="text/javascript" src="js/jquery.inview.min.js"></script>
                            <script type="text/javascript" src="js/wow.min.js"></script>
                            <script type="text/javascript" src="js/mousescroll.js"></script>
                            <script type="text/javascript" src="js/smoothscroll.js"></script>
                            <script type="text/javascript" src="js/jquery.countTo.js"></script>
                            <script type="text/javascript" src="js/lightbox.min.js"></script>
                            <script type="text/javascript" src="js/main.js"></script>
                            <script src="js/prism.js"></script>
    </body>

    </html>
