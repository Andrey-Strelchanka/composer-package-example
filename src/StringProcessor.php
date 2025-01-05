<?php

declare(strict_types=1);

namespace AndreyStrelchanka\ComposerPackageExample;

class StringProcessor
{
    public function getLength(string $string): int
    {
        return mb_strlen($string);
    }
}