<?php

declare(strict_types=1);

namespace SOLID\LiskovSubstitutionPrinciple;

/**
 * Class Takahe.
 *
 * This class represents a Takahe in the system.
 * It extends the Bird class and sets the Takahe's ability to fly, colour, and name in its constructor.
 * It follows the Liskov Substitution Principle, which states that objects in a program should be replaceable with
 * instances of their subtypes without altering the correctness of that program.
 */
class Takahe extends Bird
{
    /**
     * Takahe constructor.
     *
     * This constructor sets the Takahe's ability to fly, colour, and name.
     * Specifically, it sets the ability to fly to false, the colour to 'purple and blue', and the name to 'Takahe'.
     */
    public function __construct()
    {
        $this->setCanFly(false);
        $this->setColour('purple and blue');
        $this->setName('Takahe');
    }
}
