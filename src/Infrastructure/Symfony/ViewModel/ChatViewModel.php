<?php

namespace Infrastructure\Symfony\ViewModel;

class ChatViewModel
{
    
    /**
     * @var array
     */
    private array $messages = [];

    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }

    /**
     *
     * @return  array
     */ 
    public function getMessages()
    {
        return $this->messages;
    }
}
