<?php
class Database{
    private $host   = 'fdb32.awardspace.net';
    private $dbname = '4056911_test';
    private $user   = '4056911_test';
    private $pass   = 'juniortest123';

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public function addProduct($product, $data){
        $sku=$product->getSku();
        $name=$product->getName();
        $price=$product->getPrice();
        $type=$product->getType();
        if($type == "DVD"){
            $value=$product->getSize();
        }elseif ($type == "Book") {
            $value=$product->getWeight();
        }elseif ($type == "Furniture") {
            $values = array($product->getHeight(), $product->getWidth(), $product->getLength());
            $value =  "'" . implode("','", $values) . "'";
        }
        $keys = implode(",",array_keys($data));

        $dbData = $this->connect()->prepare("insert into product ($keys) values ('$sku', '$name', '$price', '$type', $value)");
        $dbData->execute();
        header("Location: /");
        exit;
    }

    public function prepareData($post){
        $data = array();
        foreach ($post as $param_name => $param_val) {
            if($param_val){
                $data[$param_name] = $param_val;
            }
        }
        return $data;
    }

    public function displayData(){
        $sql = "select * from product order by sku";
        $data = $this->connect()->query($sql);
        while($row = $data->fetch()){
            $sku = $row['sku'];
            $name = $row['name'];
            $price = $row['price'];
            $size = $row['size'];
            $weight = $row['weight'];
            $dimensions = $row['height'] . 'x' . $row['width'] . 'x' . $row['length'];
            if($row['productType'] == 'DVD'){
                $value = 'Size: '. $size . ' MB';
            }elseif ($row['productType'] == 'Book') {
                $value = 'Weight: '. $weight . 'KG';
            }else{
                $value = 'Dimensions: ' . $dimensions;
            }
            ?>
            <li>
                <div id='product_<?=$sku?>' class="product">
                    <p><?=$sku?></p>
                    <p><?=$name?></p>
                    <p><?=$price?>$</p>
                    <p><?=$value?></p>
                </div>
                <input type='checkbox' name='delete[]' value='<?= $sku ?>' class="delete-checkbox">
            </li>
            <?php
        }
    }

    public function deleteData($data){
    if(!empty($data)){
                foreach($data as $deleteid){
                    $query = "DELETE from product WHERE sku='$deleteid'";
                    $delete = $this->connect()->prepare($query);
                    $delete->execute();
                    //echo 'deleted' . $deleteid;
                }
                
          }
          header("Location: /");
                exit;
    }
}   
?>