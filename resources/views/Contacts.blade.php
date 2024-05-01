<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/ananda-black">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <title>Contacts</title>

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
                <a href="{{ url('Contacts') }}" onclick="toggleNav();">
                    Contacts
                </a>
            </li>

            <a href="{{ url('Formulaire') }}" type="button" class="btn-reserve" id="myBtn" onclick="toggleNav();">
                S'incrire
            </a>

        </ul>

    </header>

    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>
                NataPark votre agence
            </h2>
            <p>
                Nous sommes là pour répondre à toutes vos questions,
                prendre vos commentaires et vous aider à vous inscrire à nos
                cours de natation passionants. N'hesitez pas à nous contacter
            </p>
            <a href="#programmes" class="btn1">
                Nos Programmes
            </a>
            <a href="#" class="btn2">
                Rejoignez nos cours
            </a>

        </div>

    </section>

    <section class="contact">

        <div class="container">

            <h2>ENVOYER UN MESSAGE</h2>

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

            <form action="/newmessage" class="contactform" id="contacts" method="post">

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
                    <textarea name="message" placeholder="message" id=""></textarea>
                </div>

                <div class="inputboite">
                    <input type="submit" value="Inscription">
                </div>

            </form>


        </div>

    </section>

    <div class="card">

        <div class="icon">
            <img src="Icone/telephone.png" alt="">
        </div>

        <p>
            +228 98803841
        </p>
    </div>

    <div class="card">

        <div class="icon">
            <img src="Icone/mail.png" alt="">
        </div>

        <p>natapark@gmail.com</p>

    </div>
    <div class="card">

        <div class="icon">
            <img src="Icone/localisation.png" alt="">
        </div>

        <p>Bé-Kpota</p>

    </div>

    <section class="maps">

    <div class="petitesection">

    <h4 style="text-align: center;">
            Nous retrouver sur Google Maps
        </h4>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.797794036991!2d1.254224073899408!3d6.15783052730694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e3d09382df23%3A0x7dd858a4f0707ca9!2sESIG%20Global%20Success!5e0!3m2!1sfr!2stg!4v1714005193255!5m2!1sfr!2stg" width="700" height="320" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>

    </section>

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



</body>

</html>
