<?php

namespace Modules\Forum;

class Message
{
    protected string $user_message;
    


    /**
     * Get the value of user_message
     */
    public function getUserMessage(): string
    {
        return $this->user_message;
    }

    /**
     * Set the value of user_message
     */
    public function setUserMessage(string $user_message): self
    {
        $this->user_message = $user_message;

        return $this;
    }
}