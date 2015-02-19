<?php

namespace Phive\FilterChain;

trait FilterNext
{
    /**
     * @var Filter
     */
    private $next;

    public function setNext(Filter $next)
    {
        $this->next = $next;
    }

    protected function next($message)
    {
        if ($this->next) {
            $message = $this->next->process($message);
        }

        return $message;
    }
}
