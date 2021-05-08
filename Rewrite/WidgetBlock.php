<?php declare(strict_types=1);

namespace Yireo\ExampleWidgetAdditions\Rewrite;

use Yireo\Example\ViewModel\CurrentProduct;

/**
 * Class WidgetBlock
 * @package Yireo\ExampleWidgetAdditions\Rewrite
 * @deprecated Use DI plugin instead
 */
class WidgetBlock extends \Magento\Cms\Block\Widget\Block
{
    /**
     * @var CurrentProduct
     */
    private $currentProduct;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        \Magento\Cms\Model\BlockFactory $blockFactory,
        CurrentProduct $currentProduct,
        array $data = []
    ) {
        parent::__construct($context, $filterProvider, $blockFactory, $data);
        $this->currentProduct = $currentProduct;
    }

    public function getCurrentProduct(): CurrentProduct
    {
        return $this->currentProduct;
    }
}
