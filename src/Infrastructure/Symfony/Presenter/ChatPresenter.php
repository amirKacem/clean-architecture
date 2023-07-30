<?php

namespace Infrastructure\Symfony\Presenter;

use Domain\Entity\Message;
use Domain\Presenter\ChatPresenterInterface;
use Domain\Response\ChatResponse;
use Infrastructure\Symfony\ViewModel\ChatViewModel;

class ChatPresenter implements ChatPresenterInterface
{
    /**
     * @var ChatViewModel
     */
    private ChatViewModel $chatViewModel;

    public function present(ChatResponse $chatResponse): void
    {
        $this->chatViewModel = new ChatViewModel(
            array_map(fn (Message $message) => $message->getContent(), $chatResponse->getMessages())
        );

    }

    /**
     * Get the value of chatViewModel
     *
     * @return  ChatViewModel
     */
    public function getChatViewModel()
    {
        return $this->chatViewModel;
    }
}
