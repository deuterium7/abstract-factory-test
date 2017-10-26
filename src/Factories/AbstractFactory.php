<?php

namespace AlexanderZabornyi\AbstractFactoryTest\Factories;

use AlexanderZabornyi\AbstractFactoryTest\Text;

abstract class AbstractFactory
{
    /**
     * Create format text
     *
     * @param string $content
     *
     * @return string
     */
    abstract public function createText(string $content): Text;
}