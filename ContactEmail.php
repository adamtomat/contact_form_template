<?php

namespace App;

require_once 'Email.php';

class ContactEmail extends Email
{
    protected $to = 'adam.tomat+to@rareloop.com';
    protected $subject = 'Website Message';
    protected $message = 'Some default message';

    public function __construct($fromEmail, $message, $name = null, array $headers = [])
    {
        // If there's a name, add it to the subject
        if ($name) {
            $subject = $this->subject.' from '.$name;
        }

        parent::__construct($this->to, $fromEmail, $message, $subject);
    }

    public function send()
    {
        return mail($this->to, $this->subject, $this->message, implode(': ', $this->headers));
    }
}
