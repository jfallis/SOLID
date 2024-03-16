<?php

declare(strict_types=1);

namespace Tests\DependencyInversionPrinciple;

use PHPUnit\Framework\TestCase;
use SOLID\DependencyInversionPrinciple\DatabaseRow;
use SOLID\DependencyInversionPrinciple\MySQLDatabase;
use SOLID\DependencyInversionPrinciple\PostgresDatabase;
use SOLID\DependencyInversionPrinciple\UserRepository;

/**
 * Class UserRepositoryTest.
 *
 * It tests the Dependency Inversion Principle by creating a
 * UserRepository object with a Database object as a dependency.
 * It then retrieves a user by ID and asserts that the user's properties match the expected values.
 *
 * @internal
 */
final class UserRepositoryTest extends TestCase
{
    /**
     * Test the Dependency Inversion Principle.
     *
     * This method tests the Dependency Inversion Principle by creating a UserRepository object with
     * a MySQLDatabase object as a dependency.
     * It then retrieves a user by ID and asserts that the user's properties
     * (name, email, permission) match the expected values.
     */
    public function testMySQLDatabaseDependencyInversionPrinciple(): void
    {
        $database = new MySQLDatabase(new DatabaseRow());

        $userRepo = new UserRepository($database);
        $actual = $userRepo->getById(1);

        self::assertSame('name data', $actual->getName());
        self::assertSame('email data', $actual->getEmail());
        self::assertSame('permission data', $actual->getPermission());
    }

    /**
     * Test the Dependency Inversion Principle.
     *
     * This method tests the Dependency Inversion Principle by creating a UserRepository object with
     * a PostgresDatabase object as a dependency.
     * It then retrieves a user by ID and asserts that the user's properties
     * (name, email, permission) match the expected values.
     */
    public function testPostgresDatabaseDependencyInversionPrinciple(): void
    {
        $database = new PostgresDatabase(new DatabaseRow());

        $userRepo = new UserRepository($database);
        $actual = $userRepo->getById(1);

        self::assertSame('name data', $actual->getName());
        self::assertSame('email data', $actual->getEmail());
        self::assertSame('permission data', $actual->getPermission());
    }
}
