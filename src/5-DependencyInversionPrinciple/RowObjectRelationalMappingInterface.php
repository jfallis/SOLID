<?php

declare(strict_types=1);

namespace SOLID\DependencyInversionPrinciple;

/**
 * Interface RowObjectRelationalMappingInterface.
 *
 * This interface defines the method that should be implemented by any class that represents a
 * Row in an Object-Relational Mapping (ORM) context.
 * It follows the Dependency Inversion Principle, which states that high-level modules should
 * not depend on low-level modules. Both should depend on abstractions.
 * In this case, any class implementing this interface is expected to provide a method for retrieving
 * data from a specific column in the row.
 */
interface RowObjectRelationalMappingInterface
{
    /**
     * Get the data of a column in the row.
     *
     * This method should return the data of a specific column in the row.
     * The type of the returned data can be string, int, or float.
     * The specific rules for retrieving this data are up to the implementing class.
     *
     * @param string $columnName The name of the column for which to get the data
     *
     * @return string Returns the data of the specified column in the row
     */
    public function get(string $columnName): string;
}
