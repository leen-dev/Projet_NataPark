<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .equipe {
            background-image: url('images/en1.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-x: hidden;
        }

        .hi-slide {
            position: relative;
            width: 754px;
            height: 292px;
            margin: 115px auto 0;
        }

        .hi-slide .hi-prev,
        .hi-slide .hi-next {
            position: absolute;
            top: 50%;
            width: 40px;
            height: 40px;
            margin-top: 20px;
            line-height: 40px;
            text-align: center;
            cursor: pointer;
            background-color: #fff;
            color: #000;
            transition: all 0.7s;
            font-size: 20px;
            font-weight: bold;
            border-radius: 50px;
        }

        .hi-slide .hi-prev:hover,
        .hi-slide .hi-next:hover{
            opacity: 1;
            background-color: #fff;
        }

        .hi-slide .hi-prev{
            left: -70px;
        }

        .hi-slide .hi-prev::before{
            content: '<';
        }

        .hi-slide .hi-next{
            right: -70px;
        }

        .hi-slide .hi-next::before{
            content: '>';
        }

        .hi-slide > ul{
            list-style: none;
            position: relative;
            width: 754px;
            height: 292px;
            margin: 0;
            padding: 0;
        }

        .hi-slide > ul > li{
            overflow: hidden;
            position: absolute;
            z-index: 0;
            left: 377px;
            top: 147px;
            width: 0;
            height: 0;
            border: 3px solid white;
            background-color: #333;
            cursor: pointer;
        }

        .hi-slide > ul > li > img{
            width: 100%;
            height: 100%;
            background-position: center;
        }

    </style>


</head>

<body>

    <section class="equipe">
        <div class="slide hi-slide">

            <div class="hi-prev">

            </div>
            <div class="hi-next">

            </div>
            <ul>
                <li><img src="{{ asset('images/fna.png') }}" alt=""></li>
                <li><img src="{{ asset('images/fna.png') }}" alt=""></li>
                <li><img src="{{ asset('images/fna.png') }}" alt=""></li>
                <li><img src="{{ asset('images/fna.png') }}" alt=""></li>
                <li><img src="{{ asset('images/fna.png') }}" alt=""></li>
                <li><img src="{{ asset('images/fna.png') }}" alt=""></li>
                <li><img src="{{ asset('images/fna.png') }}" alt=""></li>
            </ul>

        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/jquery.hislide.js"></script>
    <script>

$('.slide').hiSlide();

    </script>

</body>

</html>
