<?php
class Furniture extends Product{
    public $height;
    public $width;
    public $length;

    public function setData($data)
    {
        $this->height=$data['height'];
        $this->width=$data['width'];
        $this->length=$data['length'];
        $this->sku=$data['sku'];
        $this->name=$data['name'];
        $this->price=$data['price'];
        $this->type=$data['productType'];
    }
    public function getHeight(){
        return $this->height;
    }
    public function getWidth(){
        return $this->width;
    }
    public function getLength(){
        return $this->length;
    }
}
?>