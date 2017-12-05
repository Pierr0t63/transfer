<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Nouveau ficher</h2>
    <p>Un de vos contact vous a envoyé un fichier via nos services</p>
    <ul>
      <li><strong>Email du contact</strong> : {{ $contact['mail_from'] }}</li>
      <li><strong>Lien du téléchargement</strong> : http://www.nontransfer.fr/telechargement?dossier=test&fichier=test</li>
    </ul>
  </body>
</html>