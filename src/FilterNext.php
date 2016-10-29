<?php

namespace FilterChain;

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

    protected function next($data)
    {
        if ($this->next) {
            $data = $this->next->process($data);
        }

        return $data;
    }
}
