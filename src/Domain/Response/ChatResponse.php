<?php

namespace Domain\Response;

class ChatResponse
{
    
    /**
     * @var Message[]
     */
    private array $messages = [];

    /**
     * @param array $messages
     */
    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }

    

    /**
     * Get the value of messages
     *
     * @return  Message[]
     */ 
    public function getMessages(): array
    {
        return $this->messages;
    }
}
