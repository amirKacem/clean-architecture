<?php

namespace Domain\Request;

class SendRequest
{

    /**
     * @var string
     */
    private string $message;

    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    

    /**
     * Get the value of messages
     *
     * @return  string
     */ 
    public function getMessage(): string
    {
        return $this->message;
    }
}
