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
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <script src=" {{ asset('js/app.js') }}"></script>
</head>
    <body>
    	<div class="container">
    		<div class="row">
	    		<div class="col-md-12">
	    			<h1 class="text-center titre-formulaire">Bienvenue sur NonTransfer !</h1>
	    		</div>
	    	</div>
			<div class="row">
				<div class="col-md-6" id="formulaire">
					@if ($errors->any())
					    <div class="alert alert-danger text-center">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@elseif(session()->has('message'))
						<div class="alert alert-success text-center">
					        <ul>
					            <li>{{ session()->get('message') }}</li>
					        </ul>
					    </div>
					@endif

					{{ Form::open(array('url' => '/','files'=>'true')) }}
					<p>
						{{ 'Fichier à uploader :' }}
						{{ Form::file('image') }}
					</p>
					<p>
						<input type="mail" name="mail_from" placeholder="Votre Email">
					</p>
					<p>
						<input type="mail" name="mail_to" placeholder="Email du destinataire">
					</p>
					<p>
						{{ Form::submit('Uploader !',['class' => 'text-center btn']) }}
					</p>
					{{ Form::close() }}
				</div><!--

				--><div class="col-md-6" id="presentation">
					<p>
						NonTransfer est une plateforme d'hébergement éphémère de fichier rapide et simple à utiliser !<br>
						Riche de près de 2 milliards d'utilisateurs, nous avons hébergé plusieurs dizaines de milliards de
						fichiers à travers d'innonmbrables univers de la Terre jusqu'à Namek !
					</p>
					<p>
						Pour partager votre fichier, saisissez simplement votre adresse de messagerie électronique ainsi 
						que celle de la personne à qui vous souhaitez envoyer votre fichier et c'est tout !<br>
						Vous obtiendrez un lien de téléchargement qui sera également envoyé aux deux adresses de messagerie
						électronique que vous avez renseignées.
					</p>
				</div>
			</div>
     	</div>
    </body>
</html>
