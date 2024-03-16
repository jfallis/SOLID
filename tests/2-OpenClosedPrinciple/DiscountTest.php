<?php

declare(strict_types=1);

namespace Tests\OpenClosedPrinciple;

use PHPUnit\Framework\TestCase;
use SOLID\OpenClosedPrinciple\Discount;
use SOLID\OpenClosedPrinciple\MonetaryDiscount;
use SOLID\OpenClosedPrinciple\PercentageDiscount;

/**
 * Class DiscountTest.
 *
 * This class represents a test case for the Discount class.
 * It tests the Open-Closed Principle by creating a Discount object, setting its price,
 * and applying different types of discounts (Monetary and Percentage).
 *
 *  @internal
 */
final class DiscountTest extends TestCase
{
    /**
     * Test the open-closed principle with a monetary discount of 2.53 from 37.52.
     *
     * This method tests the Open-Closed Principle by creating a MonetaryDiscount object,
     * setting its discount value, and applying it to a Discount object.
     * It asserts that the actual discounted price matches the expected discounted price.
     */
    public function testOpenClosedPrincipleMonetaryDiscount(): void
    {
        $monetaryDiscount = new MonetaryDiscount(253);

        $discount = new Discount();
        $discount->setDiscount($monetaryDiscount);
        $discount->setPrice(3_752);
        $actualCalculateSavings = $discount->calculateSavings();
        $actualDiscountedPrice = $discount->getDiscountedPrice();

        $expectedCalculateSavings = 253;
        $expectedDiscountedPrice = 3_499;

        self::assertSame($expectedCalculateSavings, $actualCalculateSavings);
        self::assertSame($expectedDiscountedPrice, $actualDiscountedPrice);
    }

    /**
     * Test the open-closed principle with a percentage discount of 15% from 33.25.
     *
     * This method tests the Open-Closed Principle by creating a PercentageDiscount object,
     * setting its discount value, and applying it to a Discount object.
     * It asserts that the actual discounted price matches the expected discounted price.
     */
    public function testOpenClosedPrinciplePercentageDiscount(): void
    {
        $monetaryDiscount = new PercentageDiscount(15);

        $discount = new Discount();
        $discount->setDiscount($monetaryDiscount);
        $discount->setPrice(3_325);
        $actualCalculateSavings = $discount->calculateSavings();
        $actualDiscountedPrice = $discount->getDiscountedPrice();

        $expectedCalculateSavings = 499;
        $expectedDiscountedPrice = 2_826;

        self::assertSame($expectedCalculateSavings, $actualCalculateSavings);
        self::assertSame($expectedDiscountedPrice, $actualDiscountedPrice);
    }
}
