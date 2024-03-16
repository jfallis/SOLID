<?php

declare(strict_types=1);

namespace SOLID\InterfaceSegregationPrinciple;

/**
 * Interface WorkerInterface.
 *
 * This interface defines the methods that should be implemented by any class that represents a Worker.
 * It follows the Interface Segregation Principle, which states that clients
 * should not be forced to depend on interfaces they do not use.
 * In this case, any class implementing this interface is expected to provide methods
 * for determining the level and active status of a worker.
 */
interface WorkerInterface
{
    /**
     * Returns the level of the worker.
     *
     * This method should return a string representing the level of the worker.
     * The specific meaning of the level is up to the implementing class.
     *
     * @return string Returns the level of the worker
     */
    public function level(): string;

    /**
     * Determines if the worker is active.
     *
     * This method should return true if the worker is active, false otherwise.
     * The specific rules for determining this are up to the implementing class.
     *
     * @return bool Returns true if the worker is active, false otherwise
     */
    public function active(): bool;
}
