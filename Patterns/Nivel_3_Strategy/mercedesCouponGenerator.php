<?php declare(strict_types=1);
require_once "carCouponGenerator.php";
class mercedesCouponGenerator implements carCouponGenerator
{
    public function addSeasonDiscount(bool $isHighSeason): int
    {
        if ($isHighSeason) {
            return 4;
        } else {
            return 0;
        }
    }
    public function addStockDiscount(bool $isBigStock): int
    {
        if ($isBigStock) {
            return 10;

        } else {
            return 0;
        }
    }
}

?>
