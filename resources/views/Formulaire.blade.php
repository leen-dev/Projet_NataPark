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
    <link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">
    <title>Document</title>

    <style>
        .banniere {
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
                <a href="{{ url('Contacts') }}" onclick="toggleNav();">
                    Contacts
                </a>
            </li>

            <a type="button" class="btn-reserve" id="myBtn" onclick="toggleNav();">
                S'incrire
            </a>




        </ul>

    </header>

    <section class="banniere" id="banniere">

        <!-- <h2>
                NataPark votre agence
            </h2> -->
        <!--
            <div id="myModal" class="modal">

                <div class="modal-content" id="connexion"> -->

        <!-- <span class="close">&times;</span> -->
        <section class="inscription" id="inscription">

            <div class="titre noir">

                <h2 class="titre-texte">
                    <span> Je m'inscris </span>
                </h2>

            </div>

            <div class="contenus">


                <div class="contenu c1">

                    Le centre de formation NataPark s'engage à protéger la confidentialité et la sécurité des données personnelles de ses utilisateurs. Nous collectons des informations personnelles telles que votre nom, adresse e-mail, et informations de paiement pour traiter vos demandes d'inscription et répondre à vos questions. Vos informations sont sécurisées et ne sont pas partagées avec des tiers sans votre consentement. Nous utilisons des cookies pour améliorer votre expérience sur notre site web, mais vous pouvez les désactiver si vous le souhaitez.

                    En utilisant notre site web, vous consentez à notre politique de confidentialité. Pour toute question ou préoccupation, contactez-nous à <span><a href="">natapark@gmail.com</a></span>. Cette politique est en vigueur à partir du <span>29 Avril 2023</span> et peut être modifiée sans préavis. Merci de consulter régulièrement cette page pour rester informé des mises à jour<span><a href="">...</a></span>

                </div>

                <div class="contenu c2">

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
                            Si vous vous Inscrivez vous acceptez nos <span><a href="">conditions d'utilisation</a></span> et notre <span><a href="">politique de confidentialite</a></span>
                        </p>

                        <div class="inputboite">
                            <input type="submit" value="Inscription">

                        </div>

                        <p>
                            <a href="{{ url('/FormEnfant') }}">Inscrire mon enfant</a>
                        </p>



                    </form>

                </div>

            </div>

        </section>



        <!-- </div>

        </div> -->
    </section>

</body>

</html>
