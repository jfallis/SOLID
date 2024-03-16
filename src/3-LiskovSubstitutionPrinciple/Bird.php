<?php

declare(strict_types=1);

namespace SOLID\LiskovSubstitutionPrinciple;

/**
 * Class Bird.
 *
 * This class represents a Bird in the system.
 * It provides methods to set and get the bird's ability to fly, colour, and name.
 * It also provides a method to get a text description of the bird. It follows the Liskov Substitution Principle,
 * which states that objects in a program should be replaceable with instances of their subtypes without
 * altering the correctness of that program.
 */
class Bird
{
    /**
     * @var bool Indicates whether the bird can fly
     */
    protected bool $canFly;

    /**
     * @var string The colour of the bird
     */
    protected string $colour;

    /**
     * @var string The name of the bird
     */
    protected string $name;

    /**
     * Set the bird's ability to fly.
     *
     * This method sets the bird's ability to fly.
     *
     * @param bool $canFly Whether the bird can fly
     */
    public function setCanFly(bool $canFly): void
    {
        $this->canFly = $canFly;
    }

    /**
     * Get the bird's ability to fly.
     *
     * This method returns whether the bird can fly.
     *
     * @return bool Whether the bird can fly
     */
    public function getCanFly(): bool
    {
        return $this->canFly;
    }

    /**
     * Set the colour of the bird.
     *
     * This method sets the colour of the bird.
     *
     * @param string $colour The colour of the bird
     */
    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }

    /**
     * Get the colour of the bird.
     *
     * This method returns the colour of the bird.
     *
     * @return string The colour of the bird
     */
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * Set the name of the bird.
     *
     * This method sets the name of the bird.
     *
     * @param string $name The name of the bird
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the name of the bird.
     *
     * This method returns the name of the bird.
     *
     * @return string The name of the bird
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get a text description of the bird.
     *
     * This method returns a text description of the bird, including its name, colour, and whether it can fly.
     *
     * @return string A text description of the bird
     */
    public function getText(): string
    {
        return sprintf(
            'The %s is %s in colour and %s.',
            $this->getName(),
            $this->getColour(),
            $this->getCanFly() ? 'can fly' : 'cannot fly'
        );
    }
}
