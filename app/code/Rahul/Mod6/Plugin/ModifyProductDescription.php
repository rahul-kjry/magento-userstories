<?php
namespace Rahul\Mod6\Plugin;

class ModifyProductDescription
{
    public function afterToHtml(\Magento\Catalog\Block\Product\View\Description $subject, $result)
    {
        return '<p>Sample Description</p>';
    }
}
