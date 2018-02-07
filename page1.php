<!--***************************************************************page1.php = page cours PHP*************************************************************************-->


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
        <link href="css/style.css" rel="stylesheet">
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


        <!-----**********Début Présentation page1.php **********----->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Qu'est ce que PHP?</h1>
                <p class="lead">PHP est un langage de programmation qui s'intègre dans les pages HTML. Il permet entre autres de rendre automatiques des tâches répétitives, notamment grâce à la communication avec une base de données (utilisation la plus courante de PHP). </p>
                <hr class="m-y-md">
                <p>L'essentiel des fonctionnalités de PHP et son utilisation, sont réunis ici.</p>
                <p class="lead">
                    <a class="btn btn-success btn-lg" href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/fonctionnement-d-un-site-ecrit-en-php" role="button">Voir le cours Openclassrooms</a>
                </p>
            </div>
        </div>

        <!-----**********Fin Présentation page1.php **********----->



        <!-----**********Menu de navigation page1.php **********----->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand " href="index.html">Home</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Les variables <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#variables">Basiques</a></li>
                            <li><a href="#superglobales">Superglobales</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Autres <span class="caret"></span></a>


                        <ul class="dropdown-menu">
                            <li><a href="#boucles_for">Boucles For</a></li>
                            <li><a href="#boucle_foreach">Boucles Foreach</a></li>
                            <li><a href="#image">Les images</a></li>
                            <li><a href="#expressions">Les expressions régulières</a></li>
                        </ul>
                    </li>
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
        <!-----**********/Menu de navigation page1.php **********----->


        <!-----**********Début section variables **********----->
        <section id="variables">
            <div class="jumbotron text-center">
                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <h1>Les principales variables en PHP</h1>
                            <P>En PHP, une variable commence par le signe $, suivi du nom de la variable.</P>
                            <h4> Une variable est toujours définie par un nom et une valeur.</h4>
                        </div>
                    </div>
                </div>

                <!--/début Variable date et heure du jour-->
                <div class="text-center our-services">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="service-icon">
                                <i class="fa fa-history"></i>
                            </div>
                            <div class="service-info">
                                <h3>Afficher une variable temporelle simple <br> (date et heure)</h3>
                                <p> Quel jour sommes-nous et quelle heure est-il?</p>
                                <a href="php/Afficher_date_et_heure_du_jour.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                <a href="images/exemples_de_code/PHP/afficher_date_et_heure_du_jour.JPG" class="btn btn-danger" role="button">Voir le code</a>
                            </div>
                        </div>
                        <!--/fin Variable date et heure du jour-->

                        <!--/début Variable age du visiteur prédéfini-->
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                            <div class="service-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="service-info">
                                <h3>Afficher une variable prédéfinie (simple)<br> (age d'un visiteur)</h3>
                                <p>Quel est mon age?</p>
                                <a href="php/age_du_visiteur.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                <a href="images/exemples_de_code/PHP/age_visiteur.JPG" class="btn btn-danger" role="button">Voir le code</a>
                            </div>
                        </div>
                        <!--/fin Variable age du visiteur prédéfini-->

                        <!--/Début Afficher des nombres décimaux-->
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                            <div class="service-icon">
                                <i class="fa fa-calculator"></i>
                            </div>
                            <div class="service-info">
                                <h3>Afficher des nombres décimaux <br> (type float)</h3>
                                <p>Quel est mon poids (en Kg)?</p>
                                <a href="php/Afficher_nombres_decimaux.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                <a href="images/exemples_de_code/PHP/nombres_decimaux(float).JPG" class="btn btn-danger" role="button">Voir le code</a>
                            </div>
                        </div>
                        <!--/Fin Afficher des nombres décimaux-->

                        <!--/Début Afficher la somme de 2 variables-->
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
                            <div class="service-icon">
                                <i class="fa fa-plus-square-o"></i>
                            </div>
                            <div class="service-info">
                                <h3>Afficher la somme de 2 variables <br> (x=5 et y=4)</h3>
                                <p>Combien font 5 + 4 ?</p>
                                <a href="php/Afficher_la_somme_de_2_variables.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                <a href="images/exemples_de_code/PHP/somme_de_2_variables.JPG" class="btn btn-danger" role="button">Voir le code</a>
                            </div>
                        </div>
                        <!--/Fin Afficher la somme de 2 variables-->

                        <!--/Début Afficher un calcul simple de variables-->
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
                            <div class="service-icon">
                                <i class="fa fa-calculator"></i>
                            </div>
                            <div class="service-info">
                                <h3>Afficher un calcul simple <br> (3 variables)</h3>
                                <p>Combien font 2.5 x 10? (en euros)</p>
                                <a href="php/Afficher_un_calcul_simple_de_variables.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                <a href="images/exemples_de_code/PHP/calcul_simple_de_variables.JPG" class="btn btn-danger" role="button">Voir le code</a>
                            </div>
                        </div>
                        <!--/Fin Afficher dun calcul simple de variables-->

                        <!-- Début afficher du texte et des variables-->
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
                            <div class="service-icon">
                                <i class="fa fa-calculator"></i>
                            </div>
                            <div class="service-info">
                                <h3>Afficher du texte avec les variables <br> (La concaténation)</h3>
                                <p>Quel est mon lieu de résidence?</p>
                                <a href="php/variable_et_texte.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                <a href="images/exemples_de_code/PHP/variables_et_texte.JPG" class="btn btn-danger" role="button">Voir le code</a>
                            </div>
                        </div>
                    </div>
                    <!--/Fin Afficher un calcul simple de variables-->







                    <!-----**********Début section superglobales **********----->
                    <section id="superglobales">
                        <div class="jumbotron text-center">
                            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="text-center col-sm-8 col-sm-offset-2">
                                        <h1>Les variables superglobales</h1>
                                        <p>Leur nom est écrit en majuscules et commence par un underscore, mais surtout elles sont générées automatiquement par PHP. </p>
                                        <h4>Les superglobales sont des array car elles contiennent généralement de nombreuses informations.</h4>
                                        <h6><em>Pour afficher le contenu d'une superglobale et voir ce qu'elle contient, le plus simple est d'utiliser la fonction print_r, puisqu'il s'agit d'un array.</em></h6>
                                    </div>
                                </div>
                            </div>


                            <div class="container">
                                <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                                    <div class="row">
                                        <div class="text-center col-sm-12">
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#demo">$_GET</button>
                                            <div id="demo" class="collapse">
                                                Contient les données envoyées en paramètres dans l'URL.
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
                                        <div class="row">
                                            <div class="text-center col-sm-12">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#demo1">$_POST</button>
                                                <div id="demo1" class="collapse">
                                                    Contient les informations qui viennent d'être envoyées par un formulaire.
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
                                            <div class="row">
                                                <div class="text-center col-sm-12">
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#demo2">$_SERVER['REMOTE_ADDR']</button>
                                                    <div id="demo2" class="collapse">
                                                        Donne l'adresse IP du client qui a demandé à voir la page (identification).
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1050ms">
                                                <div class="row">
                                                    <div class="text-center col-sm-12">
                                                        <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#demo3">$_SESSION</button>
                                                        <div id="demo3" class="collapse">
                                                            Variables qui restent stockées sur le serveur le temps de la présence d'un visiteur.
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1250ms">
                                                    <div class="row">
                                                        <div class="text-center col-sm-12">
                                                            <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#demo4">$_COOKIE</button>
                                                            <div id="demo4" class="collapse">
                                                                Permet de stocker des informations sur l'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom par exemple.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1450ms">
                                                        <div class="row">
                                                            <div class="text-center col-sm-12">
                                                                <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#demo5">$_FILES</button>
                                                                <div id="demo5" class="collapse">
                                                                    Contient la liste des fichiers qui ont été envoyés via le formulaire.
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
                    </section>
                    <!-----**********Fin section superglobales **********----->





                    <!-----**********Début section conditions_et_boucles **********----->
                    <section id="conditions_et_boucles">
                        <div class="jumbotron text-center">
                            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="text-center col-sm-8 col-sm-offset-2">
                                        <h1>Les conditions et les boucles WHILE</h1>
                                        <p>Les conditions permettent d'exécuter ou non une série d'instructions en fonction d'une condition d'origine. </p>
                                        <h3>Les boucles permettent de répéter une instruction</h3>
                                    </div>
                                </div>
                            </div>

                            <!--/Début conditions d'entrer selon des critères d'age-->
                            <div class="text-center our-services">
                                <div class="row">
                                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="service-icon">
                                            <i class="fa fa-user-times"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Conditions if, else et elseif<br> (type autorisation_entrer)</h3>
                                            <p> Vous avez 15 ans! Pouvez-vous accèder à mon site?</p>
                                            <a href="php/Conditions%20%20autorisation_enter_non.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/PHP/conditions_acces_refuse.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                    <!--/Fin conditions d'entrer selon des critères d'age-->

                                    <!--/Début conditions d'entrer selon des critères d'age-->
                                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                                        <div class="service-icon">
                                            <i class="fa fa-user-plus"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Conditions if, else et elseif<br> (type autorisation_entrer)</h3>
                                            <p> Vous avez 50 ans! Pouvez-vous accèder à mon site?</p>
                                            <a href="php/Conditions%20%20autorisation_enter_oui.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/PHP/conditions_acces_autorise.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                    <!--/Fin conditions d'entrer selon des critères d'age-->

                                    <!--/Début conditions avec switch-->
                                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                                        <div class="service-icon">
                                            <i class="fa fa-comment"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Conditions avec SWITCH<br> (Si beaucoup de conditions)</h3>
                                            <p> (Ex: Vous avez 10/20)</p>
                                            <a href="php/Conditions_avec_switch.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/PHP/condition_switch.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                    <!--/Fin conditions avec switch-->

                                    <!--/Début conditions condensées (Les ternaires)-->
                                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
                                        <div class="service-icon">
                                            <i class="fa fa-user-secret"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Conditions condensées <br> (Les ternaires avec Booléen)</h3>
                                            <p>Quel age avez vous? Etez vous majeur?</p>
                                            <a href="php/Conditions_ternaires.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/PHP/conditions_condensees.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                    <!--/Fin conditions condensées (Les ternaires)-->

                                    <!--/Début Afficher une boucle simple (répéter un certain nombre de fois la même instruction-->
                                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
                                        <div class="service-icon">
                                            <i class="fa fa-circle-o-notch"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Boucle simple <br> (Type while)</h3>
                                            <p>Répéter un nombre de fois maxi la même instruction</p>
                                            <a href="php/boucle_simple_instruction%20identique.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/PHP/boucle_simple.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                    <!--/Fin Afficher une boucle simple (répéter un certain nombre de fois la même instruction-->

                                    <!--/Début Afficher une boucle simple (répéter un certain nombre de fois une phrase différente)-->
                                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
                                        <div class="service-icon">
                                            <i class="fa fa-user-secret"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Boucle simple <br> (Type while)</h3>
                                            <p>Répéter une phrase différente à chaque fois</p>
                                            <a href="php/boucle_simple_instruction_differente.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/PHP/boucle_simple2.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                    <!--/Fin Afficher une boucle simple (répéter un certain nombre de fois une phrase différente)-->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-----**********Début section conditions_et_boucles **********----->





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


                        <!-----********** les images en PHP **********----->
                        <section id="image">
                            <div class="container-fluid bg-3 text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center col-sm-8 col-sm-offset-2">
                                            <h1>Images en PHP</h1>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2>A partir d'une image vide <a href="php/image.php" button type="button" class="btn btn-primary btn-md">Voir le résultat</a> </h2>
                                        <img src="images/exemples_de_code/PHP/image_vide.JPG" alt="Image" img class="img-responsive">
                                        <p>Imagecreate</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <h2>A partir d'une image existante <a href="php/image.php" button type="button" class="btn btn-primary btn-md">Voir le résultat</a> </h2>
                                        <img src="images/exemples_de_code/PHP/image_vide.JPG" alt="Image" img class="img-responsive">
                                        <p>image.php</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <h2>Manipuler les couleurs <a href="php/couleurs.php" button type="button" class="btn btn-primary btn-md">Voir le résultat</a> </h2>
                                        <img src="images/exemples_de_code/PHP/couleurs.JPG" alt="Image" img class="img-responsive">
                                        <p>imagecolorallocate</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <h2>Texte horizontal dans image <a href="php/texte_image_horizontal.php" button type="button" class="btn btn-primary btn-md">Voir le résultat</a> </h2>
                                        <img src="images/exemples_de_code/PHP/imagestring.JPG" alt="Image" img class="img-responsive">
                                        <p>imagestring</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <h2>Texte vertical dans image <a href="php/texte_image_vertical.php" button type="button" class="btn btn-primary btn-md">Voir le résultat</a> </h2>
                                        <img src="images/exemples_de_code/PHP/imagestringup.JPG" alt="Image" img class="img-responsive">
                                        <p>imagestringup</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <h2>Rendre une image transparente <a href="php/image-transparente.php" button type="button" class="btn btn-primary btn-md">Voir le résultat</a> </h2>
                                        <img src="images/exemples_de_code/PHP/colortransparent.JPG" alt="Image" img class="img-responsive">
                                        <p>imagecolortransparent</p>
                                    </div>

                                    <div class="col-sm-4 col-sm-offset-2">
                                        <h2>Mélanger 2 images <a href="http://localhost/copymerge/copymerge.php" button type="button" class="btn btn-primary btn-md">Voir le résultat</a> </h2>
                                        <img src="images/exemples_de_code/PHP/copymerge.JPG" alt="Image" img class="img-responsive">
                                        <p>copymerge</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <h2>Redimensionner une image <a href="http://localhost/copymerge/copymerge.php" button type="button" class="btn btn-primary btn-md">Voir le résultat</a> </h2>
                                        <img src="images/exemples_de_code/PHP/copymerge.JPG" alt="Image" img class="img-responsive">
                                        <p>imagecopyresampled</p>
                                    </div>
                                </div>
                            </div>
                        </section>



                        <section id="expressions">
                            <div class="container-fluid expression text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center">
                                            <h1>Les expressions régulières (Regex)</h1>
                                            <h2>(Langage PCRE)</h2>
                                            <p> Constituent un système très puissant et très rapide pour faire des recherches dans des chaînes de caractères.<br/> Une regex est toujours entourée de caractères spéciaux appelés délimiteurs (ex: #)</p>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <h2><span class="memento">Memento</span></h2>
                                        <div class="col-sm-4 col-sm-offset-2">

                                            <img src="images/captures/regex1.JPG" alt="Image" img class="img-responsive">
                                            <h3>Utilisation basique</h3>
                                        </div>

                                        <div class="col-sm-4">
                                            <img src="images/captures/regex2.JPG" alt="Image" img class="img-responsive">
                                            <h3>Classes de caractères</h3>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <img src="images/captures/regex3.JPG" alt="Image" img class="img-responsive">
                                            <h3>Les quantificateurs</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="images/captures/regex3.JPG" alt="Image" img class="img-responsive">
                                            <h3>Les quantificateurs</h3>
                                        </div>
                                    </div>
                                </div>


                                <h2 class="memento">Les principales fonctions utilisant le langage PCRE</h2><br/>
                                <div class="container-fluid">
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <h2 span class="press">preg_match</h2>
                                            <blockquote class="blockquote">
                                                <p>Cette fonction renvoie un booléen : <strong>VRAI ou FAUX </strong>(true ou false en anglais). Elle renvoie true (vrai) si elle a trouvé le mot que vous cherchiez dans la chaîne, false (faux) si elle ne l'a pas trouvé.</p><br/>
                                                <img src="images/exemples_de_code/PHP/pregmatch.png" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera VRAI puisque "guitare" se trouve bien dans la phrase "j'aime la guitare"</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <blockquote class="blockquote">
                                                <img src="images/exemples_de_code/PHP/pregmatchfaux.png" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera FAUX puisque "guitare" ne se trouve pas dans la phrase "j'aime le piano"</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <blockquote class="blockquote">
                                                <img src="images/exemples_de_code/PHP/pregmatchfaux2.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera FAUX puisque "piano" ne se trouve pas dans la phrase "j'aime la guitare"</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <h2 span class="press2">preg_match (avec option "i")</h2>
                                            <blockquote class="blockquote">
                                                <p>L'option "i" permet de ne pas faire la différence entre <strong>majuscule et minuscule </strong>. La regex ne fera plus attention à la casse.</p><br/>
                                                <img src="images/exemples_de_code/PHP/pregmatchi.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera VRAI puisque "PIANO" se trouve bien dans la phrase "j'aime le piano", même s'il est écrit en MAJUSCULE.</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid ">
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <h2 span class="press2">preg_match (avec option "OU")</h2>
                                            <blockquote class="blockquote">
                                                <p>L'option <strong>"OU" </strong> permet de rechercher un mot ou un autre. La regex répondra vrai si l'un ou l'autre des mots est trouvé.</p><br/>
                                                <img src="images/exemples_de_code/PHP/pregmatchou.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera FAUX puisque aucun des mots proposés ne se trouvent dans la phrase "j'aime jouer du tambour"</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid ">
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <h2 span class="press2">Indiquer le début d'une chaîne </h2>
                                            <blockquote class="blockquote">
                                                <p> <strong>L'accent circonflexe (^) </strong> indique le début d'une chaîne. En plaçant le symbole devant le mot, alors celui-ci devra se trouver au début de la châine sinon la réponse sera FAUX.</p><br/>
                                                <img src="images/exemples_de_code/PHP/debutdechaine.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera FAUX le mot "banjo" apparait dans la phrase mais n'est pas situé au début.</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid ">
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <h2 span class="press2">Indiquer la fin d'une chaîne</h2>
                                            <blockquote class="blockquote">
                                                <p> <strong>Le symbole dollar ($) </strong> indique la fin d'une chaîne. En plaçant le symbole après le mot, alors celui-ci devra se trouver à la fin de la châine sinon la réponse sera FAUX.</p><br/>
                                                <img src="images/exemples_de_code/PHP/findechaine.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera FAUX le mot "banjo" apparait dans la phrase mais n'est pas le dernier mot de la phrase.</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid ">
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <h2 span class="press2">Les classes de caractères</h2>
                                            <blockquote class="blockquote">
                                                <p>Elles sont toujours indiquées entre crochets.</p><br/>
                                                <h3><strong>Exemple 1 :</strong> On demande à la regex si la chaine de caractères comprend le mot "gras", "gros" ou "gris".</h3>
                                                <img src="images/exemples_de_code/PHP/exemple1.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera VRAI puisque le mot "gris" apparaît dans la phrase (peu importe l'emplacement de celui-ci)</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <blockquote class="blockquote">
                                                <h3><strong>Exemple 2 :</strong> On demande à la regex si la chaine de caractères comprend le mot "gras", "gros" ou "gris" et si elle se situe en fin de chaîne.</h3>
                                                <img src="images/exemples_de_code/PHP/exemple2.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera FAUX puisque le mot "gras" apparaît dans la phrase mais ne ne situe pas en fin de chaîne.</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <blockquote class="blockquote">
                                                <h3><strong>Exemple 3 :</strong> On demande à la regex si la chaine de caractères se termine par une voyelle.</h3>
                                                <img src="images/exemples_de_code/PHP/exemple3.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera VRAI puisque la chaine se termine par la lettre "o" (voyelle).</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                      <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <blockquote class="blockquote">
                                                <h3><strong>Exemple 4 :</strong> On demande à la regex si la chaine de caractères commence par une voyelle.</h3>
                                                <img src="images/exemples_de_code/PHP/exemple4.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera FAUX puisque la chaine commence par une consonne (J).</button>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid ">
                                    <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <h2 span class="press2">Les intervalles de classe</h2>
                                            <blockquote class="blockquote">
                                                <p>Elles permettent de délimiter des recherches sur une chaîne. Elles sont toujours indiquées entre crochets <code class="coder">avec un tiret (-)</code>.<br/>Il est possible d'écrire 2 plages dans une même classe entre crochets.</p>
                                               
                                                <h3><strong>Est-ce que cette chaîne de caractères contient des lettres minuscules?</strong> </h3>
                                                <img src="images/exemples_de_code/PHP/exemple5.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera FAUX la chaîne de caractères contient des lettres mais toutes en MAJUSCULES.</button>
                                                <h5><em>Il aurait fallu écrire une regex de type <code>[A-Z]</code>pour que le résultat affiche VRAI.</em></h5>
                                            </blockquote>
                                        </div>
                                    </div>
                                    
                                <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <blockquote class="blockquote">
                                                <h3><strong>Est-ce que cette chaîne de caractères contient des lettres majuscules ou des chiffres?</strong> </h3>
                                                <img src="images/exemples_de_code/PHP/exemple6.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera VRAI car la chaîne de caractères contient des chiffres.</button>
                                                <h5><em>S'il n'y avait pas eu de chiffres, le résultat aurait été FAUX car toutes les lettres étaient en minuscule.</em></h5>
                                            </blockquote>
                                        </div>
                                    </div>
                                    
                                <div class="row boite1">
                                        <div class="col-sm-10 col-sm-offset-2 contenu ">
                                            <blockquote class="blockquote">
                                                <h3><strong>Est-ce que cette chaîne de caractères contient des lettres majuscules ou des chiffres?</strong> </h3>
                                                <img src="images/exemples_de_code/PHP/exemple6.PNG" alt="Image" img class="img-responsive">
                                                <button type="button" class="btn btn-danger btn-md">Affichera VRAI car la chaîne de caractères contient des chiffres.</button>
                                                <h5><em>S'il n'y avait pas eu de chiffres, le résultat aurait été FAUX car toutes les lettres étaient en minuscule.</em></h5>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            
                        </section>










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
