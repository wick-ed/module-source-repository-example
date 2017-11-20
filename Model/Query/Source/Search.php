<?php

namespace Magento\SourceRepository\Model\Query\Source;

use Magento\CommonMessageBus\Model\Query;

class Search
{
    /**
     * @var Query
     */
    private $query;

    /**
     * @return Query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param Query $query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }
}
