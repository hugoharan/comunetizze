@extends('layouts.base')

@section('title')
 Meus afiliados
@endsection

@section('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .box-user:hover, .box-user:hover>.box-bottom{
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        }
    </style>
@endsection

@section('menu-afiliados')
active
@endsection

@section('content')
<div class="container main-content">
    <div class="row">
        <div class="col-md-3" style="margin-bottom: 1.5em; padding: 0 1.5em;">
                <div class="box-user"  style="background: #F2F2F2; padding: 2.5em; text-align: center;">
                    <h1 style="color:#4F4F4F; font-size: 1.8em; font-weight: bold;"><span style="color: #219653;">Converse</span> com seu time de parceiros a qualquer hora</h1>
                    <img src="{{asset('img/afiliados.png')}}" alt="" style="margin: 0.9em;">
                </div>
            </div>
        @foreach($users as $user)
            <div class="col-md-3" style="margin-bottom: 1.5em; padding: 0 1.5em;">
                <div class="box-user"  style="background: #F2F2F2;">
                    
                    <div class="box-header" style="text-align: center; padding: 1em 2em;">
                        <img src="{{$user->path.$user->filename}}" alt="" style="max-width: 100px; border-radius: 100%; ">
                        <h2 style="font-weight: bold; color: #4F4F4F; font-size: 1.5em;">{{$user->name}}</h2>
                        <h3 style="font-weight: normal; color: #828282; font-size: 1em;">{{$user->tipo}}</h3>
                        <div class="rating" style="font-size: 1.5em; color: #2332A5;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="box-bottom" style="border-top: 1px solid #E0E0E0; text-align: center; display: block;">
                       <div class="col-md-12" style="padding: 1em; background-color: #219653;">
                            <a style=" color: #FFFFFF; text-decoration: none;" href="https://api.whatsapp.com/send?phone={{$user->telefone}}&text=Ol%C3%A1%2C%20quero%20me%20conectar%20com%20voc%C3%AA." target="_blank" style="">Enviar mensagem <i class="fa fa-whatsapp"></i></a>
                       </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
    
@endsection
