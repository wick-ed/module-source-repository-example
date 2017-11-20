<?php

namespace Magento\SourceRepository\Console\Command;

use Magento\CommonMessageBus\Api\DriverInterface;
use Magento\CommonMessageBus\Model\Query;
use Magento\SourceRepository\Model\Query\Source\Search;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SearchSource extends Command
{
    /**
     * @var DriverInterface
     */
    private $driver;

    /**
     * @param DriverInterface $driver
     */
    public function __construct(DriverInterface $driver)
    {
        parent::__construct();
        $this->driver = $driver;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('mcom:source:search')
            ->setDescription('Search sources.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = $this->driver->publish('magento.inventory.source_repository.search', new Search(new Query()), 'oms');
        print_r($result);
    }
}
