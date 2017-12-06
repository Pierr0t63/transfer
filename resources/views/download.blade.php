<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    @if(isset($_GET['dossier']) && isset($_GET['fichier']))
                    	<?php
                            $dossier = $_GET['dossier'];
                            $fichier = $_GET['fichier'];
                        ?>

                    	<a class="btn btn-success" href="http://www.nontransfer.fr/uploads/{{ $dossier }}/{{ $fichier }}" download="{{ $fichier }}">
                            Télécharger le fichier {{ $fichier }}
                        </a>
                    @else
                        <p class="btn btn-danger">Le fichier n'existe pas!</p>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
