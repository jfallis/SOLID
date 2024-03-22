<?php

declare(strict_types=1);

namespace SOLID\InterfaceSegregationPrinciple;

/**
 * Class Manager.
 *
 * This class represents a Manager in the system. It implements the WorkerInterface and ExpenseInterface.
 * It provides methods to get the level and active status of the personnel,
 * and to determine whether the personnel is allowed to travel and claim food expenses.
 * It follows the Interface Segregation Principle,
 * which states that clients should not be forced to depend on interfaces they do not use.
 */
class Manager implements WorkerInterface, ExpenseInterface
{
    /**
     * Get the level of the personnel.
     *
     * This method returns the level of the personnel. In this implementation, the level is always 'manager'.
     *
     * @return string The level of the personnel
     */
    public function level(): string
    {
        return 'manager';
    }

    /**
     * Get the active status of the personnel.
     *
     * This method returns whether the personnel is active. In this implementation, the personnel is always active.
     *
     * @return bool Whether the personnel is active
     */
    public function active(): bool
    {
        return true;
    }

    /**
     * Determine whether the personnel is allowed to travel.
     *
     * This method returns whether the personnel is allowed to travel.
     * In this implementation, the personnel is not allowed to travel.
     *
     * @return bool Whether the personnel is allowed to travel
     */
    public function travel(): bool
    {
        return false;
    }

    /**
     * Determine whether the personnel is allowed to claim food expenses.
     *
     * This method returns whether the personnel is allowed to claim food expenses.
     * In this implementation, the personnel is allowed to claim food expenses.
     *
     * @return bool Whether the personnel is allowed to claim food expenses
     */
    public function food(): bool
    {
        return true;
    }
}
