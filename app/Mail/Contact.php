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

    public function __construct(Array $contact)
    {
        $this->contact = $contact;
    }

     public function build()
    {
        return $this->from('aformacvichy@gmail.com')
            ->view('emails.contact');
    }
}