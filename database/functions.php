<?php
// acquire mysql connection
require ('database/DBcontroller.php');

// require Product class
require ('database/Product.php');

// DBcontroller object
$db = new DBcontroller();
$product = new Product($db);
