<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Comunetizze | @yield('title')</title>
    
    <!-- Fonts -->
    <link href="{{ asset('theme/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700i&display=swap" rel="stylesheet">
    <!-- Custom Style -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
	<section class="container">
		<div id="sidebar">
	    	<img src="{{ asset('img/logo-gde.png')}}" alt="" class="image">
	    	<h1>Conecte-se aos melhores afiliados e produtores do Brasil.</h1>
	    	<ul>
	    		<li><i class="fa fa-facebook"></i></li>
	    		<li><i class="fa fa-linkedin"></i></li>
	    		<li><i class="fa fa-instagram"></i></li>
	    	</ul>
			<div class="links">
				<a href="#">Termos de uso</a>
				<a href="#">Política de privacidade</a>
			</div>
		</div>
		<div id="info">
			@yield('content')
		</div>
	</section>
</body>
</html>

