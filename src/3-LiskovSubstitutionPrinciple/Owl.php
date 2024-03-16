<?php

declare(strict_types=1);

namespace SOLID\LiskovSubstitutionPrinciple;

/**
 * Class Owl.
 *
 * This class represents an Owl in the system.
 * It extends the Bird class and sets the Owl's ability to fly, colour, and name in its constructor.
 * It follows the Liskov Substitution Principle, which states that objects in a program should be replaceable with
 * instances of their subtypes without altering the correctness of that program.
 */
class Owl extends Bird
{
    /**
     * Owl constructor.
     *
     * This constructor sets the Owl's ability to fly, colour, and name.
     * Specifically, it sets the ability to fly to true, the colour to 'gold and grey', and the name to 'Owl'.
     */
    public function __construct()
    {
        $this->setCanFly(true);
        $this->setColour('gold and grey');
        $this->setName('Owl');
    }
}
