<?php

namespace Domain\Presenter;

use Domain\Response\ChatResponse;

interface ChatPresenterInterface
{

    /**
     * @param ChatResponse $chatResponse
     * 
     * @return mixed
     */
    public function present(ChatResponse $chatResponse);
}
