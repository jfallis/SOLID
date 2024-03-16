<?php

declare(strict_types=1);

namespace SOLID\OpenClosedPrinciple;

/**
 * Class Discount.
 *
 * This class represents a Discount in the system. It provides a method to get the discount as a decimal value.
 * It follows the Open/Closed Principle, which states that software entities should be open for extension,
 * but closed for modification.
 * In this case, the Discount class is open for extension by allowing different types of discounts
 * to be applied via the DiscountInterface.
 */
class Discount
{
    /**
     * @var DiscountInterface The discount object
     */
    private DiscountInterface $discount;

    /**
     * @var int The price of the item before discount
     */
    private int $price;

    /**
     * Set the discount.
     *
     * This method sets the discount object.
     * The discount object should implement the DiscountInterface and have the discounted price set.
     *
     * @param DiscountInterface $discount The discount object. It should have the discounted price set
     */
    public function setDiscount(DiscountInterface $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * Get the discount.
     *
     * This method returns the discount object.
     * The discount object should implement the DiscountInterface and have the discounted price set.
     *
     * @return DiscountInterface The discount object
     */
    public function getDiscount(): DiscountInterface
    {
        return $this->discount;
    }

    /**
     * Set the price.
     *
     * This method sets the price of the item before discount.
     *
     * @param int $price The price of the item before discount
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * Get the price.
     *
     * This method returns the price of the item before discount.
     *
     * @return int The price of the item before discount
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Calculate savings.
     *
     * This method calculates the savings by calling the calculateSavings method of the discount object.
     * The discount object should implement the DiscountInterface and have the discounted price set.
     *
     * @return int The calculated savings
     */
    public function calculateSavings(): int
    {
        return $this->getDiscount()->calculateSavings($this->getPrice());
    }

    /**
     * Get discounted price.
     *
     * This method gets the discounted price by calling the getDiscountedPrice method of the discount object.
     * The discount object should implement the DiscountInterface and have the discounted price set.
     *
     * @return int The discounted price
     */
    public function getDiscountedPrice(): int
    {
        return $this->getDiscount()->getDiscountedPrice($this->getPrice());
    }
}
