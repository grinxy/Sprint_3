<?php declare(strict_types= 1);

class Tigger {

    private static $instance = null;
    private int $roar = 0;

    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }

    public static function getInstance() : Tigger{
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function roar() : void {
            echo "Grrr!" . PHP_EOL;
            $this->roar++;
    }

    public function getCounter() : string {
       return "Tigger has roared " . $this->roar . " times" . PHP_EOL;
    }
}