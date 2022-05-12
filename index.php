<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Eliott Barbet</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>Eliott Barbet</h1>
    <div id="menu-horizontal" class="menu horizontal">
        <ul class="snip1189">
            <li>
                <a href="#bio">
                    <div>Biographie</div>
                </a>
            </li>
            <li>
                <a href="#course">
                    <div>Parcours</div>
                </a>
            </li>
            <li>
                <a href="#projects">
                    <div>Projets</div>
                </a>
            </li>
            <li>
                <a>
                    <div>Stage</div>
                </a>
            </li>
            <li>
                <a>
                    <div>Compétences</div>
                </a>
            </li>
            <li>
                <a>
                    <div>Autres</div>
                </a>
            </li>
            <li>
                <a href="#contact">
                    <div>Contact</div>
                </a>
            </li>
        </ul>
    </div>
    <!--    <div class="menu closed">-->
    <!--    </div>-->
    <div class="closed">
        <?php include("view/burger.html"); ?>
    </div>
</header>
<main>
    <div id="menu-vertical" class="menu vertical">
        <ul class="snip1189">
            <li>
                <a href="#bio">
                    <div>Biographie</div>
                </a>
            </li>
            <li>
                <a href="#course">
                    <div>Parcours</div>
                </a>
            </li>
            <li>
                <a href="#projects">
                    <div>Projets</div>
                </a>
            </li>
            <li>
                <a>
                    <div>Stage</div>
                </a>
            </li>
            <li>
                <a>
                    <div>Compétences</div>
                </a>
            </li>
            <li>
                <a>
                    <div>Autres</div>
                </a>
            </li>
            <li>
                <a href="#contact">
                    <div>Contact</div>
                </a>
            </li>
        </ul>
    </div>
    <div id="bio" class="bloc">
        <div id="pfp-and-title">
            <img id="pfp" alt="Fanart de Eliott réalisé par Jenifail" src="resources/images/eliott_by_Jenifail.png"
                 height="128px" width="128px"/>
            <div id="name-and-title">
                <div id="name">Eliott Barbet</div>
                <div id="title">Futur Software Engineer</div>
            </div>
        </div>
        <div id="presentation">
            <p>
                Bonjour, je m'appelle Eliott, j'ai 20 ans et je suis actuellement étudiant en informatique.
            </p>
            <p>
                Je suis né à Angers et j'y ai grandi durant mon enfance. J'y ai passé mon école primaire, mon
                collège et mon lycée.
            </p>
            <p>
                Après le Baccalauréat, je suis allé étudier à l'IUT de Nantes où j'ai fait un DUT <a
                        href="https://www.orientation.com/diplomes/dut-genie-electrique-et-informatique-industrielle">Génie
                    Electric Informatique Industrielle</a>.
            </p>
            <p>
                Je suis ensuite parti dans le sud de la France, à Montpellier pour enchaîner sur une nouvelle année
                d'étude.
                Cette fois ci l'Année Spéciale Informatique, un genre de formation accélérée équivalente au DUT
                Informatique
                en une seule année au lieu de deux.
            </p>
        </div>
    </div>
    <div id="course" class="bloc">
        <h1>Formation</h1>

        <div>
            <h3>Lycée</h3>
        </div>
        <div>
            <h3>DUT GEII</h3>
        </div>
        <div>
            <h3>DUT Info</h3>
        </div>
    </div>
    <div id="projects" class="bloc">
        <h1>Mes projets :</h1>

        <div class="element">
            <h2>Reversi</h2>
            <div>
                <div>
                    <img class='border' alt="Reversi" src="resources/images/reversi.jpg" width="auto" height="256px"/>
                    <div>
                        <p>Le Reversi ou l'Othello est un jeu de société combinatoire abstrait opposant deux joueurs. Il
                            se
                            joue
                            sur un tablier unicolore de 64 cases, 8 sur 8, appelé othellier. Les joueurs disposent de 64
                            pions
                            bicolores, noirs d'un côté et blancs de l'autre.
                        </p>
                        <p>
                            Le but du jeu est de recouvrir le plus de cases possibles à l'aide d'une prise de pions
                            assez
                            particulière. Il suffit d'entourer un ou plusieurs pions adversaires dans toutes les
                            directions
                            par sa couleur afin de capturer des points. Le joueur qui en possède le plus à la fin de la
                            partie gagne. Les égalités sont possibles.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex-column max-width item-center">
                <h3>Technologies utilisées</h3>
                <div class="flex-row wrap max-width around">
                    <div class="flex-column center">
                        <img src="resources/images/javascript.png" alt="JavaScript" height="64px" width="auto"/>
                        <p>JavaScript</p>
                    </div>
                    <div class="flex-column center">
                        <img src="resources/images/intelliJ.png" alt='IntelliJ' height="64px" width="auto"/>
                        <p>IntelliJ</p>
                    </div>
                    <div class="flex-column center">
                        <img src="resources/images/chrome.png" alt='Chrome' height="64px" width="auto"/>
                        <p>Google Chrome</p>
                    </div>
                    <div class="flex-column center">
                        <img src="resources/images/git.png" alt='Git' height="64px" width="auto"/>
                        <p>Git</p>
                    </div>
                    <div class="flex-column center">
                        <img src="resources/images/github.svg" alt='GitHub' height="64px" width="auto"/>
                        <p>GitHub</p>
                    </div>
                </div>
            </div>
            <div class="flex-row">
                <div class="sub-element flex-column" style="width: 40%">
                    <h3>Compétences approfondies</h3>
                    <div>
                        <ul>
                            <li>JavaScript pure</li>
                            <li>OOP JavaScript</li>
                            <li>Font-end CSS</li>
                            <li>Manipulation de tableaux</li>
                            <li>Algorithmique générale</li>
                            <li>Algorithmique récursive</li>
                        </ul>
                    </div>
                </div>
                <div class="sub-element flex-column" style="width: 60%">
                    <h3>Difficultés rencontrées</h3>
                    <ul>
                        <li>J'ai mis du temps à comprendre la syntaxe de l'orienté objet en JavaScript. Il y a au moins
                            3 manières de faire dans ce langage et j'ai opté pour celui qui ressemblait le plus au Java
                            en créent des classes pour chaque objet.
                        </li>
                        <li>L'algorithmique a été un peu compliqué, j'ai mis du temps à trouver des bons algorithmes
                            pour la prise de pions.
                        </li>
                        <li>Les algorithmes récursifs ont été long à implémenter et surtout à vérifier. D'autant plus
                            que la trace d'un algorithme récursive est extrêmement longue et pénible à vérifier
                            manuellement
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="element">
            <h2>Amazon51</h2>
            <div>
                <div>
                    <img src="resources/images/amazon51.png" alt="Logo Amazon51" height="128px" width="auto">
                </div>
            </div>
        </div>
    </div>
    <div id="leisure" class="bloc">
        <h2>Mes passions :</h2>
    </div>
    <div id="skills" class="bloc">
        <h2>Mes compétences</h2>
    </div>
    <div id="contact" class="bloc">
        <h2>Me contacter :</h2>
        <div>
            <form>
                <label>Objet
                    <input>
                </label>
                <label>Message
                    <input>
                </label>
            </form>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>