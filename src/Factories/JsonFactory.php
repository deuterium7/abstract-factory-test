<?php

namespace AlexanderZabornyi\AbstractFactoryTest\Factories;

use AlexanderZabornyi\AbstractFactoryTest\JsonText;
use AlexanderZabornyi\AbstractFactoryTest\Text;

class JsonFactory extends AbstractFactory
{
    /**
     * Create Json-text
     *
     * @param string $content
     *
     * @return string
     */
    public function createText(string $content): Text
    {
        return new JsonText($content);
    }
}