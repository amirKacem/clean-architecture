<?php

namespace Infrastructure\Doctrine\Repository;

use Domain\Entity\Message;
use Domain\Gateway\MessageGateway;

class MessageRepository implements MessageGateway
{
    /**
     * @param Message $message
     *
     * @return void
     */
    public function add(Message $message): void
    {

    }

    /**
     * @return Message[]
     */
    public function findAll(): array
    {
        return array_fill(0, 10, new Message('Message'));
    }
}
