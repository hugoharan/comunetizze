<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comunettize | Seja bem vindo(a)</title>
    <link href="{{ asset('theme/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700i&display=swap" rel="stylesheet">
    <link href="{{ asset('css/first-access.css') }}" rel="stylesheet">
</head>
<body>
    <img src="{{asset('img/logo-azul.png')}}" class="logo" alt="Logotipo Comunetizze">
    <div id="slider">
        <div class="item active">
            <p class="steps">1 / 3</p>
            <img src="{{asset('img/1.png')}}" alt="Primeiro passo">
            <h1>Conecte-se a Produtores e Afiliados</h1>
            <p>A Comunetizze conecta você aos melhores profissionais, te ajudando a escolher o afiliado ideal para seu produto.</p>
            <a href="{{ route('home') }}" class="skip-intro">Pular introdução</a>
            <a href="#" class="prox"><i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="item ">
            <p class="steps">2 / 3</p>
            <img src="{{asset('img/2.png')}}" alt="Segundo passo">
            <h1>Comunicação Otimizada</h1>
            <p>O poder da comunicação ao seu alcance. Faça alinhamentos, informe, troque ideias, faça detalhamentos, crie grupos.</p>
            <a href="{{ route('home') }}" class="skip-intro">Pular introdução</a>
            <a href="#" class="ant"><i class="fa fa-chevron-left"></i></a>
            <a href="#" class="prox"><i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="item">
            <p class="steps">3 / 3</p>
            <img src="{{asset('img/3.png')}}" alt="Terceiro passo">
            <h1>Entre em contato com seus afiliados com facilidade</h1>
            <p>Mais comodidade. Com aluns cliques você se conecta com seus afiliados</p>
            <a href="{{ route('home') }}" class="now">Começar agora</a>
            <a href="#" class="ant"><i class="fa fa-chevron-left"></i></a>
        </div>
    </div>

    <script src="{{ asset('theme/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/first-access.js') }}"></script>
</body>
</html>