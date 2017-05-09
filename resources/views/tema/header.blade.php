<!doctype html>

<html lang="pt-br">
<head>

    <title>{{ $sets->config_title }}</title>

    <link rel="icon" type="image/png" href="{{ url('/images/icones/favicon.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">

    <meta name="author" content="{{ $sets->config_auth }}">
    <meta name="generator" content="{{ $sets->config_name }}">
    <meta name="keywords" content="{{ $sets->config_key }}">
    <meta name="description" content="{{ $sets->config_descript }}">

    <link rel="stylesheet" href="{{ url('/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('/awesome/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('/lightbox/dist/css/lightbox.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('/css/main.css') }}" type="text/css">


    <script type="text/javascript" src="{{ url('/scripts/jquery-1.12.4.min.js') }}"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-98742724-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #F28400">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12" id="date_top">
                                        <div class="row">

                                            <script language="JavaScript" type="text/JavaScript">

                                            var dataHora, xHora, xDia, dia, mes, ano, saudacao;
                                            dataHora = new Date();
                                            xHora = dataHora.getHours();
                                            if (xHora >= 0 && xHora <12) {saudacao = "Bom Dia!"}
                                            if (xHora >= 12 && xHora < 18) {saudacao = "Boa Tarde!"}
                                            if (xHora >= 18 && xHora <= 23) {saudacao = "Boa Noite!"}
                                            xDia = dataHora.getDay();
                                            diaSem = new Array(7);
                                            diaSem[0] = "Domingo";
                                            diaSem[1] = "Segunda-feira";
                                            diaSem[2] = "Terça-feira";
                                            diaSem[3] = "Quarta-feira";
                                            diaSem[4] = "Quinta-feira";
                                            diaSem[5] = "Sexta-feira";
                                            diaSem[6] = "Sábado";

                                            dia = dataHora.getDate();
                                            mes = dataHora.getMonth();
                                            mesAno = new Array(12);

                                            mesAno[0] = "Janeiro";
                                            mesAno[1] = "Fevereiro";
                                            mesAno[2] = "Março";
                                            mesAno[3] = "Abril";
                                            mesAno[4] = "Maio";
                                            mesAno[5] = "Junho";
                                            mesAno[6] = "Julho";
                                            mesAno[7] = "Agosto";
                                            mesAno[8] = "Setembro";
                                            mesAno[9] = "Outubro";
                                            mesAno[10] = "Novembro";
                                            mesAno[11] = "Dezembro";

                                            ano = dataHora.getFullYear();
                                            document.write("<font color='3a3f44'>" + saudacao + " " + diaSem[xDia]   + ", " + dia + " de " + mesAno[mes] + " de " + ano + "</font>");


                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pull-right">
                                <ul class="list-icon">
                                    <li><a href="" class="list-icon-link"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i> </a></li>
                                    <li><a href="" class="list-icon-link"><i class="fa fa-google-plus-official fa-2x" aria-hidden="true"></i> </a></li>
                                    <li><a href="" class="list-icon-link"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i> </a></li>
                                    <li><a href="" class="list-icon-link"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i> </a></li>
                                    <li><a href="" class="list-icon-link"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <img src="{{ url('public/images/css/img_header.png') }}" class="img-responsive" alt="Treinamento Físico Orientado">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 5px">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"><i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav" id="list-menu">
                                    <li class="active"><a href="{{ url('/') }}"><i class="fa fa-link" aria-hidden="true"></i>&nbsp; {{ $nav->menu_list01 }} <span class="sr-only">(current)</span></a></li>
                                    <li><a href=""><i class="fa fa-history" aria-hidden="true"></i>&nbsp; {{ $nav->menu_list02 }}</a></li>
                                    <li><a href=""><i class="fa fa-group" aria-hidden="true">&nbsp; </i> {{ $nav->menu_list03 }}</a></li>
                                    <li><a href=""><i class="fa fa-child" aria-hidden="true"></i>&nbsp; {{ $nav->menu_list04 }}</a></li>
                                    <li><a href=""><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp; {{ $nav->menu_list05 }}</a></li>
                                    <li><a href=""><i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp; {{ $nav->menu_list06 }}</a></li>
                                    <li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; {{ $nav->menu_list07 }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>


    @yield('content')

    </div>

</body>

<script type="text/javascript" src="{{ url('/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/lightbox/dist/js/lightbox-plus-jquery.min.js') }}"></script>

</html>




