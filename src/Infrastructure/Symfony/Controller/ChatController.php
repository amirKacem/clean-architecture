<?php

namespace Infrastructure\Symfony\Controller;

use Domain\Presenter\ChatPresenterInterface;
use Domain\UseCase\Chat;
use Infrastructure\Symfony\Presenter\ChatPresenter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ChatController
{
    /**
     * @param Chat $chat
     * @param ChatPresenterInterface $chatPresenter
     *
     * @return JsonResponse
     */
    #[Route('/', name: 'chat')]
    public function __invoke(Chat $chat, SerializerInterface $serializer): JsonResponse
    {
        $presenter = new ChatPresenter();

        $chat->execute($presenter);


        return new JsonResponse($serializer->serialize($presenter->getChatViewModel(), 'json'), 200, [], true);
    }
}
