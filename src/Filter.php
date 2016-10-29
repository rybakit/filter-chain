<?php

namespace FilterChain;

interface Filter
{
    /**
     * @param Filter $next
     */
    public function setNext(Filter $next);

    /**
     * @param mixed $data
     *
     * @return mixed
     */
    public function process($data);
}
