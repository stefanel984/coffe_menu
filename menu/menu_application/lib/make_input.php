<?php
include("../connection.php");
require('add_class.php');
$id=$_POST["id"];
$product=$_POST['product'];
$price=$_POST['price'];
$desc=$_POST['desc'];
$delete=0;
if ($id=="0"){
	$subcategory=$_POST['subcategory'];
    $category=$_POST['category'];
	$type=$_POST['type'];
	$out=addNewArticle($product, $subcategory, $category, $price, $desc, $type, $delete);
}
else{
	$out=editArticle($id,$price, $desc, $product);
}

echo $out;
?>