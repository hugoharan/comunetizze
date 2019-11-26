@extends('layouts.base')

@section('title')
 Fit Product
@endsection

@section('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .box-user:hover, .box-user:hover>.box-bottom{
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        }
    </style>
@endsection

@section('menu-fit')
active
@endsection

@section('content')
<div class="container main-content">
    <div class="row">
        <div class="col-md-3" style="margin-bottom: 1.5em; padding: 0 1.5em;">
                <div class="box-user"  style="background: #F2F2F2; padding: 2.5em; text-align: center;">
                    <h1 style="color:#4F4F4F; font-size: 1.8em; font-weight: bold;">Encontre <span style="color: #EB5757;">o match perfeito</span> entre o afiliado e o seu produto</h1>
                    <img src="{{asset('img/fit.png')}}" alt="" style="margin: 0.9em;">
                </div>
            </div>
        @foreach($users as $user)
            <div class="col-md-3" style="margin-bottom: 1.5em; padding: 0 1.5em;">
                <div class="box-user"  style="background: #F2F2F2;">
                    
                    <div class="box-header" style="text-align: center; padding: 1em 2em;">
                        <img src="{{$user->path.$user->filename}}" alt="" style="max-width: 100px; border-radius: 100%; ">
                        <h2 style="font-weight: bold; color: #4F4F4F; font-size: 1.5em;">{{$user->name}}</h2>
                        <h3 style="font-weight: normal; color: #828282; font-size: 1em;">{{$user->tipo}}</h3>
                        <h4 style="font-weight: bold; color: #EB5757; font-size: 1.2em;">99% de Product Fit</h4>
                    </div>
                    <div class="box-bottom" style="border-top: 1px solid #E0E0E0; text-align: center; display: block;">
                       <div class="col-md-6" style="border-right: 1px solid #E0E0E0; padding: 1em; background-color: #F2F2F2;">
                            <a href="https://api.whatsapp.com/send?phone={{$user->telefone}}&text=Ol%C3%A1%2C%20quero%20me%20conectar%20com%20voc%C3%AA." target="_blank" style="">Enviar mensagem <i class="fa fa-whatsapp"></i></a>
                       </div>
                       <div class="col-md-6" style="padding: 1em; background-color: #EB5757;">
                            <a href="" style="color: #FFFFFF; text-decoration: none;">Conectar</a>
                       </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-md-3" style="margin-bottom: 1.5em; padding: 0 1.5em;">
                <div class="box-user"  style="background: #EB5757; padding: 2.5em; text-align: center;  padding-bottom: 1.7em;">
                    <img src="{{asset('img/premium.png')}}" alt="" style="margin: 0.9em;">
                    <h1 style="color:#FFFFFF; font-size: 1.4em; font-weight: bold;">Adquira nossa versão Premium e dê matchs ilimitados</h1>
                    <a href="#" style="display: block; border: 2px solid #FFFFFF; padding: 1em; text-transform: uppercase; font-size: 1em; color: #FFF; text-decoration: none;">Quero a versão premium</a>
                </div>
            </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection
