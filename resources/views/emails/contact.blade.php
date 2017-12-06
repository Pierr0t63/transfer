<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Nouveau ficher</h2>
    <p>Un de vos contact vous a envoyé un fichier via nos services</p>
    <ul>
      <p><strong>Email du contact</strong> : {{ $contact['mail_from'] }}</p>
      <p><strong>Lien du téléchargement: </strong><a href="http://www.nontransfer.fr/download/{{$dossier}}/{{$fichier}}">Cliquez ici</a></p>
      <p>Si le lien ne fonctionne pas, copiez ce lien dans votre barre de navigateur: http://www.nontransfer.fr/download/{{$dossier}}/{{$fichier}}</p>
    </ul>
  </body>
</html>