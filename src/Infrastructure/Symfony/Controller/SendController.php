<?php

namespace Infrastructure\Symfony\Controller;

use Domain\Request\SendRequest;
use Domain\UseCase\Send;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class SendController
{

    /**
     * @param Send $send
     * @param Request $request
     * @param SerializerInterface $serialize
     * 
     * @return Response
     */
    #[Route('/send', name: 'send')]
    public function __invoke(Send $send,Request $request,SerializerInterface $serialize): Response
    {
        /** @var SendRequest */
        $request = $serialize->deserialize($request->getContent(),SendRequest::class,'json');

        $send->execute($request);

        return new Response(null,Response::HTTP_CREATED);
    }
}
