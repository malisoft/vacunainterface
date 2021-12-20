<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="app" id="app">
	  <div class="aContainer">
            <div class="aLogo">
                <img src="https://carnetvacunacion.minsa.gob.pe/static/img/logo-carnet-opt.png" class="aLogoImg" alt="Logo Carnet de Vacunación - MINSA">                
            </div> 
            <div class="text-center" style="padding:2rem 0.5rem">      
                <div><img src="https://carnetvacunacion.minsa.gob.pe/static/img/icon/comprobado.png"></div>
                <div style="font-size:1.2rem; padding:0.5rem; background: rgba(255,255,255, 0.7); line-height: 2rem; color: #1f484a;">
                    <div>ENCISO PEREZ FRANCOIS KIONER</div>
                    <div> <b>DNI</b> 41XXXX04</div>
                    <div style="color:#3e8d5e"><b>DOSIS COMPLETA</b></div>
                </div>
            </div>
            <hr class="aLine1">
            <div class="text-center" style="color:#6c6c6c">
                Copyright © 2021. Desarrollado por la Oficina General de Tecnologías de la Información del Ministerio de Salud | Todos los derechos reservados.                
            </div>            
	  </div>
        </div>
    </body>
</html>
