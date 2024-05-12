<?php
class Car2
{
    private $model;
    private $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setColor()
    {
        return $this->color;
    }
}

$car = new Car2("Toyota", "Blue");

echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->setColor() . "<br>";

$car->setColor("Red");

echo "Updated Color: " . $car->setColor() . "<br>";
?>