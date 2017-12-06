$(function() {
   $('#valider').click(function(event) {
       // stoppe envoi du formulaire
       event.preventDefault();

       // verifie les champs
        var mf = $('input[name="mail_from"]').val();
        var mt = $('input[name="mail_to"]').val();
        var f = $('input[name="image"]').val();
        if((mf!="")&&(mt!="")&&(f!="")){
           // affiche la barre
           $('#myprogressbar').removeClass('masque');
           //timer 1 sec
           var p=0;
           var inter = setInterval(function(){
                   p= p+1;
                // progression de la barre
                $('.progress-bar').first().width(p*($('#myprogressbar').width()/100));
                if(p==100){
                    clearInterval(inter);
                    // envoi du formulaire
                    $('form[name="upForm"]').submit();
                }
            },10);
       }else{
            // supprimer le message d'erreur
           $('#formulaire .alert').remove();
           // ajouter un message d'erreur
           $('#formulaire').prepend('<div class="alert alert-danger text-center">Vous devez remplir tous les champs</div>');
       }
   });

});