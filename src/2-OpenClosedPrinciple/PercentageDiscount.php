<?php

declare(strict_types=1);

namespace SOLID\OpenClosedPrinciple;

/**
 * Class PercentageDiscount.
 *
 * This class represents a PercentageDiscount in the system. It implements the DiscountInterface.
 * It follows the Open/Closed Principle, which states that software entities should be open for extension,
 * but closed for modification.
 * In this case, the PercentageDiscount class is responsible for applying a percentage discount to a price,
 * which includes setting and getting the discount percentage,
 * as well as calculating the discounted price and the savings.
 */
class PercentageDiscount implements DiscountInterface
{
    /**
     * @var int The percentage discount amount
     */
    private int $discount;

    /**
     * Constructor for the PercentageDiscount class.
     *
     * This method initialises the PercentageDiscount object with a discount percentage.
     *
     * @param int $discount The percentage discount amount
     */
    public function __construct(int $discount)
    {
        $this->setDiscount($discount);
    }

    /**
     * Set the percentage discount amount.
     *
     * This method sets the percentage discount amount. The discount amount should be an integer.
     *
     * @param int $discount The percentage discount amount
     */
    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * Get the percentage discount amount.
     *
     * This method returns the percentage discount amount. The discount amount is returned as an integer.
     *
     * @return int The percentage discount amount
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * Calculate savings.
     *
     * This method calculates the savings by applying the discount percentage to the price.
     * The result is rounded to the nearest integer.
     *
     * @param int $price The price before discount
     *
     * @return int The calculated savings
     */
    public function calculateSavings(int $price): int
    {
        $calculation = $price * ($this->getDiscount() / 100);

        return (int) round($calculation);
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
    public function getDiscountedPrice(int $price): int
    {
        return $price - $this->calculateSavings($price);
    }
}
