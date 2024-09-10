<?php
namespace Rahul\Mod5\Plugin;

class ModifyProductView
{
    public function afterToHtml(\Magento\Catalog\Block\Product\View $subject, $result)
    {
        return $result . "<p>Custom content added by Rahul_Mod5 plugin.</p>";
    }
}
