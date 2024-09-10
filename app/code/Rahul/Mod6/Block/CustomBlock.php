<?php
namespace Rahul\Mod6\Block;

use Magento\Framework\View\Element\Template;

class CustomBlock extends Template
{
    protected function _toHtml()
    {
        return "<p>Custom Block Content - Before Description</p>" . parent::_toHtml();
    }

    protected function _afterToHtml($html)
    {
        return $html . "<p>Custom Block Content - After Description</p>";
    }
}
