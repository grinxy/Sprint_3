<?php   declare(strict_types= 1);

require_once "Tigger.php";

$tigger1= Tigger::getInstance();
$tigger2= Tigger::getInstance();
$tigger3= Tigger::getInstance();

$tigger1->roar();
$tigger2->roar();
echo $tigger2->getCounter();

$tigger3->roar();
$tigger1->roar();
echo $tigger1->getCounter();
echo $tigger3->getCounter();


?>