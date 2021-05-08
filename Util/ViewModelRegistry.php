<?php declare(strict_types=1);

namespace Yireo\ExampleWidgetAdditions\Util;

use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ViewModelRegistry
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * ViewModelRegistry constructor.
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(
        ObjectManagerInterface $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param string $className
     * @return ArgumentInterface
     */
    public function get(string $className): ArgumentInterface
    {
        return $this->objectManager->get($className);
    }
}
