<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NonTransfer</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

    <script src=" {{ asset('js/app.js') }}"></script>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if(isset($folder) && isset($filename))
                    	<a class="btn btn-success" href="{{ route('downloadInit',['folder'=>$folder,'filename'=>$filename]) }}">
                            Télécharger le fichier {{ $filename }}
                        </a>
                    @else
                        <h2> Le fichier demandé est introuvable. </h2>
                        <a href="http://www.nontransfer.fr/" class="btn btn-danger">Retourner à l'accueil<a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
