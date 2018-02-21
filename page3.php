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
    <html lang="fr">

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
        <link href="css/backtotop.css" rel="stylesheet">
        <link href="css/prism.css" rel="stylesheet">
        <link href="css/design.css" rel="stylesheet">
        <link href="css/tabulation.css" rel="stylesheet">

        <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel=”stylesheet” id=”font-awesome-css” href=”//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css” type=”text/css” media=”screen”>
    </head>


    <body>


        <!-----**********Début Présentation page3.php **********----->

        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Adopter une architecture MVC en PHP</h1>
                <p class="lead">C'est donner une structure professionnelle à son code. Ce genre de code a de nombreux avantages:
                    <ul>
                        <li span class="mvc"><strong>Il est réutilisable</strong> : si un jour nous avons codé un fichier utile, nous pouvons nous en resservir dans un autre projet, ou dans un autre endroit du même projet. On gagne du temps en n'ayant pas à tout refaire à chaque fois !"</li><br/>
                        <li span class="mvc"><strong>Il est facile d'y travailler à plusieurs </strong>chaque fichier étant indépendant (et généralement de petite taille), on peut travailler en équipe de 5, 10, voire 100 personnes sur un même projet. Si tout était mélangé dans un seul et même gros fichier, il serait impossible de le modifier en même temps ! </li><br/>
                        <li span class="mvc"><strong>Il est évolutif </strong>: quand quelqu'un vient vous demander une nouvelle fonctionnalité, il est facile de l'ajouter. Vous n'avez pas peur de tout casser. Vous savez que ça va marcher, et votre code ne sera pas plus compliqué. </li>
                    </ul><br/>
                    <div class="encart">
                        <p class="titre-important">Principe de fonctionnement</p>
                        <ul>
                            <li><strong>model (M)</strong> : Il est chargé de gèrer les données. Il se comporte comme un portail permettant au reste de l'application d'accèder aux données et des les conserver au besoin.</li><br/>
                            <li><strong>view (V)</strong> : Il permet de gèrer l'affichage final des pages. Il gènère le code html qui sera affiché aux utilisateurs à partir de variables récupérées depuis le controller.</li><br/>
                            <li><strong>controler (C)</strong> : C'est l'élément liant, le chef d'orchestre! Il reçoit les données entrées par l'utilisateur, communique les changements aux modèles.</li><br/>
                        </ul>
                    </div>
                    <hr class="m-y-md">
                    <p>Le cours complet d'Openclassrooms est visualisable ici.</p>
                    <p class="lead">
                        <a class="btn btn-success btn-lg" href="https://openclassrooms.com/courses/adoptez-une-architecture-mvc-en-php" role="button">Voir le cours Openclassrooms</a>
                    </p>
            </div>
        </div>

        <!-----**********Fin Présentation page3.php **********----->



        <!-----**********Menu de navigation page3.php **********----->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand " href="index.html">Home</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#chapitre3">Créer une architecture MVC</a></li>
                        <ul class="dropdown-menu">
                            <li><a href="#boucles_for">Boucles For</a></li>
                            <li><a href="#boucle_foreach">Boucles Foreach</a></li>
                            <li><a href="#image">Les images</a></li>
                            <li><a href="#expressions">Les expressions régulières (PCRE)</a></li>
                        </ul>
                </ul>
            </div>
        </nav>
        <!-----**********/Menu de navigation page3.php **********----->


        <!-----**********Début section chapitre3 **********----->
        <section id="chapitre3">
            <div class="jumbotron text-center">
                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <h1>Isoler l'affichage du traitement PHP</h1>
                            <P>La première bonne pratique à prendre consiste à éviter de mélanger l'affichage du reste.</P>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <div class="container-fluid">
                                <div class="row ">
                                    <div class="col-sm-9 col-sm-offset-3 contenu ">
                                        <h2 span class="titledescription">Phase 1 - Séparer le code en 2 fichiers</h2>
                                        <div class="boitedetexte">
                                            <ul>
                                                <li class="description">Un fichier <code> index.php </code> fichier de base du site et lu en premier, il s'occupera de récupérer les données et d'appeler l'affichage.</li>
                                                <li class="description">Un fichier <code> affichageAccueil.php </code> qui affichera les données de la page.</li>
                                            </ul>
                                            <h3 class="description"> <strong>La fonction require marche comme un include.</strong> Il y a une seule différence : si le fichier n'est pas trouvé quand on utilise require , le script s'arrête et plante.Ca aurait aussi bien marché avec un include, mais c'est plus "propre" d'utiliser un <em>require</em> dans ce cas, parce qu'il vaut mieux faire planter le script si le fichier n'est pas trouvé.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row ">
                                    <div class="col-sm-9 col-sm-offset-3 contenu ">
                                        <h2 span class="titledescription">Phase 2 - Séparer le code en 3 fichiers pour faire une base de structure MVC</h2>
                                        <div class="boitedetexte">
                                            <ul>
                                                <li class="description">Un fichier <code> model.php </code> qui se connecte à la base de données et récupère les billets <strong>(Model)</strong></li>
                                                <li class="description">Un fichier<code> affichageAccueil.php </code> qui affichera les données de la page <strong>(Vue)</strong></li>
                                                <li class="description">Un fichier<code> index.php </code> qui fait le lien entre le modèle et l'affichage. <strong>(Contrôleur)</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row ">
                                    <div class="col-sm-9 col-sm-offset-3 contenu ">
                                        <h2 span class="titledescription">Phase 3 - Soigner la cosmétique|Améliorer la qualité du code</h2>
                                        <div class="boitedetexte">
                                            <ul>
                                                <li class="description">On retire les balises de fermeture PHP dans les fichiers <code>index.php</code> et <code>model.php</code> car il n'y a que du code PHP.</li>
                                                <li class="description">On renomme la base de données en anglais (exemple: titre devient title....) et les noms de fichiers (ex: vue devient view, donnée devient data....) </li>
                                                <li class="description">On indente mieux le code en décalant toujours d'un cran vers la droite le code à l'intérieur d'une balise.</li>
                                                <li class="description">On utilise les <strong>"short open tags"</strong> en PHP pour faciliter la lisibilité du code. Cela permet d'éviter à avoir écrire "echo" quand on souhaite afficher une variable.</li>
                                            </ul>
                                            <a href="architecture_mvc/05-soigner_cosmetique/index.php" button type="button" class="btn btn-success btn-md testeur">TESTER LE CODE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row ">
                                    <div class="col-sm-9 col-sm-offset-3 contenu ">
                                        <h2 span class="titledescription">Phase 4 - Comment fonctionne une architecture MVC?</h2>
                                        <div class="boitedetexte">
                                            <h3 class="description">Le MVC permet de bien organiser son code source. Le but de MVC est justement de séparer la logique du code en trois parties que l'on retrouve dans des fichiers distincts.</h3>
                                            <ul>
                                                <li class="description"><strong>Modèle :</strong> cette partie gère les données du site. Son rôle est d'aller récupérer les informations dans la base de données, de les organiser et de les assembler pour qu'elles puissent ensuite être traitées par le contrôleur. On y trouve donc entre autres les requêtes SQL.</li><br/>
                                                <li class="description"><strong>Vue :</strong> cette partie se concentre sur l'affichage. Elle ne fait presque aucun calcul et se contente de récupérer des variables pour savoir ce qu'elle doit afficher. On y trouve essentiellement du code HTML mais aussi quelques boucles et conditions PHP très simples, pour afficher par exemple une liste de messages. </li><br/>
                                                <li class="description"><strong>Contrôleur :</strong> cette partie gère la logique du code qui prend des décisions. C'est en quelque sorte l'intermédiaire entre le modèle et la vue : le contrôleur va demander au modèle les données, les analyser, prendre des décisions et renvoyer le texte à afficher à la vue. Le contrôleur contient exclusivement du PHP. C'est notamment lui qui détermine si le visiteur a le droit de voir la page ou non (gestion des droits d'accès). </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row ">
                                    <div class="col-sm-9 col-sm-offset-3 contenu ">
                                        <h2 span class="titledescription">Phase 5 - Ajouter des commentaires <em>(insérer une nouvelle fonctionnalité)</em></h2>
                                        <div class="boitedetexte">
                                            <h2 span class="color">1°) Ajout de fonctions et factorisation</h2>
                                            <h3 class="description">Pour le moment le fichier <code>model.php</code> ne contient qu'une seule fonction <code>getPosts</code> qui récupère tous les derniers posts du blog uniquement.</h3>
                                            <h3 class="description">Pour ajouter cette nouvelle fonctionnalité, on va écrire 2 nouvelles fonctions dans le fichier <code>model.php</code>:</h3>
                                            <ul>
                                                <li class="description">
                                                    <blockquote><code>getPost</code> : qui va récupérer un post précis en fonction de son ID.</blockquote>
                                                </li>
                                                <li class="description">
                                                    <blockquote><code>getComments</code> : qui va récupérer les commentaires associés à un ID de post</blockquote>
                                                </li>
                                            </ul>
                                            <h3 class="description">Pour éviter de voir le code se répéter (notamment la connexion à la base de données avec try et catch, on <strong> factorise </strong> en créant une fonction <code>dbConnect()</code> que l'on rajoute à la fin du fichier et qui va renvoyer à la connexion à la base de données.</h3><br/>
                                            <h2 span class="color">2°) Création du contrôleur</h2>
                                            <h3 class="description">En plus du 1er contrôleur <code>index.php</code>qui gére la liste des derniers posts, on crée un nouveau contrôleur <code>post.php</code> qui va afficher un post précis et ses commentaires.</h3><br/>
                                            <h2 span class="color">3°) Création de la vue</h2>
                                            <h3 class="description">On crée cette vue dans un fichier <code>postView.php</code>.<br/> Dans cette vue, on affiche le post récupéré avec <code>$post</code> et les commentaires récupérés dans <code>$comments</code>.</h3><br/>
                                            <h2 span class="color2">En résume:</h2>
                                            <h3 class="description">On se retrouve désormais avec 5 fichiers :</h3>
                                            <ul>
                                                <li class="description"><code>model.php</code> : le modèle, qui contient différentes fonctions pour récuperer des informations dans la base.</li>
                                                <li class="description"><code>index.php</code> : le contrôleur de la page d'accueil qui fait le lien entre le modèle et la vue.</li>
                                                <li class="description"><code>indexView.php</code> : la vue de la page d'accueil (affichage de la page).</li>
                                                <li class="description"><code>post.php</code> : le contrôleur d'un billet et ses commentaires qui fait le lien entre le modèle et la vue.</li>
                                                <li class="description"><code>postView.php</code> : la vue d'un post et ses commentaires (affichage de la page).</li>
                                            </ul>
                                            <a href="architecture_mvc/08-afficher_commentaires/index.php" button type="button" class="btn btn-success btn-md testeur">TESTER LE CODE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row ">
                                    <div class="col-sm-9 col-sm-offset-3 contenu ">
                                        <h2 span class="titledescription">Phase 6 - Créer un template de page (gabarit)</h2>
                                        <div class="boitedetexte">
                                            <h3 class="description">On crée un fichier <code>template.php</code> qui représente la structure de la page avec des trous à remplir par des variables.<br/> Ces variables sont crées dans le fichier <code>indexView.php</code></h3>
                                           <h3 class="description">Le code écrit dans <strong>indexView.php</strong> fait 3 choses :</h3>
                                               <ul>
                                                <li class="description">Il définit le titre de la page dans <code>$title</code>et sera intégré dans la balise <em>title</em></li>
                                                <li class="description">Il définit le contenu de la page dans <code>$content</code> et sera intégré dans la balise <em>body</em></li>
                                                 <li class="description">Il définit le contenu de la page dans <code>$content</code> et sera intégré dans la balise <em>body</em></li>
                                            </ul>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                           




                                                    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

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
                                                    <script type="text/javascript" src="js/backtotop.js"></script>





    </body>

    </html>
