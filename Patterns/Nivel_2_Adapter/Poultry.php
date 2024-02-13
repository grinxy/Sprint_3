<?php declare(strict_types=1);

class Duck
{

    public function quack()
    {
        echo "Quack \n";
    }

    public function fly()
    {
        echo "I'm flying \n";
    }
}

class Turkey
{

    public function gobble()
    {
        echo "Gobble gobble \n";
    }

    public function fly()
    {
        echo "I'm flying a short distance \n";
    }
}

class TurkeyAdapter extends Duck
{

    private Turkey $turkey;
    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;

    }
    public function quack(): void
    {
        $this->turkey->gobble();

    }
    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            echo $this->turkey->fly();
        }

    }
}
?>