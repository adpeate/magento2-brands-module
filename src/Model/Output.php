<?php
declare(strict_types=1);
/**
 * Mage360_Brands extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 */
namespace Mage360\Brands\Model;

class Output
{
    /**
     * @var \Magento\Framework\Filter\Template
     */
    public $templateProcessor;

    /**
     * @param \Magento\Framework\Filter\Template $templateProcessor
     */
    public function __construct(
        \Magento\Framework\Filter\Template $templateProcessor
    ) {
        /** @var \Magento\Framework\Filter\Template */
        $this->templateProcessor = $templateProcessor;
    }

    /**
     * @param $string
     * @return string
     */
    public function filterOutput($string)
    {
        return $this->templateProcessor->filter($string);
    }
}
