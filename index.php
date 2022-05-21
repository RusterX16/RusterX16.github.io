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
                <a href="#skills">
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
            <h3>BAC STI2D - Spécialité SIN</h3>
            <div class="flex-row item-center margin-child">
                <div>
                    <img alt="Logo du lycée Saint Aubin La Salle" src="resources/images/sals.svg" width="64px" height="auto">
                </div>
                <div>
                    <p>Lycée Saint Aubin la Salle - Angers</p>
                    <p>De septembre 2017 à juin 2019</p>
                </div>
            </div>
        </div>
        <div>
            <h3>DUT GEII</h3>
            <div class="flex-row item-center margin-child">
                <div>
                    <img alt="Logo de l'iut de Nantes" src="resources/images/iutnantes.png" width="64px" height="auto">
                </div>
                <div>
                    <p>IUT de Nantes</p>
                    <p>De septembre 2019 à juin 2021</p>
                </div>
            </div>
        </div>
        <div>
            <h3>DUT Info - Année Spéciale</h3>
            <div class="flex-row item-center margin-child">
                <div>
                    <img alt="Logo de l'iut de Montpellier" src="resources/images/iutmontpellier.jpg" width="64px"
                         height="auto">
                </div>
                <div>
                    <p>IUT de Montpellier</p>
                    <p>De septembre 2021 à août 2022</p>
                </div>
            </div>
        </div>
    </div>
    <div id="projects" class="bloc">
        <h1>Mes projets :</h1>

        <div class="element">
            <h2>Reversi</h2>
            <div>
                <div class="text-image flex-row">
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
                <div class="flex-row wrap max-width around text-center">
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/javascript.png" alt="JavaScript" height="64px" width="auto"/>
                        </div>
                        <p>JavaScript</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/intelliJ.png" alt='IntelliJ' height="64px" width="auto"/>
                        </div>
                        <p>IntelliJ IDEA</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/chrome.png" alt='Chrome' height="64px" width="auto"/>
                        </div>
                        <p>Google Chrome</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/git.png" alt='Git' height="64px" width="auto"/>
                        </div>
                        <p>Git</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/github.svg" alt='GitHub' height="64px" width="auto"/>
                        </div>
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
                <img src="resources/images/amazon51.png" alt="Logo Amazon51" height="128px" width="auto">
            </div>
            <div class="text-image flex-row">
                <div>
                    <p>Amazon51 est un projet de site de vente en ligne réalisé dans le cadre universitaire. Le nom
                        n'est autre qu'un jeu de mot entre l'entreprise mondialement connue Amazon et la mystérieuse
                        Zone51 du Nevada.
                    </p>
                    <p>L'objectif de ce projet consiste à la réalisation d'un site e-commerce avec un cahier des charges
                        précis tel que la création d'un compte, la gestion d'un panier et d'une commande. Le site est
                        programmé en PHP et repose sur une base de données MySQL</p>
                    <p>
                        Le thème de Amazon51 est absolument aléatoire, on y trouve tout et n'importe quoi, des produits
                        ou choses introuvables et inexistant sur un vrai site de ventes en ligne.
                        Quelques clins d'œils sont cachés dans le site, des références à la technologie, Amazon ou
                        encore la programmation.
                    </p>
                </div>
            </div>
            <div>
                <img id="a51s" alt="Page boutique de Amazon51" src="resources/images/amazon51-store.png" width="1000px">
            </div>
            <div class="flex-column max-width item-center">
                <h3>Technologies utilisées</h3>
                <div class="flex-row wrap max-width around margin-child text-center">
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/html.webp" alt="HTML" height="64px" width="auto"/>
                        </div>
                        <p>HTML</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/css.png" alt="CSS" height="64px" width="auto"/>
                        </div>
                        <p>CSS</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/javascript.png" alt="JavaScript" height="64px" width="auto"/>
                        </div>
                        <p>JavaScript</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/php.png" alt="PHP" height="64px" width="auto"/>
                        </div>
                        <p>PHP</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/mysql.png" alt="JavaScript" height="64px" width="auto"/>
                        </div>
                        <p>MySQL</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/intelliJ.png" alt='IntelliJ' height="64px" width="auto"/>
                        </div>
                        <p>IntelliJ IDEA</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/chrome.png" alt='Chrome' height="64px" width="auto"/>
                        </div>
                        <p>Google Chrome</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/wampp.png" alt="Wampp Server" height="64px" width="auto"/>
                        </div>
                        <p>Wampp Server</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/git.png" alt='Git' height="64px" width="auto"/>
                        </div>
                        <p>Git</p>
                    </div>
                    <div class="flex-column center">
                        <div>
                            <img src="resources/images/github.svg" alt='GitHub' height="64px" width="auto"/>
                        </div>
                        <p>GitHub</p>
                    </div>
                </div>
            </div>
            <div class="flex-row">
                <div class="sub-element flex-column" style="width: 40%">
                    <h3>Compétences approfondies</h3>
                    <div>
                        <ul>
                            <li>Front-end development</li>
                            <li>Développement PHP</li>
                            <li>Manipulation des tableaux PHP</li>
                            <li>Syntaxe SQL générale</li>
                            <li>Conception base de données</li>
                            <li>Architecture Web MVC</li>
                        </ul>
                    </div>
                </div>
                <div class="sub-element flex-column" style="width: 60%">
                    <h3>Difficultés rencontrées</h3>
                    <ul>
                        <li>J'ai mis du temps à comprendre l'intérêt de l'architecture MVC lors du développement Web,
                            mais maintenant que je sais m'en servir, je trouve que c'est une méthode de conception
                            incroyable. Elle permet de masquer l'arborescence du site et réduit le nombre de d'import
                            dans les fichiers php
                        </li>
                        <li>La gestion du panier de l'utilisateur a été un long problème. Beaucoup de difficulté à
                            manipuler les réponses SQL pour afficher correctement les produits dans le panier avec leur
                            quantité et évité d'avoir un zéro là où il ne devrait pas y en a voir
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="leisure" class="bloc">
        <h2>Mes passions :</h2>
    </div>
    <div id="skills" class="bloc">
        <h2>Mes compétences</h2>
        <div>
            <h3>» Front-end</h3>
            <div class="flex-row margin-child32 item-center">
                <div class="flex-column item-center">
                    <img alt="html5" src="resources/images/html.webp" width="48px">
                    <p>HTML 5</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="css3" src="resources/images/css.png" width="48px">
                    <p>CSS 3</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="javascript" src="resources/images/javascript.png" width="48px">
                    <p>JavaScript</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="jquery3.6" src="resources/images/jquery.png" width="48px">
                    <p>jQuery 3.6</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="bootstrap5.1" src="resources/images/bootstrap.png" width="48px">
                    <p>Bootstrap</p>
                </div>
            </div>
            <h3>» Back-end</h3>
            <div class="flex-row flex-start margin-child32 item-center">
                <div class="flex-column item-center">
                    <img alt="java" src="resources/images/java.png" width="48px">
                    <p>Java</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="PHP" src="resources/images/php.png" width="48px">
                    <p>PHP</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="Python" src="resources/images/python.png" width="48px">
                    <p>Python</p>
                </div>
            </div>
            <h3>» Base de données</h3>
            <div class="flex-row margin-child32 item-center">
                <div class="flex-column item-center">
                    <img alt="mysql" src="resources/images/mysql.png" width="48px">
                    <p>MySQL</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="oraclesql" src="resources/images/orcale.png" width="48px">
                    <p>Oracle SQL</p>
                </div>
            </div>
            <h3>» Éditeur / IDE</h3>
            <div class="flex-row margin-child32 item-center">
                <div class="flex-column item-center">
                    <img alt="intellij" src="resources/images/intelliJ.png" width="48px">
                    <p>IntelliJ IDEA</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="vscode" src="resources/images/vscode.png" width="48px">
                    <p>VS Code</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="sublimetext" src="resources/images/sublime%20text.png" width="48px">
                    <p>Sublime Text</p>
                </div>
                <div class="flex-column item-center">
                    <img alt="androidstudio" src="resources/images/androidstudio.jpg" width="48px">
                    <p>Android Studio</p>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="bloc">
        <h2>Me contacter :</h2>
        <div class="flex-row between">
            <div>
                <form id="form" action="https://getform.io/f/c4d8f0f9-045d-47b5-84fe-c60900b32274" method="post">
                    <label for="object">Objet :</label>
                    <!--                    <input type="hidden" name="_subject" value="New email from your Website !">-->
                    <input id="object" type="text" name="subject" pattern="^.*[a-zA-Z0-9]+.*$" required>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" required></textarea>
                    <!--                    <input type="hidden" name="_next" value="view/thankyou.html">-->
                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <div>
                <p>Me contacter directement sur :</p>
                <div class="flex-row margin-child">
                    <a href="https://www.linkedin.com/in/eliott-barbet-306530197/" target="_blank">
                        <img alt="LinkedIn" src="resources/images/linkedin.png" width="48px">
                    </a>
                    <form action="mailto:eliottbarbetpro@gmail.com">
                        <input id="gmail" type="submit" alt="Gmail" src="resources/images/gmail.png" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>