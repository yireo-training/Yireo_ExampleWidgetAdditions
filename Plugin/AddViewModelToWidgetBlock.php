<?php declare(strict_types=1);

namespace Yireo\ExampleWidgetAdditions\Plugin;

use Yireo\ExampleWidgetAdditions\Util\ViewModelRegistry;

class AddViewModelToWidgetBlock
{
    /**
     * @var ViewModelRegistry
     */
    private $viewModelRegistry;

    /**
     * AddViewModelToWidgetBlock constructor.
     * @param object $viewModel
     */
    public function __construct(ViewModelRegistry $viewModelRegistry)
    {
        $this->viewModelRegistry = $viewModelRegistry;
    }

    /**
     * @param \Magento\Cms\Block\Widget\Block $widgetBlock
     */
    public function beforeToHtml(\Magento\Cms\Block\Widget\Block $widgetBlock)
    {
        $widgetBlock->assign('viewModelRegistry', $this->viewModelRegistry);
    }
}
