<?php

declare(strict_types=1);

namespace SOLID\DependencyInversionPrinciple;

/**
 * Class UserRepository.
 *
 * This class represents a UserRepository in the system. It provides methods to get a user by ID.
 * It follows the Dependency Inversion Principle, which states that high-level modules
 * should not depend on low-level modules. Both should depend on abstractions.
 */
class UserRepository implements RepositoryInterface
{
    /**
     * @var DataObjectRelationalMappingInterface The database connection
     */
    private DataObjectRelationalMappingInterface $database;

    /**
     * Constructor.
     *
     * This method initialises the UserRepository object with a database connection.
     *
     * @param DataObjectRelationalMappingInterface $database The database connection
     */
    public function __construct(DataObjectRelationalMappingInterface $database)
    {
        $this->database = $database;
    }

    /**
     * Gets a user by ID.
     *
     * This method returns a User object for a given ID. It retrieves the user data from the database,
     * creates a new User object, and sets the user's properties.
     *
     * @param int $id The ID of the user
     *
     * @return User Returns a User object
     */
    public function getById(int $id): User
    {
        $row = $this->database->getRepository('SELECT * FROM users')->find($id);
        $user = new User();
        $user->setName($row->get('name'));
        $user->setEmail($row->get('email'));
        $user->setPermission($row->get('permission'));

        return $user;
    }
}
