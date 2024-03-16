# Liskov Substitution Principle in PHP

This part of the project demonstrates the use of the Liskov Substitution Principle (LSP) in PHP. LSP is one of the five principles of SOLID. It states that if a program is using a base class, then the reference to the base class can be replaced with a derived class without affecting the functionality of the program.

## Overview

In this section of the project, we have implemented classes that adhere to the Liskov Substitution Principle. Each derived class is substitutable for their base class without altering any properties that the program correctness depends on.

In the provided code, we have a `Bird` base class and two derived classes `Owl` and `Takahe`. Both derived classes can be substituted for the `Bird` class without affecting the functionality of the program.

For example, if we have a function that operates on a `Bird` object:

```php
function describeBird(Bird $bird)
{
    return $bird->getText();
}
```

We can pass an instance of `Owl` or `Takahe` to this function, and it will work correctly because these classes are substitutable for the `Bird` class:

```php
$owl = new Owl();
$takahe = new Takahe();

echo describeBird($owl); // Outputs: The Owl is gold and grey in colour and can fly.
echo describeBird($takahe); // Outputs: The Takahe is purple and blue in colour and cannot fly.
```

## Code Structure

The code is structured into classes each adhering to the Liskov Substitution Principle. Here is a brief overview of the classes:

- `Bird`: This is the base class that provides a certain functionality such as setting and getting the bird's ability to fly, colour, and name.
- `Owl`: This is a derived class that extends the `Bird` class and can be substituted for the `Bird` class without affecting the functionality of the program.
- `Takahe`: This is another derived class that extends the `Bird` class and can also be substituted for the `Bird` class without affecting the functionality of the program.

## Usage

To understand the implementation of the Liskov Substitution Principle, navigate through the classes and observe how each derived class can be substituted for their base class without altering any properties that the program correctness depends on.
