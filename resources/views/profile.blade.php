@extends('layouts.base')

@section('title')

@endsection

@section('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style type="text/css">
    	.default-form label{
			display: block;
			font-size: 1em;
			line-height: 1.5;
			color: #4F4F4F;
			margin-bottom: 0;
    	}

    	.default-form input, .default-form select{
    		background-color: transparent;
    		border: none;
    		border-bottom: 1px solid #4F4F4F;
    		width: 100%;
    		line-height: 1.5;
    		padding: 10px 10px 5px;
    		font-size: 1.3em;
    		margin-bottom: 10px;
    	}

    	.default-form span.edit{
    		position: relative;
    bottom: 45px;
    right: 15px;
    float: right;
    font-size: 20px;
    color: #666666;
    	}

    	.default-form h1{
    		font-weight: bold;
    		color: #4F4F4F;
    		font-size: 2.5em;
    	}
    	.image-upload > input {
  visibility:hidden;
  width:0;
  height:0
}
    </style>
@endsection

@section('menu-perfil')
active
@endsection

@section('content')
<div class="container main-content">
    <div class="box-profile">
    	
        <div class="col-md-3 left-col" style="background-color: #2332A5; text-align: center; padding: 2em;">
			
			
			<img src="{{ asset(Auth::user()->path.Auth::user()->filename)}}" class="img-user" alt="" style="border-radius: 100%;">
			<h2 style="color: #FFF; font-size: 2em; font-weight: bold;text-transform: uppercase;">{{ Auth::user()->name }}</h2>
			@if(!empty(Auth::user()->tipo))
			<h3 style="color: #FFF; font-size: 1.2em; font-weight: normal; text-transform: uppercase;">{{ Auth::user()->tipo }}</h3>
			@endif
        </div>
        <div class="col-md-9" style="background-color: #F2F2F2; padding: 2em 4em;">
        	
        	<form action="{{route('editarPerfil') }}" method="PUT" class="default-form">
        		<div class="row">
        			
	        		<div class="col-md-12">
		        		<h1>Meu perfil</h1>
		        		
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							<strong>Erro!</strong> Existem erros no seu formulário.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
	        		</div>
        		</div>
        		<div class="row">
        			<div class="col-md-6">
        				<div class="form-group">
        					
        					<label for="name">Nome</label>
							<input type="text" name="name" value="{{Auth::user()->name}}" />
							<span class="edit"><i class="fa fa-pencil"></i></span>
        				</div>
        				<div class="form-group">
        					
        					<label for="email">E-mail</label>
							<input type="text" name="email" value="{{Auth::user()->email}}" />
							<span class="edit"><i class="fa fa-pencil"></i></span>
        				</div>
        				

        			</div>
        			<div class="col-md-6">
        				<div class="form-group">
        					
        					<label for="telefone">Telefone</label>
							<input type="text" name="telefone" value="{{Auth::user()->telefone}}" />
							<span class="edit"><i class="fa fa-pencil"></i></span>
        				</div>
        				<div class="form-group">
        					
        					<label for="tipo">Tipo de afiliação</label>
							<select name="tipo">
								<option value="produtor">Produtor</option>
								<option value="afiliado">Afiliado</option>
								<option value="produtor-afiliado">Produtor e afiliado</option>
							</select>
        				</div>
        			</div>
        		</div>


				<button type="submit" style="background-color: #2332A5; border: none; padding: 1em 3em; float: right; display: block; margin: 1em; color: #FFFFFF; text-transform: uppercase; border-radius: 10px;">Salvar</button>
        	</form>






        </div>
    </div>
    
    
</div>
@endsection

@section('scripts')
    
@endsection
