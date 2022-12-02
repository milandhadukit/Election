<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class registermail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('mail.register_mail');

        $name=$this->user['name'];
        $username=$this->user['username'];
        $password=$this->user['password'];
        $genrate_ids=$this->user['genrate_ids'];
        $useremail=$this->user['emailsend'];
        return $this->subject('Mail from election@gmail.com')
        ->view('mail.register_mail',compact('username','name','password','genrate_ids','useremail'));
    }
}
