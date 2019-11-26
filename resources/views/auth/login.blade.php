@extends('layouts.login')

@section('title')
    Login
@endsection

@section('content')
<div class="conteudo">
	<h1 class="title-login">Bem vindo(a) ao Comunetizze</h1>
	<form class="form-horizontal" method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email" class="col-md-4 control-label">Digite seu e-Mail</label>
			<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
			@if ($errors->has('email'))
			<span class="help-block">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="password" class="control-label">Digite sua senha</label>
			<input id="password" type="password" class="form-control" name="password" required>

			@if ($errors->has('password'))
			<span class="help-block">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
			@endif
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-submit">
				Entrar agora
			</button>	
		</div>

		<a class="btn btn-link" href="#"><!--{{ route('password.request') }}-->
			Esqueci minha senha
		</a>

		<div class="form-group">
			<a href="{{ route('register') }}" class="btn btn-register">
				Crie sua conta grátis
			</a>	
		</div>
	</form>
</div>


@endsection