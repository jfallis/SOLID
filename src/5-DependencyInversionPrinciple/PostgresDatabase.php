<?php

declare(strict_types=1);

namespace SOLID\DependencyInversionPrinciple;

/**
 * Class PostgresDatabase.
 *
 * This class represents a PostgresDatabase in the system. It implements the DataObjectRelationalMappingInterface.
 * It provides methods to get a repository and find a database row by its ID.
 * It follows the Dependency Inversion Principle, which states that high-level modules
 * should not depend on low-level modules. Both should depend on abstractions.
 */
class PostgresDatabase implements DataObjectRelationalMappingInterface
{
    /**
     * @var RowObjectRelationalMappingInterface A mock database row
     */
    private RowObjectRelationalMappingInterface $databaseRow;

    /**
     * Database constructor.
     *
     * This method constructs a new Database object.
     * It takes a RowObjectRelationalMappingInterface object as a parameter,
     * which represents a mock database row.
     *
     * @param RowObjectRelationalMappingInterface $databaseRow A mock database row
     */
    public function __construct(RowObjectRelationalMappingInterface $databaseRow)
    {
        $this->databaseRow = $databaseRow;
    }

    /**
     * Get a repository.
     *
     * This method returns a repository for a given class name. In this implementation,
     * it returns the current Database instance.
     *
     * @param string $className The name of the class for which to get the repository
     *
     * @return self The current Database instance
     */
    public function getRepository(string $className): self
    {
        return $this;
    }

    /**
     * Find a database row by its ID.
     *
     * This method finds a database row by its ID. In this implementation,
     * it returns the mock database row
     * that was passed to the constructor.
     *
     * @param int $id The ID of the database row to find
     *
     * @return RowObjectRelationalMappingInterface The mock database row
     */
    public function find(int $id): RowObjectRelationalMappingInterface
    {
        return $this->databaseRow;
    }
}
