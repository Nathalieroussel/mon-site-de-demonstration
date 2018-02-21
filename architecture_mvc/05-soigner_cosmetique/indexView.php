<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog TP | Structure MVC</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
    <div class="container text-center"> 
        <h3 class="titre">Blog avec commentaires</h3>
       
    </div>

  
    <p class="title">Derniers billets du blog :</p>


    <?php
        while ($data = $posts->fetch())
        {
        ?>
        <div class="news">
            <h3>
                <?= htmlspecialchars($data['title']) ?>
                    <em>le <?= $data['creation_date_fr'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />
                    <em><a href="#">Commentaires</a></em>
            </p>
        </div>
        <p class="align"> Le lien commentaire ne fonctionne pas (c'est normal à ce stade de la démonstration)</p>
        <?php
        }
        $posts->closeCursor();
        ?>




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
