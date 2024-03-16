# Dependency Inversion Principle in PHP

This part of the project demonstrates the use of the Dependency Inversion Principle (DIP) in PHP. DIP is one of the five principles of SOLID. It states that high-level modules should not depend on low-level modules. Both should depend on abstractions.

## Overview

In this section of the project, we have implemented classes and interfaces that adhere to the Dependency Inversion Principle. Each high-level module depends on an abstraction, not on a low-level module.

1. High-level modules should not depend on low-level modules. Both should depend on abstractions.
1. Abstractions should not depend on details. Details should depend on abstractions.

In the provided code, we can see that high-level modules like `MySQLDatabase`, and `PostgresDatabase` do not depend on low-level modules. Instead, they depend on abstractions (`DataObjectRelationalMappingInterface`).

For example, in the `UserRepository` class, it depends on the `DataObjectRelationalMappingInterface` abstraction, not on any specific database implementation:

```php
public function __construct(DataObjectRelationalMappingInterface $database)
{
    $this->database = $database;
}
```

This way, the high-level modules are not directly dependent on low-level modules, which makes the system more flexible and the components more reusable and easier to maintain.

## Code Structure

The code is structured into classes and interfaces each adhering to the Dependency Inversion Principle. Here is a brief overview of the classes and interfaces:

- `DataObjectRelationalMappingInterface`: This interface defines the methods that should be implemented by any class that represents a Data Object in an Object-Relational Mapping (ORM) context.
- `RowObjectRelationalMappingInterface`: This interface defines the method that should be implemented by any class that represents a Row in an ORM context.
- `RepositoryInterface`: This interface represents a Repository in the system.
- `MySQLDatabase` and `PostgresDatabase`: These classes represent different types of Databases in the system. They implement the `DataObjectRelationalMappingInterface`.
- `DatabaseRow`: This class represents a DatabaseRow in the system. It implements the `RowObjectRelationalMappingInterface`.
- `UserRepository`: This class represents a UserRepository in the system. It provides methods to get a user by ID.
- `User`: This class represents a User in the system.

## Usage

To understand the implementation of the Dependency Inversion Principle, navigate through the classes and interfaces and observe how each high-level module depends on an abstraction, not on a low-level module.
