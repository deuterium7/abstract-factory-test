<?php

namespace AlexanderZabornyi\AbstractFactoryTest\Factories;

use AlexanderZabornyi\AbstractFactoryTest\Text;
use AlexanderZabornyi\AbstractFactoryTest\XmlText;

class XmlFactory extends AbstractFactory
{
    /**
     * Create Xml-text
     *
     * @param string $content
     *
     * @return string
     */
    public function createText(string $content): Text
    {
        return new XmlText($content);
    }
}