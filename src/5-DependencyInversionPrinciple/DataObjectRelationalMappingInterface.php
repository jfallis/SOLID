<?php

declare(strict_types=1);

namespace SOLID\DependencyInversionPrinciple;

/**
 * Interface DataObjectRelationalMappingInterface.
 *
 * This interface defines the methods that should be implemented by any class that represents a Data
 * Object in an Object-Relational Mapping (ORM) context.
 * It follows the Dependency Inversion Principle, which states that high-level modules should
 * not depend on low-level modules. Both should depend on abstractions.
 * In this case, any class implementing this interface is expected to provide methods for
 * retrieving a repository and finding a database row by its ID.
 */
interface DataObjectRelationalMappingInterface
{
    /**
     * DataObjectRelationalMappingInterface constructor.
     *
     * This constructor should receive a DatabaseRow instance.
     *
     * @param RowObjectRelationalMappingInterface $databaseRow The DatabaseRow instance
     */
    public function __construct(RowObjectRelationalMappingInterface $databaseRow);

    /**
     * Get a repository.
     *
     * This method should return a repository for a given class name.
     * The specific rules for retrieving this repository are up to the implementing class.
     *
     * @param string $className The name of the class for which to get the repository
     *
     * @return self Returns the repository for the specified class
     */
    public function getRepository(string $className): self;

    /**
     * Find a database row by its ID.
     *
     * This method should return a DatabaseRow instance for a given ID.
     * The specific rules for retrieving this DatabaseRow are up to the implementing class.
     *
     * @param int $id The ID of the database row to find
     *
     * @return RowObjectRelationalMappingInterface Returns a DatabaseRow instance
     */
    public function find(int $id): RowObjectRelationalMappingInterface;
}
