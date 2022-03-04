<?php

include 'autoload.php';

$database = new database();
$database->deleteData($_POST['delete']);
?>