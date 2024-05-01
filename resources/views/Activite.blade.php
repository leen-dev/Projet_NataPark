<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/activite.css') }}" />
    <title>Document</title>

    <style>
        .header {
            background-image: url('images/row.jpg');
        }
    </style>

</head>

<body>

    <header>

        <div class="iconmenu" onclick="toggleNav();">
            <i class="bx bx-menu"></i>
        </div>

        <div class="img">
            <img src="{{ asset('images/logoo.png') }}" alt="">
            <a href="#" class="logo"> <span>N</span>ata <span>P</span>ark </a>
        </div>

        <ul class="navbar">

            <li>
                <a href="{{ url('/Accueil') }}" onclick="toggleNav();">
                    Acceuil
                </a>
            </li>
            <li>
                <a href="{{ url('/Activite') }}" onclick="toggleNav();">
                    Activités
                </a>
            </li>
            <li>
                <a href="/Contacts" onclick="toggleNav();">
                    Contacts
                </a>
            </li>

            <a type="button" class="btn-reserve" id="myBtn" onclick="toggleNav();">
                S'incrire
            </a>

        </ul>

    </header>

    <!-- <div class="header">

    </div> -->

    <!-- <div class="container">
        <div class="slider">
            <div class="slide">
                <img src="{{ asset('images/1.png') }}" alt="Image 1">
            </div>
            <div class="slide">
                <img src="{{ asset('images/2.png') }}" alt="Image 1">
            </div>
            <div class="slide">
                <img src="{{ asset('images/3.png') }}" alt="Image 1">
            </div>
            <div class="slide">
                <img src="{{ asset('images/4.png') }}" alt="Image 1">
            </div>
        </div>
    </div> -->

    <!-- <main>
        <div class="titre"> <u>
                <h3>NOS ACTIVITES</h3>
            </u></div>

        </div>
        <section class="section1">
            <ul>
                <li><img src="./img/2.png" alt="" /></li>
                <li>
                    <div>
                        <h4 class="titre1">COMPETITION DE NATATION</h4>
                        <br />
                        Le Centre de Formation Aquatique "Nage Plus" est bien plus qu'un
                        simple établissement d'apprentissage de la natation. Chaque année,
                        notre équipe dévouée organise avec passion une série de
                        compétitions de natation, attirant des nageurs de tous niveaux,
                        des débutants aux athlètes de haut niveau. Ces événements ne sont
                        pas seulement des occasions de compétition, mais aussi des moments
                        de camaraderie, d'échange de connaissances et de célébration de la
                        passion commune pour la natation.
                    </div>
                </li>
            </ul>
        </section>
        <section class="section2">
            <ul>
                <li>
                    <div>
                        <h4 class="titre1">
                            TOURNOI DE WATERPOLO POUR ADULTES ET ENFANTS
                        </h4>
                        <br />
                        Plongez dans l'action palpitante du water-polo avec le Tournoi
                        Aquatique "Splash Battle" organisé par notre Centre de Formation
                        Aquatique "Nage Plus" ! Venez vivre l'excitation de ce sport
                        aquatique dynamique, où la vitesse, l'agilité et la stratégie se
                        combinent pour créer un spectacle captivant.
                    </div>
                </li>
                <li><img src="./img/4.png" alt="" /></li>
            </ul>
        </section>
        <section class="section1">
            <ul>
                <li><img src="./img/5.png" alt="" /></li>
                <li>
                    <div>
                        <h4 class="titre1">CLUB DE WATERPOLO POUR ADULTES ET ENFANTS</h4>
                        <br />
                        Au sein du Centre de Formation Aquatique "Nage Plus", notre
                        engagement envers le water-polo ne se limite pas aux tournois
                        occasionnels. Nous sommes fiers de présenter notre propre club de
                        water-polo, offrant des opportunités excitantes tant pour les
                        adultes que pour les enfants, afin de plonger dans ce sport
                        passionnant et dynamique. Les adultes de tous âges sont les
                        bienvenus pour rejoindre notre club, avec une limite d'âge minimum
                        de 18 ans. Les enfants peuvent rejoindre notre club à partir de
                        l'âge de 8 ans, avec des groupes de différentes tranches d'âge
                        pour garantir une expérience enrichissante et adaptée à leur
                        niveau de développement.
                        <br />
                    </div>
                </li>
            </ul>
        </section>
        <section class="section3">
            <h3 style="text-align: center; margin-top: 10%">
                AQUAGYM POUR LES PERSONNES AGEES
            </h3>

            <ul>
                <li><img src="./img/6.png" alt="" class="img1" /></li>
                <li><img src="./img/7.png" alt="" class="img2" /></li>
            </ul>
            <div>
                Nous croyons en l'importance de rester actif à tout âge. C'est
                pourquoi nous proposons des séances d'aquagym spécialement conçues
                pour répondre aux besoins et aux intérêts des personnes âgées. Nos
                séances d'aquagym pour les personnes âgées offrent une approche douce
                mais efficace pour rester en forme et en bonne santé. Dans l'eau, les
                participants peuvent profiter d'un environnement sécuritaire et sans
                impact où ils peuvent travailler sur leur force, leur flexibilité et
                leur endurance tout en minimisant le stress sur les articulations.
            </div>
        </section>
    </main> -->

    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon__item">
                <a class="social-icon__link" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="#">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#">Acceuil</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Activite</a></li>
            <li class="menu__item">
                <a class="menu__link" href="#">Nos programmes</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">Notre equipe</a>
            </li>
            <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
        </ul>
    </footer>


    <script src="{{ asset('js/fichier.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
