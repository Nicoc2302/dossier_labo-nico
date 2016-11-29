<?php
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/logo.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="masthead">
                <img src="">
                <h3 class="text-muted"></h3>
                <nav>
                  <ul class="nav nav-justified">
                    <li class="active"><a href="?page=home">Accueil</a></li>
                    <?php if (empty($_SESSION['email'])) 
                    {
                    	echo "<li><a href='?page=connexion'>Connexion/inscription</a></li>";
                    } 
                    else
                    {
                    	echo "<li><a href='?page=admin'>Mes listes</a></li>";
                    	echo "<li><a href='?page=deco'>Déconnexion</a></li>";
                    }
                    ?>
                    </ul>
                </nav>
            </header>
            <section class="row background">
                <article class="col-md-12">
                <p>Bienvenue <?php echo ($_SESSION['email']?$_SESSION['email']:'Visiteur')  ?> </p>
                    <?php
                        $page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
                        $page = 'inc/' . $page . '.php';
                        if (!file_exists($page)) $page='error/404.php';
                        include_once $page;
                    ?>
                </article>
            </section>
            <footer class="footer">
                <hr>
                <p>© 2016 Liste bébé</p>
            </footer>
        </div>
             
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
