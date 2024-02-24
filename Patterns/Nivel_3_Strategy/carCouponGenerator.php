<?php declare(strict_types= 1);

interface carCouponGenerator{

    public function addStockDiscount(bool $isHighSeason);
    public function addSeasonDiscount(bool $isBigStock);


}