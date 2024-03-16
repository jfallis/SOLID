<?php

declare(strict_types=1);

namespace SOLID\OpenClosedPrinciple;

/**
 * Interface DiscountInterface.
 *
 * This interface defines the contract for applying a discount. It follows the Open/Closed Principle,
 * which states that software entities should be open for extension, but closed for modification.
 * In this case, any class implementing this interface is expected to provide methods for
 * setting and getting a discounts, as well as calculating a discounted price.
 */
interface DiscountInterface
{
    /**
     * Constructor.
     *
     * This method should set the original price and the discount percentage.
     *
     * @param int $discount The discount percentage
     */
    public function __construct(int $discount);

    /**
     * Set the discount percentage.
     *
     * This method sets the discount percentage. The discount percentage should be an integer.
     *
     * @param int $discount The discount percentage
     */
    public function setDiscount(int $discount): void;

    /**
     * Get the discount percentage.
     *
     * This method returns the discount percentage. The discount percentage is returned as an integer.
     *
     * @return int The discount percentage
     */
    public function getDiscount(): int;

    /**
     * Calculate savings.
     *
     * This method calculates the savings based on the discount percentage and the original price.
     * The savings are returned as an integer.
     *
     * @param int $price The original price before discoun
     *
     * @return int The calculated savings
     */
    public function calculateSavings(int $price): int;

    /**
     * Get discounted price.
     *
     * This method calculates the discounted price by subtracting the savings from the original price.
     * The discounted price is returned as an integer.
     *
     * @param int $price The original price before discount
     *
     * @return int The discounted price
     */
    public function getDiscountedPrice(int $price): int;
}
