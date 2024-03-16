<?php

declare(strict_types=1);

namespace SOLID\SingleResponsibilityPrinciple;

/**
 * Interface EmailSenderInterface.
 *
 * This interface defines the contract for sending an email. It follows the Single Responsibility Principle,
 * which states that a class should have only one reason to change.
 * In this case, the EmailSenderInterface defines the contract for sending emails.
 */
interface EmailSenderInterface
{
    /**
     * Send an email.
     *
     * This method takes an Email object as a parameter and returns a string indicating the recipient, subject,
     * and content of the email. The Email object should have the recipient, subject, and content set before
     * this method is called.
     *
     * @param Email $email The email to be sent. It should have the recipient, subject, and content set
     *
     * @return bool Returns a boolean indicating the success of sending the email
     */
    public function sendEmail(Email $email): bool;
}
