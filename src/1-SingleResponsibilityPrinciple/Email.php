<?php

declare(strict_types=1);

namespace SOLID\SingleResponsibilityPrinciple;

/**
 * Class Email.
 *
 * This class represents an email with a recipient, subject, and content.
 * It follows the Single Responsibility Principle, which states that a class should have only one reason to change.
 * In this case, the Email class serves as a data object for Emails.
 */
class Email
{
    /**
     * @var string The recipient of the email
     */
    private string $recipient;

    /**
     * @var string The subject of the email
     */
    private string $subject;

    /**
     * @var string The content of the email
     */
    private string $content;

    /**
     * Set the recipient of the email.
     *
     * This method sets the recipient of the email.
     *
     * @param string $recipient The recipient of the email
     */
    public function setRecipient(string $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * Get the recipient of the email.
     *
     * This method returns the recipient of the email.
     *
     * @return string The recipient of the email
     */
    public function getRecipient(): string
    {
        return $this->recipient;
    }

    /**
     * Set the subject of the email.
     *
     * This method sets the subject of the email.
     *
     * @param string $subject The subject of the email
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * Get the subject of the email.
     *
     * This method returns the subject of the email.
     *
     * @return string The subject of the email
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * Set the content of the email.
     *
     * This method sets the content of the email.
     *
     * @param string $content The content of the email
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * Get the content of the email.
     *
     * This method returns the content of the email.
     *
     * @return string The content of the email
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
