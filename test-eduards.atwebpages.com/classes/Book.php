<?php
class Book extends Product{
    public $weight;

    public function setData($data){
        $this->weight=$data['weight'];
        $this->sku=$data['sku'];
        $this->name=$data['name'];
        $this->price=$data['price'];
        $this->type=$data['productType'];
    }

    public function getWeight(){
        return $this->weight;
    }
}
?>