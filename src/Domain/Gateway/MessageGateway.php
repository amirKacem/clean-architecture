<?php

namespace Domain\Gateway;

use Domain\Entity\Message;

interface MessageGateway
{
    /**
     * @param Message $message
     *
     * @return void
     */
    public function add(Message $message): void;

    /**
     * @return Message[]
     */
    public function findAll(): array;
}
