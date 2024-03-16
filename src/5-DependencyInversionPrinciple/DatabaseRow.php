<?php

declare(strict_types=1);

namespace SOLID\DependencyInversionPrinciple;

/**
 * Class DatabaseRow.
 *
 * This class represents a DatabaseRow in the system. It implements the RowObjectRelationalMappingInterface.
 * It provides a method to get the data of a column in the database row.
 * It follows the Dependency Inversion Principle, which states that high-level
 * modules should not depend on low-level modules. Both should depend on abstractions.
 */
class DatabaseRow implements RowObjectRelationalMappingInterface
{
    /**
     * Get the data of a column in the database row.
     *
     * This method returns the data of a column in the database row.
     * In this implementation, it returns a string that includes the column name.
     *
     * @param string $columnName The name of the column for which to get the data
     *
     * @return string The data of the column in the database row
     */
    public function get(string $columnName): string
    {
        return sprintf('%s data', $columnName);
    }
}
