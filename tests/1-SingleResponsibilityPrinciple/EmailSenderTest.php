<?php

declare(strict_types=1);

namespace Tests\SingleResponsibilityPrinciple;

use PHPUnit\Framework\TestCase;
use SOLID\SingleResponsibilityPrinciple\Email;
use SOLID\SingleResponsibilityPrinciple\EmailSender;

/**
 * Class EmailSenderTest.
 *
 * This class represents a test case for the EmailSender class.
 * It tests the Single Responsibility Principle by creating an Email object, setting its properties,
 * and sending it using the EmailSender.
 *
 *  @internal
 */
final class EmailSenderTest extends TestCase
{
    /**
     * Test the Single Responsibility Principle.
     *
     * This method tests the Single Responsibility Principle by creating an Email object, setting its properties,
     * and sending it using the EmailSender.
     * It asserts that the actual result of sending the email matches the expected result.
     */
    public function testSingleResponsibilityPrinciple(): void
    {
        $email = new Email();
        $email->setRecipient('recipient@example.com');
        $email->setSubject('Hello');
        $email->setContent('Hello, John!');

        $emailSender = new EmailSender();

        self::assertTrue($emailSender->SendEmail($email));
    }
}
