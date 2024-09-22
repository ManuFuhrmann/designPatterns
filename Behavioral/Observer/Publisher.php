<?php

namespace ManuFuhrmann\Behavioral\Observer;

class Publisher
{
    private array $subscribers;

    public function addClient(Subscriber $subscriber): void
    {
        $this->subscribers[] = $subscriber;
    }

    public function notify(string $message): void
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($message);
        }
    }
}