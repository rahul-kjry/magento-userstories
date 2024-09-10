<?php
namespace Rahul\MessageBlock\Block;

use Magento\Framework\View\Element\Template;

class Message extends Template
{
    public function _toHtml()
    {
        return "<p>This is a message block!</p>";
    }

    public function _afterToHtml($html)
    {
        return $html . "<p>This is additional content from _afterToHtml()</p>";
    }
}
