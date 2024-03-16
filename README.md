# SOLID Principles in PHP

This project demonstrates the use of SOLID principles in PHP. It includes examples of the Open/Closed Principle and the Dependency Inversion Principle.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP 8.2 or higher
- Composer

### Installing

1. Clone the repository
    ```bash
    git clone https://github.com/jfallis/solid-principles-php.git
    ```
1. Run Tests
    ```bash
    make test
    ```
1. Run coverage report
    ```bash
    make coverage-report
    ```

## SOLID Principles

The SOLID principles are a set of five principles that help developers design maintainable and scalable software. The principles are:

1. [Single Responsibility Principle](src/1-SingleResponsibilityPrinciple/README.md)
   1. [Test](tests/1-SingleResponsibilityPrinciple/EmailSenderTest.php)
2. [Open/Closed Principle](src/2-OpenClosedPrinciple/README.md)
   1. [Test](tests/2-OpenClosedPrinciple/DiscountTest.php)
3. [Liskov Substitution Principle](src/3-LiskovSubstitutionPrinciple/README.md)
   1. [Test](tests/3-LiskovSubstitutionPrinciple/BirdTest.php)
4. [Interface Segregation Principle](src/4-InterfaceSegregationPrinciple/README.md)
   1. [Test](tests/4-InterfaceSegregationPrinciple/PersonnelTest.php)
5. [Dependency Inversion Principle](src/5-DependencyInversionPrinciple/README.md)
   1. [Test](tests/5-DependencyInversionPrinciple/UserRepositoryTest.php)
