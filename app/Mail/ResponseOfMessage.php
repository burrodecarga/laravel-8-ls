<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResponseOfMessage extends Mailable
{
    use Queueable, SerializesModels;

    protected $motivo,$para;
    protected $message_id;
    protected $cuerpo;
    protected $email = "edwinhenriquezh@gmail.com";


    public function __construct($subject,$message_id, $body, $para)
    {
        $this->motivo = $subject;
        $this->message_id = $message_id;
        $this->cuerpo = $body;
        $this->para = $para;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        return $this->from($this->email)->subject($this->motivo)->view('emails.response-of-message')->with([
            'username'=>$this->para,
            'usermessage'=>$this->cuerpo
        ]);
    }
}
