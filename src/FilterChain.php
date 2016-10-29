<?php

namespace FilterChain;

class FilterChain implements Filter
{
    use FilterNext;

    /**
     * @var Filter[]
     */
    private $filters = [];

    public function __construct(array $filters = null)
    {
        foreach ((array) $filters as $filter) {
            $this->add($filter);
        }
    }

    public function add(Filter $filter)
    {
        if ($current = end($this->filters)) {
            $current->setNext($filter);
        }

        $this->filters[] = $filter;
    }

    public function process($data)
    {
        if (isset($this->filters[0])) {
            return $this->filters[0]->process($data);
        }

        throw new \LogicException('No filters were added.');
    }
}
