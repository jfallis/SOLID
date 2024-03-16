# Single Responsibility Principle in PHP

This part of the project demonstrates the use of the Single Responsibility Principle (SRP) in PHP. SRP is one of the five principles of SOLID. It states that a class should have only one reason to change.

## Overview

In this section of the project, we have implemented classes that adhere to the Single Responsibility Principle. Each class is designed to have a single responsibility.

In the provided code, we can see that each class has a single responsibility:

1. The `Email` class is responsible for managing email data, such as recipient, subject, and content.
    ```php
    class Email
    {
        private string $recipient;
        private string $subject;
        private string $content;
    
        // Methods to set and get the recipient, subject, and content
    }
    ```
1. The `EmailSender` class is responsible for sending an email.
    ```php
    class EmailSender implements EmailSenderInterface
    {
        public function sendEmail(Email $email): bool
        {
            // Send the email
        }
    }
    ```

Each of these classes has a single responsibility and does not perform any tasks outside of that responsibility.

## Code Structure

The code is structured into classes each adhering to the Single Responsibility Principle. Here is a brief overview of the classes:

- `Email`: This class represents an email with a recipient, subject, and content.
- `EmailSender`: This class represents an EmailSender in the system. It implements the `EmailSenderInterface` and has the single responsibility of sending an email.

## Usage

To understand the implementation of the Single Responsibility Principle, navigate through the classes and observe how each class is designed to have a single responsibility.
