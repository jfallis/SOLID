<?php

declare(strict_types=1);

namespace SOLID\DependencyInversionPrinciple;

/**
 * Interface RepositoryInterface.
 *
 * This interface represents a Repository in the system.
 * It provides a constructor method that takes a DataObjectRelationalMappingInterface object as a parameter.
 * It follows the Dependency Inversion Principle, which states that high-level modules
 * should not depend on low-level modules. Both should depend on abstractions.
 * In this case, the RepositoryInterface is an abstraction that high-level modules can depend on.
 */
interface RepositoryInterface
{
    /**
     * RepositoryInterface constructor.
     *
     * This method constructs a new RepositoryInterface object.
     * It takes a DataObjectRelationalMappingInterface object as a parameter,
     * which represents a database.
     *
     * @param DataObjectRelationalMappingInterface $database A database
     */
    public function __construct(DataObjectRelationalMappingInterface $database);
}
