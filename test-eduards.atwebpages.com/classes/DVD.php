<?php
class DVD extends Product{
    public $size;

    public function setData($data){
        $this->size=$data['size'];
        $this->sku=$data['sku'];
        $this->name=$data['name'];
        $this->price=$data['price'];
        $this->type=$data['productType'];
    }

    public function getSize(){
        return $this->size;
    }
}
?>