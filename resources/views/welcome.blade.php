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
       <form>
        <input type="file" name="nom" /><br/>
        <input type="mail" name="mailfrom"><br/>
        <input type="mail" name="mailsubmit"><br/>
        <textarea name="content"></textarea><br/>
        <button name="envoyer">Envoyer</button><br/>
       </form>
       <article>
          <span>À propos de NomTransfert</span> 
            <p>NomTransfert est le moyen le plus simple de transférer vos fichiers partout dans le monde. Chaque mois, notre service permet à des utilisateurs de 195 pays d'envoyer un milliard de fichiers. Fondé en 2009, NomTransfert a des équipes aux Pays-Bas et aux États-Unis.</p>
       </article>
    </body>
</html>
