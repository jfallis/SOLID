<?php

declare(strict_types=1);

namespace Tests\InterfaceSegregationPrinciple;

use PHPUnit\Framework\TestCase;
use SOLID\InterfaceSegregationPrinciple\Personnel;

/**
 * Class PersonnelTest.
 *
 * It tests the Interface Segregation Principle by creating a Personnel object
 * and asserting that its properties match the expected values.
 *
 * @internal
 */
final class PersonnelTest extends TestCase
{
    /**
     * Test the Interface Segregation Principle.
     *
     * This method tests the Interface Segregation Principle by creating a Personnel object and
     * asserting that its properties match the expected values.
     * It asserts that the level of the personnel is "junior", the personnel is active and does not have travel,
     * and has food expenses.
     */
    public function testInterfaceSegregationPrinciple(): void
    {
        $actual = new Personnel();
        self::assertSame('junior', $actual->level());
        self::assertTrue($actual->active());
        self::assertFalse($actual->travel());
        self::assertTrue($actual->food());
    }
}
