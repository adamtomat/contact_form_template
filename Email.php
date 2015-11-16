<?php

namespace App;

class Email
{
    protected $from;
    protected $to;
    protected $subject;
    protected $message;

    public function __construct($toEmail, $fromEmail, $message, $subject, array $headers = [])
    {
        $this->message = $message;

        $this->to = $toEmail;

        $this->from = $fromEmail;

        $this->subject = $subject;

        // Set some default headers, but allow extra ones to be passed in
        $this->headers = array_merge([
            'From' => $fromEmail
        ], $headers);
    }

    public function send()
    {
        return mail($this->to, $this->subject, $this->message, implode(': ', $this->headers));
    }
}
