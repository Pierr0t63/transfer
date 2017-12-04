<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
         {{ Form::open(array('url' => '/','files'=>'true')) }}
         {{ 'Fichier à uploader :' }}
         {{ Form::file('image') }}<br/>
         <input type="mail" name="mail_from" placeholder="Votre Email"><br/>
         <input type="mail" name="mail_to" placeholder="Email du destinataire"><br/>
         {{ Form::submit('Uploader !') }}
         {{ Form::close() }}
    </body>
    etstt
</html>
