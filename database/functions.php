<?php
// acquire mysql connection
require ('database/DBcontroller.php');

// require Product class
require ('models/Product.php');
// require Cart class
require ('models/Cart.php');

// DBcontroller object
$db = new DBcontroller();

// Product object
$product = new Product($db);

// Cart object
$cart = new Cart($db);