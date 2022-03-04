<?php
abstract class Product{
    public $sku;
    public $name;
    public $price;
    public $type;

    public function getSku()
    {
        return $this->sku;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getType()
    {
        return $this->type;
    }

    abstract public function setData($data);
}
?>