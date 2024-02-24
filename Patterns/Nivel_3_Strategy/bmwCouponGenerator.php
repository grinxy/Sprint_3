<?php declare(strict_types=1);
require_once "carCouponGenerator.php";
class bmwCouponGenerator implements carCouponGenerator
{

    public function addSeasonDiscount(bool $isHighSeason): int
    {
        if ($isHighSeason) {
            return 5;
        } else {
            return 0;
        }
    }
    public function addStockDiscount(bool $isBigStock): int
    {
        if ($isBigStock) {
            return 7;

        } else {
            return 0;
        }
    }
}

?>