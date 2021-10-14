<!--
<h1 style="color: #5e9ca0;">Registro <span style="color: #2b2301;">ControlaTuEquipo</span> Exitoso!</h1>
<h2 style="color: #2e6c80;">Descarga la App:</h2>
<p>Completa tu registro e invita a tus amigos a participar en el concurso.</p>
<p>Clic aqui para ver los detalles del concurso <span style="background-color: #2b2301; color: #fff; display: inline-block; padding: 3px 10px; font-weight: bold; border-radius: 5px;">Ver</span></p>
<h2 style="color: #2e6c80;">Enlaces para descargar:</h2>
<ol style="list-style: none; font-size: 14px; line-height: 32px; font-weight: bold;">
<li style="clear: both;"><img style="float: left;" src="https://html-online.com/img/01-interactive-connection.png" alt="interactive connection" width="45" /> Play Store</li>
<li style="clear: both;"><img style="float: left;" src="https://html-online.com/img/02-html-clean.png" alt="html cleaner" width="45" /> Link Directo:</li> -->



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Descargar App</div>
<h2>Registro exitoso</h2>
                <div href="http://controlatuequipo.com/apkactual" class="card-body">
                        <div class="alert alert-success" role="alert">
                          <a class="nav-link" href="http://play.google.com">{{ __('De PlayStore') }}</a>
                        </div>

                        <div class="alert alert-success" role="alert">
                          <a class="nav-link" href="http://controlatuequipo.com/apkactual">{{ __('Apk') }}</a>
                        </div>
                        <h4>Para continuar</h4>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
