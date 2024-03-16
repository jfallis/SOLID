<?php

declare(strict_types=1);

namespace Tests\LiskovSubstitutionPrinciple;

use PHPUnit\Framework\TestCase;
use SOLID\LiskovSubstitutionPrinciple\Owl;
use SOLID\LiskovSubstitutionPrinciple\Takahe;

/**
 * Class BirdTest.
 *
 * This class represents a test case for the Bird classes (Owl and Takahe).
 * It tests the Liskov Substitution Principle by creating an Owl and a Takahe object and
 * asserting that their text descriptions match the expected descriptions.
 *
 *  @internal
 */
final class BirdTest extends TestCase
{
    /**
     * Test the Liskov Substitution Principle with an Owl.
     *
     * This method tests the Liskov Substitution Principle by creating an Owl object and
     * asserting that its text description matches the expected description.
     */
    public function testLiskovSubstitutionPrincipleOwl(): void
    {
        $owl = new Owl();
        $actual = $owl->getText();

        $expected = 'The Owl is gold and grey in colour and can fly.';

        self::assertSame($expected, $actual);
    }

    /**
     * Test the Liskov Substitution Principle with a Takahe.
     *
     * This method tests the Liskov Substitution Principle by creating a Takahe object and
     * asserting that its text description matches the expected description.
     */
    public function testLiskovSubstitutionPrincipleTakahe(): void
    {
        $owl = new Takahe();
        $actual = $owl->getText();

        $expected = 'The Takahe is purple and blue in colour and cannot fly.';

        self::assertSame($expected, $actual);
    }
}
