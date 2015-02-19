<?php

namespace Phive\FilterChain;

interface Filter
{
    /**
     * @param Filter $next
     */
    public function setNext(Filter $next);

    /**
     * @param mixed $message
     *
     * @return mixed
     */
    public function process($message);
}
