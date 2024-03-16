<?php

declare(strict_types=1);

namespace SOLID\DependencyInversionPrinciple;

/**
 * Class User.
 *
 * This class represents a User in the system.
 * It provides methods to set and get the name, email, and permission of the user.
 * It follows the Dependency Inversion Principle, which states that high-level modules should
 * not depend on low-level modules. Both should depend on abstractions.
 */
class User
{
    /**
     * @var string The name of the user
     */
    private string $name;

    /**
     * @var string The email of the user
     */
    private string $email;

    /**
     * @var string The permission of the user
     */
    private string $permission;

    /**
     * Sets the name of the user.
     *
     * This method sets the name of the user. The name is a string.
     *
     * @param string $name The name of the user
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Gets the name of the user.
     *
     * This method returns the name of the user. The name is a string.
     *
     * @return string Returns the name of the user
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the email of the user.
     *
     * This method sets the email of the user. The email is a string.
     *
     * @param string $email The email of the user
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Gets the email of the user.
     *
     * This method returns the email of the user. The email is a string.
     *
     * @return string Returns the email of the user
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets the permission of the user.
     *
     * This method sets the permission of the user. The permission is a string.
     *
     * @param string $permission The permission of the user
     */
    public function setPermission(string $permission): void
    {
        $this->permission = $permission;
    }

    /**
     * Gets the permission of the user.
     *
     * This method returns the permission of the user. The permission is a string.
     *
     * @return string Returns the permission of the user
     */
    public function getPermission(): string
    {
        return $this->permission;
    }
}
