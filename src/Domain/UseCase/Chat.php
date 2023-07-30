<?php

namespace Domain\UseCase;

use Domain\Gateway\MessageGateway;
use Domain\Presenter\ChatPresenterInterface;
use Domain\Request\ChatRequest;
use Domain\Response\ChatResponse;

class Chat
{
    /**
     * @var MessageGateway
     */
    private MessageGateway $messageGateway;

    public function __construct(MessageGateway $messageGateway)
    {
        $this->messageGateway = $messageGateway;
    }
 
    /**
     * @param ChatRequest $chatRequest
     * 
     * @return ChatResponse
     */
    public function execute(ChatPresenterInterface $chatPresenter)   
    {   
        $response = new ChatResponse($this->messageGateway->findAll());
        $chatPresenter->present($response);
    }
}
