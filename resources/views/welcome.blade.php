<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kuro Uma - Auténtico Sushi Bar en Mérida</title>
    <meta name="description" content="Kuro uma, Caballo negro. Izakaya Omakase. Aquí, tras una entrada modesta, se consigue un secreto inesperado. Aquí se come comida japonesa, hecha por manos expertas, se saborea el pescado en todas sus delicadezas y los cortes hechos con arte y amor.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        .cabecera {
            background-color: #000;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2,
        p,
        small {
            color: #fff;
        }
        
        @media (max-width:500px) {
            .center {
                padding-top: 8em;
            }
        }

        .btn-primary {
            background-color: #EB0C32;
            color: #fff;
            
            border:none;
        }
        .btn-primary:hover {
           background-color: #fff;
           color: #000;
        }
        .btn-primary:active {
            background-color: #EB0C32 !important;
            color: #fff !important;
            border: none !important;
        }
        
    </style>

</head>

<body class=" vw-100 justify-content-center align-items-center">

    <section class="cabecera">
        <div class="container">
            <div class="text-center center">
                <figure>
                    <img src="{{asset('/img/kuro-icono.svg')}}" alt="Logotipo Kuro Uma">
                </figure>
                <h2><b>Kuro Uma - Sushi bar</b></h2>
                <p>Kuro uma, Caballo negro. Izakaya Omakase. Aquí, tras una entrada modesta, se consigue un secreto inesperado. Aquí se come comida japonesa, hecha por manos expertas, se saborea el pescado en todas sus delicadezas y los cortes hechos con arte y amor. </p>
                <a href="https://bit.ly/kurouma" target="_blank" class="btn btn-primary">Reserva con nosotros</a>
                <div>
                    <small>Reservaciones vía OpenTable</small>
                </div>
                <div class="pt-3">
                    <small class="pr-3">
                       <a href="https://www.facebook.com/kuroumamx"  target="_blank"> <img src="{{asset('/img/facebook.svg')}}" width="30" style="color: #fff;" alt=""></a>
                    </small>
                    <small>
                    <a href="https://www.instagram.com/kurouma_mid/" target="_blank"> <img src="{{asset('/img/instagram.svg')}}" width="30" style="color: #fff;" alt=""></a>
                    </small>
                </div>
            </div>

        </div>
    </section>

</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</html>