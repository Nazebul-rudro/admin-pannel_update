<?php
session_start();
$_SESSION['product_name'] = $_POST['product_name'];
$_SESSION['product_details'] = $_POST['product_details'];
$_SESSION['product_price'] = $_POST['product_price'];
$_SESSION['product_quantity'] = $_POST['product_quantity'];

echo "<Pre>";
print_r($_SESSION);
echo"</Pre>";
echo $_SESSION['product_name'];
echo $_SESSION['product_details'];
echo $_SESSION['product_price'];
echo $_SESSION['product_quantity'];

echo $_SESSION['product_name'];


?>