<?php
class Auto //vytvářím si proměnné
{
    private $vytvorvuz;
    private $modelvozu;

    public function __construct($make, $model) //přiřezuju vytvorvuz k proměné make a to samé s modelem
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
