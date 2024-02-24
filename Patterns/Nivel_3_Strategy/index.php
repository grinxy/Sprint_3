<?php declare(strict_types= 1);
require_once "bmwCouponGenerator.php";
require_once "mercedesCouponGenerator.php";



echo cupounGenerator("bmw");
function cupounGenerator($car) : string {

    $discount = 0;
    $isHighSeason = false;
    $isBigStock = true;

    if($car == "bmw"){
       $newCouponGenerator = new bmwCouponGenerator();
    } else if($car == "mercedes") {
       $newCouponGenerator = new mercedesCouponGenerator();
    
    }
    $discount = $newCouponGenerator->addSeasonDiscount($isHighSeason) + $newCouponGenerator->addStockDiscount($isBigStock);
   
    return $cupoun = "Get {$discount}% off the price of your new car.";
}

?>