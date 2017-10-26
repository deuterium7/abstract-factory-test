<?php

namespace AlexanderZabornyi\AbstractFactoryTest\Tests;

use AlexanderZabornyi\AbstractFactoryTest\Factories\JsonFactory;
use AlexanderZabornyi\AbstractFactoryTest\Factories\XmlFactory;
use AlexanderZabornyi\AbstractFactoryTest\JsonText;
use AlexanderZabornyi\AbstractFactoryTest\XmlText;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateJsonTextFormat()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('test');

        $this->assertInstanceOf(JsonText::class, $text);
    }

    public function testCanCreateXmlTextFormat()
    {
        $factory = new XmlFactory();
        $text = $factory->createText('test');

        $this->assertInstanceOf(XmlText::class, $text);
    }
}