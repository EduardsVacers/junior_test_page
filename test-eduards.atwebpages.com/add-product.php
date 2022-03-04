<!DOCTYPE html>
<html>
<head>
    <title>Junior Test Eduards Vacers</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="script/script.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <h1>Product Add</h1>

    <a href="" class="button"><input type="submit" value="Save" form="product_form"></a>
    <a href="/" class="button"><input type="button" value="Cancel"></a>
    <hr>
    <form action="save_product.php" id="product_form" method="POST">
        <ul>
            <li><label id="sku_label">SKU </label><input type="text" name="sku" id="sku" ></li>
            <li><label id="name_label">Name </label><input type="text" name="name" id="name" ></li>
            <li><label id="price_label">Price ($) </label><input type="text" name="price" id="price" ></li>

            <li><label id="productType_label">Product Type </label><select name="productType" id="productType" >
                <option value="0" selected></option>
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select></li>

            <li id="dvd_field"> <label id="size_label">Size (MB) </label><input type="text" id="size" name="size" >
                <p>Please, provide DVD size</p>
            </li>

            <li id="book_field"><label id="weight_label">Weight (KG)</label><input type="text" id="weight" name="weight" >
                <p>Please, provide weight of the Book</p>
            </li>

            <li id="furniture_field1"><label id="height_label">Height (CM)</label><input type="text" id="height" name="height" ></li>
            <li id="furniture_field2"><label id="length_label">Length (CM)</label><input type="text" id="length" name="length" ></li>
            <li id="furniture_field3"><label id="width_label">Width (CM)</label><input type="text" id="width" name="width" >
                <p>Please, provide Furniture dimensions</p>
            </li>
        </ul>
    </form>
    <footer><hr>Scandiweb Test Assignement</footer>
</body>
</html>