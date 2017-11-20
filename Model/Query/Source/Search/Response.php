<?php

namespace Magento\SourceRepository\Model\Query\Source\Search;

use Magento\InventoryMessageBus\Model\Source;

class Response
{
    /**
     * @var Source[]
     */
    private $items;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $total;

    /**
     * @return \Magento\InventoryMessageBus\Model\Source[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param \Magento\InventoryMessageBus\Model\Source[] $items
     * 
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
}
