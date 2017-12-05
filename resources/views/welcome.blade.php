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
</head>
    <body>
    	<div class="container">
    		<div class="row">
	    		<div class="col-md-12">
	    			<h1 class="text-center">Bienvenue sur NonTransfer !</h1>
	    		</div>
	    	</div>
			<div class="row">
				<div class="col-md-6" id="formulaire">
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

				--><div class="col-md-6">
					<p>

					</p>
				</div>
			</div>
     	</div>
    </body>
</html>
