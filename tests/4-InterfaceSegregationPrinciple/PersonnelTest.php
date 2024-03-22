<?php

declare(strict_types=1);

namespace Tests\InterfaceSegregationPrinciple;

use PHPUnit\Framework\TestCase;
use SOLID\InterfaceSegregationPrinciple\ExpenseInterface;
use SOLID\InterfaceSegregationPrinciple\Junior;
use SOLID\InterfaceSegregationPrinciple\Manager;
use SOLID\InterfaceSegregationPrinciple\WorkerInterface;

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
     * This method tests the Interface Segregation Principle by creating a Junior object and
     * asserting that its properties match the expected values.
     * It asserts that the level of the personnel is "junior", the personnel is active and does not have travel,
     * and has food expenses.
     */
    public function testJuniorInterfaceSegregationPrinciple(): void
    {
        $actual = new Junior();
        self::assertSame('junior', $actual->level());
        self::assertTrue($actual->active());
        self::assertInstanceOf(WorkerInterface::class, $actual);
        self::assertNotInstanceOf(ExpenseInterface::class, $actual);
    }

    /**
     * Test the Interface Segregation Principle.
     *
     * This method tests the Interface Segregation Principle by creating a Junior object and
     * asserting that its properties match the expected values.
     * It asserts that the level of the personnel is "junior", the personnel is active and does not have travel,
     * and has food expenses.
     */
    public function testManagerInterfaceSegregationPrinciple(): void
    {
        $actual = new Manager();
        self::assertSame('manager', $actual->level());
        self::assertTrue($actual->active());
        self::assertFalse($actual->travel());
        self::assertTrue($actual->food());
        self::assertInstanceOf(WorkerInterface::class, $actual);
        self::assertInstanceOf(ExpenseInterface::class, $actual);
    }
}
