<?php declare(strict_types=1);
require_once "carCouponGenerator.php";
class bmwCuoponGenerator implements carCouponGenerator
{
    private float $discount;
    private bool $isHighSeason;
    private bool $bigStock;
    
    public function __construct(bool $isHighSeason, bool $bigStock){
        $this->discount = 0;
        $this->isHighSeason = $isHighSeason;
        $this->bigStock = $bigStock;
    }

    public function couponGenerator() : string
    {
        
        $this->addStockDiscount();
        $this->addSeasonDiscount();
        $coupon = "Get {$this->discount}% off the price of your new car.";;
        
        return $coupon;
    }
    public function addSeasonDiscount(): float
    {
        if (!$this->isHighSeason) {
            $this->discount += 5;
        }
        return $this->discount;

    }
    public function addStockDiscount(): float
    {
        if ($this->bigStock) {
            $this->discount += 7;;
        }
        return $this->discount;

    }
}

?>