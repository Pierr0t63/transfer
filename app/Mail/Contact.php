<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $dossier;
    public $fichier;

    public function __construct($contact, $dossier, $fichier)
    {
        $this->contact = $contact;
        $this->dossier = $dossier;
        $this->fichier = $fichier;
    }

     public function build()
    {
        return $this->from('aformacvichy@gmail.com')
            ->view('emails.contact');
    }
}