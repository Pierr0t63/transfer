<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body style="box-sizing: border-box; background-color: #CACACA; font-family: Helvetica Neue, Helvetica, Verdana, Arial, sans-serif;  font-size: 20px;">
    <style>
      table{
        border-collapse: collapse; 
      }
      td{
        padding: 0 10px;
      }
    </style>

    <table style="width: 100%; text-align:center;">
      <tr>
        <td>
          <table id="capsule" style="width: 650px; background-color: #000; color: #fff; display: inline-block; border-radius: 20px; border: 2px solid black; text-align: center; vertical-align: middle;">
            <tr>
              <th style="background-color: #ffffff; border-radius: 20px 20px 0 0; height: 100px;"></th>
            </tr>
            <tr>
              <td style="padding: 20px 90px; font-size: 26px; border-top: 60px solid #1473E6;">
                Vous avez reçu une Capsule Hoi-Poi !
              </td>
            </tr>
            <tr>
              <td style="padding: 20px 90px;">
                Quelqu'un vous a envoyé une Capsule Hoi-Poi ! Vous pouvez dès à présent ouvrir cette capsule et télécharger
                le fichier qu'elle renferme via le lien renseigné plus bas. Prenez votre temps mais attention, la capsule ne sera utilisable que pendant <span style="font-weight: bold;">72 heures</span>, passé ce délai elle finira dans le ventre d'un
                Saïbaman !
              </td>
            </tr>
            <tr>
              <td style="padding: 15px 0 10px 0">
                <p>
                  <span style="font-weight: bold;">Email expéditeur</span> : {{ $contact['mail_from'] }}
                </p>
                <p>
                  <span style="font-weight: bold;">
                    <a style="color:#fff; text-decoration: none; padding: 10px 20px; background-color: #1473E6; border-radius: 10px; color: #fff;" href="http://www.nontransfer.fr/download/{{$dossier}}/{{$fichier}}">Ouvrir ma capsule !
                    </a>
                  </span>
                </p>
              </td>
            </tr>
            <tr>
              <td style="color: #fff; padding: 0 0 20px 0; font-size: 12px;">
                Si le lien ne fonctionne pas, copiez ce lien dans la barre de votre navigateur:<br> http://www.nontransfer.fr/download/{{$dossier}}/{{$fichier}}
              </td>
            </tr>
            <tr>
              <td style="padding: 20px 90px; border-bottom: 60px solid #1473E6;">
                Nous vous remercions d'avoir utilisé <a href="http://www.nontransfer.fr/" style="color:#fff; text-decoration: none;">NonTransfer</a>, nous espérons que tout s'est bien passé pour vous !
              </td>
            </tr>
            <tr>
              <td style="background-color: #ffffff; border-radius: 0 0 20px 20px; height: 100px;">
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>