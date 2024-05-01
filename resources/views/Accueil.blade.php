<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/ananda-black">
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <title>Accueil</title>
</head>

<style>
    .banniere {
        background-image: url('images/row.jpg');
    }
</style>

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
                <a href="{{ url('Contacts') }}" onclick="toggleNav();">
                    Contacts
                </a>
            </li>

            <a href="{{ url('Formulaire') }}" type="button" class="btn-reserve" id="myBtn" onclick="toggleNav();">
                S'incrire
            </a>

            <!-- <div id="myModal" class="modal">

                <div class="modal-content" id="connexion">

                    <span class="close">&times;</span>
                    <section class="inscription" id="inscription">

                        <div class="contenu">

                            <div class="titre noir">

                                <h2 class="titre-texte">
                                    <span>Inscrivez-vous</span>
                                </h2>

                            </div>

                            @if(session('status'))
                            <div class="alert alert-succes">
                                {{ session ('status') }}
                            </div>
                            @endif

                            <ul>
                                @foreach ($errors -> all() as $error)

                                <li class="alert alert-danger">
                                    {{ $error }}
                                </li>

                                @endforeach
                            </ul>

                            <form action="/ajouter" class="contactform" id="contacts" method="post">

                                {{ csrf_field() }}

                                <div class="inputboite">
                                    <input type="text" placeholder="nom" name="nom">
                                </div>

                                <div class="inputboite">
                                    <input type="text" placeholder="prenom" name="prenoms">
                                </div>

                                <div class="inputboite">
                                    <input type="text" placeholder="email" width="100px" name="email">
                                </div>

                                <div class="inputboite">
                                    <select name="programme" id="programme" name="programme">
                                        <option value="Programme">Programme</option>
                                        <option value="programme1">Programmr1</option>
                                        <option value="programme2">Programmr2</option>
                                        <option value="programme3">Programmr3</option>
                                        <option value="programme4">Programmr4</option>

                                    </select>
                                </div>

                                <p>
                                    Si vous vous Inscrivez
                                </p>

                                <div class="inputboite">
                                    <input type="submit" value="Inscription">

                                </div>



                            </form>

                        </div>

                    </section>

                </div>

            </div> -->


        </ul>

    </header>

    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>
                NataPark votre agence
            </h2>
            <p>
                Bienvenue sur notre site dédié à la natation ! Notre passion pour ce sport aquatique nous a conduit à créer cet espace où les nageurs, débutants ou confirmés, peuvent trouver des informations, des conseils et des ressources pour améliorer leurs compétences.

                L’histoire de notre site a commencé il y a plusieurs années, lorsque nous avons plongé pour la première fois dans une piscine. Depuis lors, nous avons exploré les différentes techniques de nage, découvert les bienfaits pour la santé et partagé notre enthousiasme avec d’autres passionnés.
            </p>
            <a href="#programmes" class="btn1">
                Nos Programmes
            </a>
            <a href="#" class="btn2">
                Rejoignez nos cours
            </a>

        </div>
    </section>
    <br>


    <section class="apropos" id="apropos">

        <h2 class="titre-texte">
            <span>A</span> Propos De Nous
        </h2>



        <div class="row">

            <div class="col-6 article">

                <h2>A la decouverte de notre Club</h2><br>

                <div class="texte">

                    <span>Le club de natation de NTP</span> est une organisation dynamique et passionnée qui se consacre à <span>promouvoir</span> la natation et le <span>bien-être</span> dans notre communauté. Notre club offre des <span>programmes d'entraînement</span> de haute qualité pour les nageurs de <span>tous âges et niveaux</span>, allant des débutants aux compétiteurs avancés.

                    Nous organisons régulièrement des séances d'entraînement en groupe, des cours de technique de natation et des compétitions amicales pour permettre à nos membres de développer leurs compétences et de se mesurer aux autres nageurs. <span>Notre équipe d'entraîneurs</span> expérimentés est dévouée à <span>aider chaque nageur à atteindre ses objectifs personnels</span>, qu'il s'agisse de perfectionner sa technique, d'améliorer sa condition physique ou de participer à des compétitions de haut niveau.

                    En plus de nos activités sportives, nous organisons également des <span>événements sociaux et des sorties en équipe</span> pour renforcer les liens entre nos membres et favoriser un esprit d'équipe solide. Nous croyons que la natation est non seulement une activité physique bénéfique, mais aussi une occasion de tisser des amitiés durables et de créer des souvenirs inoubliables.

                    Rejoignez-nous dès aujourd'hui et découvrez les nombreux avantages de faire partie du club de natation de NTP. Que vous soyez un nageur débutant ou expérimenté, nous avons les ressources et le soutien nécessaires pour vous aider à atteindre vos objectifs dans un environnement amusant et stimulant.


                </div>

            </div>

            <div class="col-6 valeurs">

                <h3>
                    Nos valeurs
                </h3>

                <p>
                    Passion : Nous sommes passionnés par la natation et nous voulons transmettre cette passion à chacun.
                    Santé et bien-être : La natation est un excellent moyen de rester en forme et de se détendre. Nous encourageons un mode de vie sain à travers nos articles et nos conseils.
                    Communauté : Nous croyons en la force de la communauté des nageurs. Rejoignez-nous pour partager vos expériences, vos défis et vos succès.
                </p>

                <h3>
                    Notre mission
                </h3>

                <p>

                    Notre mission est simple : encourager plus de personnes à découvrir les joies de la natation. Que vous souhaitiez apprendre à nager, perfectionner votre technique ou simplement profiter de l’eau, nous sommes là pour vous accompagner. Nous croyons que la natation est bien plus qu’un exercice physique ; c’est une expérience qui nourrit l’esprit et le corps.
                </p>

            </div>

        </div>

    </section>

    <!-- <section class="equipe">

        <h1>
            Notre equipe
        </h1>

        <div class="rows hi-rows">

            <div class="btnp">

            </div>
            <div class="btnn">

            </div>

            <div class="roww">
                <div class="col-e">
                    <img src="{{ asset('images/m1.png') }}" alt="">
                    <p>
                    <h5>
                        Alexandre AWOUZOUBA
                    </h5>

                    Entraîneur

                    </p>
                </div>
                <div class="col-e">
                    <img src="{{ asset('images/m2.png') }}" alt="">
                    <p>
                    <h5>
                        Ata LASSEY-ASSIAKOLEY
                    </h5>

                    Maître -Nageur

                    </p>
                </div>
                <div class="col-e">
                    <img src="{{ asset('images/m1.png') }}" alt="">
                    <p>
                    <h5>
                        Ata LASSEY-ASSIAKOLEY
                    </h5>

                    Maître -Nageur
                    </p>
                </div>
                <div class="col-e">
                    <img src="{{ asset('images/m2.png') }}" alt="">
                    <p>
                    <h5>
                        Alexandre AWOUZOUBA
                    </h5>

                    Formateur
                    </p>
                </div>
                <div class="col-e">
                    <img src="{{ asset('images/f1.png') }}" alt="">
                    <p>
                    <h5>
                        Ata LASSEY-ASSIAKOLEY
                    </h5>

                    Maître -Nageur
                    </p>
                </div>
                <div class="col-e">
                    <img src="{{ asset('images/f1.png') }}" alt="">
                    <p>
                    <h5>
                        Alexandre AWOUZOUBA
                    </h5>

                    Formateur
                    </p>
                </div>
                <div class="col-e">
                    <img src="{{ asset('images/m1.png') }}" alt="">
                    <p>
                    <h5>
                        Alexandre AWOUZOUBA
                    </h5>

                    Entraîneur
                    </p>
                </div>
            </div>

        </div>

    </section> -->


    <section class="abonnements" id="programmes">

        <h2>
            Pour Les Tout Petits
        </h2>
        <br>
        <div class="partie">

            <div class="col">

                <h2>
                    Bebes Nageurs
                </h2>
                <img src="{{ asset('images/beben.png') }}" alt="">
                <p>
                    a partir de <span class="s">10000</span> frCFA<br>
                    <span>jusqu'a 3ans</span> <br>
                    <a href="{{ url('') }}" class="btn1">
                        Inscrire votre enfant
                    </a>
                </p>

            </div>
            <div class="col">
                <h2>
                    Jardin Aquatique - COMPLET
                </h2>
                <img src="{{ asset('images/jardaqua.png') }}" alt="">
                <p>
                    <span class="s">bientot disponible</span> <br>
                    <span>de 3ans a 6ans</span> <br>
                    <a href="{{ url('') }}" class="btn1">
                        Inscrire votre enfant
                    </a>
                </p>
            </div>
            <div class="col">

            </div>
        </div>

        <h2>Niveau Enfant & Ados</h2>

        <div class="partie">
            <div class="col">
                <h2>
                    Familiarisation Natation Enfant
                </h2>
                <img src="{{ asset('images/fne.png') }}" alt="">
                <p>
                    <span class="s">bientot disponible</span> <br>
                    <span>de 6ans a 12ans</span> <br>
                    <a href="{{ url('') }}" class="btn1">
                        Inscrire votre enfant
                    </a>
                </p>
            </div>
            <div class="col">
                <h2>
                    Initiation Natation Enfant
                </h2>
                <img src="{{ asset('images/iniv2.png') }}" alt="">
                <p>
                    a partir de <span class="s">27500</span> frCFA <br>
                    <span>de 6ans a 12ans</span> <br>
                    <a href="{{ url('') }}" class="btn1">
                        Inscrire votre enfant
                    </a>
                </p>
            </div>
            <div class="col">
                <h2>
                    Initiation Natation Ado
                </h2>
                <img src="{{ asset('images/iniv1.png') }}" alt="">
                <p>
                    <span class="s">bientot disponible</span> <br>
                    <span>de 3ans a 6ans</span> <br>
                    <a href="{{ url('') }}" class="btn1">
                        Inscrire votre enfant
                    </a>
                </p>
            </div>

            <div class="col">

                <h2>
                    Evolution Natation
                </h2>
                <img src="{{ asset('images/en1.png') }}" alt="">
                <p>
                    a partir de <span class="s">27500</span> frCFA<br>
                    <span>de 6ans a 12 ans</span> <br>
                    <a href="{{ url('') }}" class="btn1">
                        Inscrire votre enfant
                    </a>
                </p>

            </div>
            <div class="col">
                <h2>
                    Performance Natation
                </h2>
                <img src="{{ asset('images/pn1.png') }}" alt="">
                <p>
                    a partir de <span class="s">27500</span> frCFA<br>
                    <span>de 6ans a 12ans</span> <br>
                    <a href="{{ url('') }}" class="btn1">
                        Inscrire votre enfant
                    </a>
                </p>
            </div>
            <div class="col">

            </div>
        </div>

        <h2>Niveau Adultes</h2>

        <div class="partie">
            <div class="col">
                <h2>
                    Aquaphobie
                </h2>
                <img src="{{ asset('images/aq.png') }}" alt="">
                <p>
                    <span class="s">bientot disponible</span>
                    <br> <span>a partir de 16 ans</span> <br>
                    <a href="{{ url('/Formulaire') }}" class="btn1">
                        Vous Inscrire
                    </a>
                </p>
            </div>
            <div class="col">
                <h2>
                    Initiation Natation Adulte
                </h2>
                <img src="{{ asset('images/ia.png') }}" alt="">
                <p>
                    a partir de <span class="s">27500</span> frCFA <br>
                    <span>de 6ans a 12ans</span> <br>
                    <a href="{{ url('/Formulaire') }}" class="btn1">
                        Vous Inscrire
                    </a>
                </p>
            </div>
            <div class="col">
                <h2>
                    Evolution Natation Adulte
                </h2>
                <img src="{{ asset('images/ea.png') }}" alt="">
                <p>
                    a partir de <span class="s">27500</span> frCFA <br>
                    <span>de 6ans a 12ans</span> <br>
                    <a href="{{ url('/Formulaire') }}" class="btn1">
                        Vous Inscrire
                    </a>
                </p>
            </div>

            <div class="col">
                <h2>
                    Performance Natation Adulte
                </h2>
                <img src="{{ asset('images/pa.png') }}" alt="">
                <p>
                    <span class="s">bientot disponible</span> <br>
                    <span>a partir de 16 ans</span> <br>
                </p>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>

        <h2>Nos Plus</h2>

        <div class="partie">
            <div class="col">
                <h2>
                    Handinage
                </h2>
                <img src="{{ asset('images/fne.png') }}" alt="">
                <p>
                    a partir de <span class="s">27500</span> frCFA<br>
                    <span>de 6ans a 12ans</span> <br>
                    <a href="#programmes" class="btn1">
                        Isncrire votre enfant
                    </a>
                </p>
            </div>
            <div class="col">
                <h2>
                    Natation Synchronisee
                </h2>
                <img src="{{ asset('images/iniv2.png') }}" alt="">
                <p>
                    a partir de <span class="s">27500</span> frCFA <br>
                    <span>a partir de 12ans</span> <br>
                    <a href="{{ url('/Formulaire') }}" class="btn1">
                        Vous Inscrire
                    </a>
                </p>
            </div>
            <div class="col">
                <h2>
                    Initiation & Evolution Acces
                </h2>
                <img src="{{ asset('images/iniv1.png') }}" alt="">
                <p>
                    a partir de <span class="s">30000</span>frCFA <br>
                    <span>de 6ans a 12ans</span> <br>
                    <a href="#programmes" class="btn1">
                        Vous Inscrire
                    </a>
                </p>
            </div>
        </div>
    </section>



    <!-- <section class="sliddes">
        <div class="slides">
            <div class="slide">
                <img src="{{ asset('images/AccBg.png') }}" alt="">
                <div class="texts">
                    <h3>
                        2022
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis ex fugit. Sunt ad nam, dicta eveniet unde necessitatibus quae magnam in facilis accusamus similique incidunt beatae ex officiis cum.
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ asset('images/AccBg.png') }}" alt="">
                <div class="texts">
                    <h3>
                        2023
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis ex fugit. Sunt ad nam, dicta eveniet unde necessitatibus quae magnam in facilis accusamus similique incidunt beatae ex officiis cum.
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ asset('images/AccBg.png') }}" alt="">
                <div class="texts">
                    <h3>
                        2024
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis ex fugit. Sunt ad nam, dicta eveniet unde necessitatibus quae magnam in facilis accusamus similique incidunt beatae ex officiis cum.
                    </p>
                </div>
            </div>

            <i id="nav-gauche" class="bx bx"></i>
            <i id="nav-gauche" class="bx bx"></i>

        </div>
    </section> -->

    <!-- <footer class="footer">
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
    </footer> -->

    <footer>
        <div class="contain">

            <div class="footer-container">

                <div class="container-info">
                    <h3>NataPark</h3>
                    <p>Quartier Bè-kpota <br>97232 Le Lamentin</p>
                    <button>ACCES ET CONTACT</button>
                </div>

                <div class="group-info">
                    <h3>Le groupe NataPark</h3>
                    <ul>
                        <li><a href="#">Le groupe NataPark</a></li>
                        <li><a href="#">Rejoignez la communauté NataPark</a></li>
                        <li><a href="#">La formation</a></li>
                    </ul>
                </div>

            </div>

            <div class="links">

                <div class="NataPark-info">
                    <h3>NataPark & vous</h3>
                    <ul>
                        <li><a href="#">Assurance annulation</a></li>
                        <li><a href="#">Aide et informations</a></li>
                    </ul>
                </div>

                <div class="additional-info">
                    <h3>Rejoignez-nous</h3>
                    <div class="reseau">
                        <img src="Icone/facebook.png" alt="">
                        <img src="Icone/instagram.png" alt="">
                        <img src="Icone/youtube.png" alt="">
                        <img src="Icone/twitter.png" alt="">

                    </div>

                </div>

            </div>

        </div>


    </footer>


    <script type="module" src="{{ url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js') }}"></script>
    <script nomodule src="{{ url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js') }}"></script>


    <script src="{{ asset('js/fichier.js') }}"></script>

    <script>
        let compteur = 0;
        let timer, slides, slider;

        window.onload = () => {
            const sliddes = document.querySelector(".sliddes");
            slides = document.querySelector(".slides");

            slider = Array.from(slides.children);

            let next = document.querySelector("#nav-droite");
            next.addEventListener("click", slideNext);

            function slideNext() {
                compteur++;
            }

        }
    </script>


</body>

</html>
