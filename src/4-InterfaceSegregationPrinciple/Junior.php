<?php

declare(strict_types=1);

namespace SOLID\InterfaceSegregationPrinciple;

/**
 * Class Junior.
 *
 * This class represents a Junior in the system. It implements the WorkerInterface.
 * It provides methods to get the level and active status of the personnel.
 * It follows the Interface Segregation Principle,
 * which states that clients should not be forced to depend on interfaces they do not use.
 */
class Junior implements WorkerInterface
{
    /**
     * Get the level of the personnel.
     *
     * This method returns the level of the personnel. In this implementation, the level is always 'junior'.
     *
     * @return string The level of the personnel
     */
    public function level(): string
    {
        return 'junior';
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
}
