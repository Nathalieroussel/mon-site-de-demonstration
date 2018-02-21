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
        <link href="css/prism.css" rel="stylesheet" />
        <link href="css/backtotop.css" rel="stylesheet" />
        
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
                    <li><a href="#requete_mysql">Requêtes MySQL</a></li>

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">TP COURS<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#minichat">Minichat</a></li>
                            <li><a href="blog_TP/index.php">Blog avec commentaires</a></li>
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

                                </div>
                                <!--**********Fin objet_bdd **********-->
                            </div>
                        </div>
                        <!--********** Fin section pdo **********-->




                        <!-----********** Début section requetes mysql **********----->
                        <section id="requete_mysql">
                            <div class="jumbotron text-center">
                                <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="text-center col-sm-8 col-sm-offset-2">
                                            <h1>Les requêtes MySQL</h1>
                                            <h3>Ce sont les instructions que l'on donnent à la base de données pour en extraire les résultats.</h3>
                                            <p> <strong>Exemple : Base de données de jeux vidéo</strong>
                                                <a href="sql/jeux_video.zip" class="btn btn-info" role="button" download="jeux_video.zip">Télécharger la table </a></p>
                                            <h5> Cette table est appelée "test" et comprend 7 champs (id, nom, possesseur, console, prix, nbre joueurs maximum et commentaires)</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/select.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Afficher les champs "nom" de la table</h3>
                                            <p><strong>SELECT (un champ)</strong></p>
                                            <a href="jeux_video/jeux_video.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/SQL/select.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>


                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/requete-multiple.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Afficher les champs "nom" et "possesseur" de la table</h3>
                                            <p><strong>SELECT (plusieurs champs)</strong></p>
                                            <a href="jeux_video/jeux_video_champs_multiples.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/SQL/select_multiple.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>


                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/select.where.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Afficher uniquement les jeux appartenant à Patrick</h3>
                                            <p><strong>SELECT et WHERE</strong></p>
                                            <a href="jeux_video/jeux_video_select_where.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/SQL/select_where.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>


                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/orderby.jpg" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Afficher et trier les jeux vidéo par prix croissant</h3>
                                            <p><strong>ORDER BY</strong></p>
                                            <a href="jeux_video/jeux_video_orderby.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/SQL/orderby.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="jumbotron text-center">
                                <div class="row">
                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/limit.jpg" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Afficher les 10 premiers résultats</h3>
                                            <p><strong>LIMIT</strong></p>
                                            <a href="jeux_video/jeux_video_limit.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/SQL/limit.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/insert_into.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Ajouter un jeu dans la base de donnée</h3>
                                            <p><strong>INSERT INTO</strong></p>
                                            <a href="#requete_mysql" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/SQL/limit.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/upper.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Affiche les données en majuscules</h3>
                                            <p><strong>UPPER (fonction scalaire)</strong></p>
                                            <a href="jeux_video.php" class="btn btn-warning" role="button">Voir le résultat</a>
                                            <a href="images/exemples_de_code/SQL/upper.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/lower.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Affiche les données en minuscules</h3>
                                            <p><strong>LOWER (fonction scalaire)</strong></p>
                                            <a href="images/exemples_de_code/SQL/lower.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="jumbotron text-center">
                                <div class="row">
                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/lenght.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Affiche le nombre de caractères des noms </h3>
                                            <p><strong>LENGTH (fonction scalaire)</strong></p>
                                            <a href="images/exemples_de_code/SQL/lenght.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/avg.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Calcule une valeur moyenne des prix</h3>
                                            <p><strong>AVG (fonction d'agrégat)</strong></p>
                                            <a href="images/exemples_de_code/SQL/avg.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/sum.jpg" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Calcule la valeur totale des prix</h3>
                                            <p><strong>SUM (fonction d'agrégat)</strong></p>
                                            <a href="images/exemples_de_code/SQL/sum.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/max.jpg" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Renvoie le prix maximal</h3>
                                            <p><strong>MAX (fonction d'agrégat)</strong></p>
                                            <a href="images/exemples_de_code/SQL/max.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="jumbotron text-center">
                                <div class="row">
                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/min.jpg" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Renvoie le prix minimal </h3>
                                            <p><strong>MIN (fonction scalaire)</strong></p>
                                            <a href="images/exemples_de_code/SQL/lenght.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                        <img src="images/requetes/avg.png" class="img-rounded">
                                        <div class="service-info">
                                            <h3>Compter le nombre d'entrées</h3>
                                            <p><strong>COUNT (fonction scalaire)</strong></p>
                                            <a href="images/exemples_de_code/SQL/count.JPG" class="btn btn-danger" role="button">Voir le code</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-----**********Fin section requete mysql **********----->





                        <!-----********** Début section blog **********----->
                        <section id="minichat">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                                        <h1>Mini-chat amélioré</h1>
                                    </div>
                                </div>
                                <div class="blog-posts">
                                    <div class="row">
                                        <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                                            <div class="entry-header">
                                                <h3><a href="minichat/minichat.php">Réalisation d'un minichat en PHP et SQL</a></h3>
                                                <span class="date">31 janvier 2018</span>
                                            </div>
                                            <div class="entry-content">
                                                <p>Minichat avec mémorisation du pseudo (cookies) et date et heure du message posté.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                                       
                        <!-----**********Fin section blog **********----->

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
