<?php

declare(strict_types=1);

namespace SOLID\LiskovSubstitutionPrinciple;

class Describe
{
    public static function bird(Bird $bird): string
    {
        return $bird->getText();
    }
}
