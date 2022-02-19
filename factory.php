<?php
class Auto
{
    private $vytvorvuz;
    private $modelvozu;

    public function __construct($make, $model)
    {
        $this->vytvorvuz = $make;
        $this->modelvozu = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vytvorvuz . ' ' . $this->modelvozu;
    }
}
class Tovarna
{
    public static function create($make, $model)
    {
        return new Auto($make, $model);
    }
}
$audi = Tovarna::create('Audi', 'R8');

print_r($audi->getMakeAndModel()); //výstup bude Audi R8