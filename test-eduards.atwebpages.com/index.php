<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Junior Test Eduards Vacers</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <h1>Product List</h1>
    <a href="add-product.php" class="button"><input type="button" value="ADD"></a>
    <a href="" class="button"><input type="submit" value="MASS DELETE" id="delete-product-btn" form="products" ></a>
    <hr>
    <form action="delete_products.php" method="post" class="products" id="products">
        <ul class="products_list">
        <?php
            include 'display_products.php';
        ?>
        </ul>
    </form>
</body>
</html>
