<?php

namespace Domain\UseCase;

use Domain\Entity\Message;
use Domain\Gateway\MessageGateway;
use Domain\Request\SendRequest;

class Send
{   

    /**
     * @param MessageGateway
     */
    private MessageGateway $messageGateway;

    /**
     * @param MessageGateway $messageGateway
     */
    public function __construct(MessageGateway $messageGateway)
    {
        $this->messageGateway = $messageGateway;
    }

    public function execute(SendRequest $request): void
    {

        $this->messageGateway->add(new Message($request->getMessage()));
    }
}
