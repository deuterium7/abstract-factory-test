<?php

namespace AlexanderZabornyi\AbstractFactoryTest;

abstract class Text
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}