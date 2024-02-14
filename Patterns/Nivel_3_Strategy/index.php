<?php declare(strict_types= 1);
require_once "bmwCouponGenerator.php";
require_once "mercedesCouponGenerator.php";

$carCoupon1 = new bmwCuoponGenerator(true, true);
$carCoupon2 = new mercedesCuoponGenerator(true, true);
$carCoupon3 = new bmwCuoponGenerator(true, false);
$carCoupon4 = new mercedesCuoponGenerator(false, true);

echo $carCoupon1->couponGenerator() . PHP_EOL;
echo $carCoupon2->couponGenerator() . PHP_EOL;
echo $carCoupon3->couponGenerator() . PHP_EOL;
echo $carCoupon4->couponGenerator() . PHP_EOL;