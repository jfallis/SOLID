<?php

declare(strict_types=1);

namespace SOLID\InterfaceSegregationPrinciple;

/**
 * Interface ExpenseInterface.
 *
 * This interface defines the methods that should be implemented by any class that represents an Expense.
 * It follows the Interface Segregation Principle, which states that clients
 * should not be forced to depend on interfaces they do not use.
 * In this case, any class implementing this interface is expected to provide methods
 * for determining whether a personnel is allowed to travel and claim food expenses.
 */
interface ExpenseInterface
{
    /**
     * Determines if the personnel is allowed to travel.
     *
     * This method should return true if the personnel is allowed to travel, false otherwise.
     * The specific rules for determining this are up to the implementing class.
     *
     * @return bool Returns true if the personnel is allowed to travel, false otherwise
     */
    public function travel(): bool;

    /**
     * Determines if the personnel is allowed to claim food expenses.
     *
     * This method should return true if the personnel is allowed to claim food expenses, false otherwise.
     * The specific rules for determining this are up to the implementing class.
     *
     * @return bool Returns true if the personnel is allowed to claim food expenses, false otherwise
     */
    public function food(): bool;
}
