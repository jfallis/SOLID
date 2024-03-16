<?php

declare(strict_types=1);

namespace SOLID\OpenClosedPrinciple;

/**
 * Class MonetaryDiscount.
 *
 * This class represents a MonetaryDiscount in the system. It implements the DiscountInterface.
 * It follows the Open/Closed Principle, which states that software entities should be
 * open for extension, but closed for modification.
 * In this case, the MonetaryDiscount class is responsible for applying a monetary discount to a price,
 * which includes setting and getting the discount amount,
 * as well as calculating the discounted price and the savings.
 */
class MonetaryDiscount implements DiscountInterface
{
    /**
     * @var int The monetary discount amount
     */
    private int $discount;

    /**
     * Constructor for the MonetaryDiscount class.
     *
     * This method initialises the MonetaryDiscount object with a discount amount.
     *
     * @param int $discount The monetary discount amount
     */
    public function __construct(int $discount)
    {
        $this->setDiscount($discount);
    }

    /**
     * Set the monetary discount amount.
     *
     * This method sets the monetary discount amount. The discount amount should be an integer.
     *
     * @param int $discount The monetary discount amount
     */
    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * Get the monetary discount amount.
     *
     * This method returns the monetary discount amount. The discount amount is returned as an integer.
     *
     * @return int The monetary discount amount
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * Calculate savings.
     *
     * This method calculates the savings by returning the discount amount.
     * The discount amount is considered as the savings in the case of a monetary discount.
     *
     * @param int $price The price before discount
     *
     * @return int The calculated savings
     */
    public function calculateSavings(int $price): int
    {
        return $this->getDiscount();
    }

    /**
     * Get discounted price.
     *
     * This method calculates the discounted price by subtracting the savings from the original price.
     *
     * @param int $price The price before discount
     *
     * @return int The discounted price
     */
    public function getDiscountedPrice($price): int
    {
        return $price - $this->calculateSavings($price);
    }
}
