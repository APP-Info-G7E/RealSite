<!DOCTYPE html>

<html>

<head>
    <title>Page connexion</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet" />





</head>



<body>
    <div id=contenu>

        <div id="header">


            <div id="logo">
                <a href="index.php"><img src="images/LogoPh.png" alt="accueil" id="logo">
                </a>

                <p class="titre">Pomme d'Happy</p>

            </div>




            <div id="nav-wrapper">
                <div id="nav">


                    <p class=accueil><a href="index.php">Accueil</a>
                    </p>
                    <p class=annonces><a href="Annonces.html">Annonces</a>
                    </p>
                    <p class=monpanier><a href="monpanier.html">Mon panier</a>
                        </li>
                        <p class=forum><a href="forum.html">Forum</a>
                            </li>
                            <p class=connexion2><a href="connexion.php">Connexion</a>
                                </li>
                                <p class=inscription><a href="inscription.php">Inscription</a>
                                    </li>



                </div>
            </div>
        </div>





        <div id="connexion">

            <p class="mpoublie"><a href="motdepasseoublie.html">Mot de passe oublié</a>
            </p>

            <form id="formuinscription" method="post" action="verification.php">



                <fieldset>

                    <legend>Connexion</legend>
                    </br>
                    </br>

                    <p>
                        <label for="pseudo">Pseudo : </label>

                        <input type="text" name="pseudo" id="pseudo" />
                    </p>



                    <p>
                        <label for="mp">Mot de passe :</label>

                        <input type="password" name="mp" id="mp" />
                    </p>






                    </br>
                    </br>


                    <p class=validation3>
                        <input type="submit" value="envoyer" />
                    </p>

                </fieldset>
            </form>

        </div>

        <div>

            <p class=mlegal2><a href="mentionlegales.php">Mentions légales</a>
            </p>
            <p class=faq2><a href="FAQ.php">FAQ</a>
            </p>
            <p class=qsn2><a href="qsn.php">Qui sommes nous ?</a>
            </p>

        </div>

</body>

</html>