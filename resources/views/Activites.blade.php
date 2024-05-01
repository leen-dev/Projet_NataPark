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
    <link rel="stylesheet" href="{{ asset('css/activites.css') }}">
    <title>Activites</title>
    <style>
        .banniere {
            background-image: url('images/bgac.png');
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
                nos Activites a NataPark
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

    <section class="desslides">

        <div class="slider">
            <div class="slide">
                <img src="{{ asset('images/1.png') }}" alt="Image 1">
            </div>
            <div class="slide">
                <img src="{{ asset('images/2.png') }}" alt="Image 1">
            </div>
            <div class="slide">
                <img src="{{ asset('images/5.png') }}" alt="Image 1">
            </div>
            <div class="slide">
                <img src="{{ asset('images/4.png') }}" alt="Image 1">
            </div>
        </div>


    </section>

    <section class="main">

        <div class="row1">

            <div class="col2">

                <h2>
                    Bebes Nageurs
                </h2>
                <p>
                    Les séances de bébé nageur sont avant tout un moment ludique, que vous partagerez avec votre enfant. Grâce aux neufs mois passés dans le ventre de la maman, entouré de liquide amniotique, un bébé se sentira naturellement à l'aise dans le milieu aquatique. Vous constaterez d'ailleurs que les nourrissons possèdent un réflexe natatoire : immergés, ils bloquent leur respiration, et agitent les jambes et les bras.

                    Sachez, pour vous rassurer, que les séances de bébés nageurs sont réglementées par une circulaire ministérielle. Cette circulaire concerne principalement la formation du personnel encadrant (l'équipe doit être constituée de plusieurs professionnels ayant une approche pédagogique et psychomotrice), et la température de la piscine : au minimum 25°C hors de l'eau et 32°C dans l'eau.
                </p>

            </div>

            <div class="col2">

                <img src="{{ asset('images/beben.png') }}" alt="">

            </div>
        </div>

        <div class="row1">

            <div class="col2">

                <h2>
                    Jardin Aquatique
                </h2>
                <p>
                    Elle s'inscrit souvent dans la continuité de l'activité bébé nageur, à la différence que cette fois la présence des parents n'est plus requise (mais là aussi, cela dépend des piscines).

                    Le jardin aquatique permet à l'enfant de se familiariser avec l'élément aquatique, d'évoluer en autonomie et de se préparer à l'apprentissage des différentes nages.

                    La séance est très ludique, et il n'y pas d'esprit de compétition. Plusieurs jeux sont proposés aux enfants : marcher sur un tapis flottant, descendre d'un toboggan, jouer avec différents accessoires : frites géantes, planches, ballons, jouets multicolores...

                    Une séance de jardin aquatique dure entre 30 minutes et une heure. Elle se déroule dans un bassin peu profond, avec une eau chauffée à 28/30°C.
                </p>

            </div>
            <div class="col2">

                <img src="{{ asset('images/iniv2.png') }}" alt="">

            </div>
        </div>

        <div class="row1">

            <div class="col2">

                <h2>
                    Familiarisation Natation
                </h2>
                <p>
                    Pour apprendre à nager, le plus tôt est le mieux. Il n’y a pas d’âge requis et cela dépend de chaque enfant, mais généralement avant 6/7 ans on parlera plus de familiarisation avec l'univers aquatique que véritablement d'apprentissage de la natation.

                    Si l’enfant a été très vite habitué à l’eau (grâce aux séances de bébé nageur par exemple), il aura moins peur de l’eau. Or, c’est souvent la peur de l’eau qui retarde l’apprentissage de la nage. L’enfant doit d’abord être rassuré et savoir s’amuser dans l’eau.

                    La natation est dans les programmes d’éducation sportive à partir de l’école maternelle. C’est l’occasion pour les enfants d’apprendre à nager ou de faire des progrès en natation.
                </p>

            </div>

            <div class="col2">

                <img src="{{ asset('images/iniv2.png') }}" alt="">

            </div>

        </div>

        <div class="row1">

            <div class="col2">

                <h2>
                    L'aquaphobie
                </h2>
                <p>
                    Les cours d'aquaphobie se destinent principalement aux personnes qui sont attirées par l'eau et qui ont envie de pouvoir nager sereinement dans une piscine, dans un lac ou dans une mer.

                    De nombreuses piscines proposent de telles leçons, sous forme de stage ou leçons régulières. Trouvez une piscine proche de chez vous qui propose des cours d'aquaphobie.

                    En groupe restreint, vous apprendrez à "apprivoiser" l'eau à votre rythme, en commençant par revoir les techniques de respiration, d'immersion et de flottaison.

                    Attention cependant au risque d'être déçu, ne vous attendez pas à sortir de vos séances d'aquaphobie en sachant nager à la perfection ! Le but de ces séances est bel et bien de maîtriser et de combattre sa peur de l'eau, d'arriver à mettre la tête sous l'eau, et surtout de ne pas paniquer lorsqu'on se retrouve dans un endroit où on n'a pas pied.

                    Le nombre de séances pour en arriver à ces résultats est variable, il dépend du degré de phobie au départ et du rythme de progression de chacun.

                    Après avoir suivi des cours d'aquaphobie, il est recommandé de retourner régulièrement dans l'eau pour se rassurer et ne pas perdre ses acquis.
                </p>

            </div>

            <div class="col2">

                <img src="{{ asset('images/iniv2.png') }}" alt="">

            </div>

        </div>

        <div class="row1">

            <div class="col2">

                <h2>
                    Le Handinage
                </h2>
                <p>
                    NataPark accueil des enfants en situation de handicap moteur souhaitant apprendre à nager ou se perfectionner.

                    La structure d’accueil permet l’accessibilité pour tous les handicaps.

                    Sous forme de petit groupe, avec un encadrement de qualité et qualifié, à raison d’une fois par semaine venez découvrir les plaisirs de l’eau et le plaisir de l’effort.

                    De l’eau-tonomie :
                    Parce que l’eau est le seul élément à procurer une liberté de mouvements sans risques, tous les types de handicap peuvent pratiquer la natation. Elle permet une autonomie du pratiquant.

                    Dans l’eau, la personne en situation de handicap reprend conscience de son corps et ne le subit plus. Les membres deviennent des outils légers permettant de se mouvoir seul, sans aucune prothèse. Les nageurs retrouvent ainsi le plaisir de bouger de façon autonome.

                    Si la pratique en loisir permet avant tout de se détendre, elle peut très vite devenir un véritable atout dans la vie quotidienne. En effet, la natation handisport permet d’acquérir des techniques d’équilibre, de propulsion et de respiration, applicables à toutes situations.
                </p>

            </div>

            <div class="col2">

                <img src="{{ asset('images/iniv2.png') }}" alt="">

            </div>

        </div>

    </section>

</body>

</html>
