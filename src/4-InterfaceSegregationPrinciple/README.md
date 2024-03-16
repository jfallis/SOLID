# Interface Segregation Principle in PHP

This part of the project demonstrates the use of the Interface Segregation Principle (ISP) in PHP. ISP is one of the five principles of SOLID. It states that clients should not be forced to depend on interfaces they do not use.

## Overview

In this section of the project, we have implemented interfaces that adhere to the Interface Segregation Principle. Each interface is designed to be highly cohesive and client-specific.

In the provided code, we can see that the `Personnel` class implements two interfaces: `WorkerInterface` and `ExpenseInterface`. Each of these interfaces has a clear and focused responsibility:

- `WorkerInterface` provides methods for determining the level and active status of a worker.
- `ExpenseInterface` provides methods for determining whether a personnel is allowed to travel and claim food expenses.

The `Personnel` class only implements the methods that are relevant to its functionality, thus adhering to the Interface Segregation Principle. Here is an example:

```php
class Personnel implements WorkerInterface, ExpenseInterface
{
    public function level(): string
    {
        return 'junior';
    }

    public function active(): bool
    {
        return true;
    }

    public function travel(): bool
    {
        return false;
    }

    public function food(): bool
    {
        return true;
    }
}
```

This way, the `Personnel` class is not forced to implement any methods that it does not need, which makes the system more flexible and the components more reusable and easier to maintain.

## Code Structure

The code is structured into interfaces each adhering to the Interface Segregation Principle. Here is a brief overview of the interfaces:

- `WorkerInterface`: This interface defines the methods that should be implemented by any class that represents a Worker. It provides methods for determining the level and active status of a worker.
- `ExpenseInterface`: This interface defines the methods that should be implemented by any class that represents an Expense. It provides methods for determining whether a personnel is allowed to travel and claim food expenses.

## Usage

To understand the implementation of the Interface Segregation Principle, navigate through the interfaces and observe how each interface is designed to be highly cohesive and client-specific.
