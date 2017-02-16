<?php
class Juice
{
    private $Orangejuice;
    private $MangoJuice;

    public function __construct($mango, $orange)
    {
        $this->MangoJuice = $mango;
        $this->Orangejuice = $orange;
    }

    public function getMakeJuice()
    {
        return $this->Orangejuice . ' ' . $this->MangoJuice;
    }
}

class Juicemix
{
    public static function create($mango, $orange)
    {
        return new Juice($mango, $orange);
    }
}


$veyron = Juicemix::create('mangoes', 'oranges');

print_r($veyron->getMakeJuice()); 