# Open/Closed Principle in PHP

This part of the project demonstrates the use of the Open/Closed Principle (OCP) in PHP. OCP is one of the five principles of SOLID. It states that software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification.

## Overview

In this section of the project, we have implemented classes that adhere to the Open/Closed Principle. Each class is designed to be extendable without needing to modify the class itself.

In the provided code, we can see that the `Discount` class is designed to be extendable without needing to modify the class itself. It depends on the `DiscountInterface` abstraction, not on any specific discount implementation:

```php
public function setDiscount(DiscountInterface $discount): void
{
    $this->discount = $discount;
}
```

This way, the `Discount` class can work with any object that implements the `DiscountInterface`, making it open for extension. For example, we can easily introduce new types of discounts by creating new classes that implement the `DiscountInterface`, such as `MonetaryDiscount` and `PercentageDiscount`, without needing to modify the `Discount` class itself.

## Code Structure

The code is structured into classes each adhering to the Open/Closed Principle. Here is a brief overview of the classes:

- `Discount`: This class represents a Discount in the system. It provides a method to get the discount as a decimal value.
- `MonetaryDiscount`: This class represents a MonetaryDiscount in the system. It implements the `DiscountInterface` and is responsible for applying a monetary discount to a price.
- `PercentageDiscount`: This class represents a PercentageDiscount in the system. It implements the `DiscountInterface` and is responsible for applying a percentage discount to a price.

## Usage

To understand the implementation of the Open/Closed Principle, navigate through the classes and observe how each class is designed to be extendable without needing to modify the class itself.
