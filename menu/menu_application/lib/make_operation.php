<?php
include("../connection.php");
require('add_class.php');
$full_id=$_POST['id'];
$op=$_POST['op'];
if($op=="delete"){
	$id_array=explode("_",$full_id);
	$id=$id_array[1];
	$out=deleteArticle($id);
}
if($op=="restore"){
	$id_array=explode("_",$full_id);
	$id=$id_array[1];
	$out=restoreArticle($id);
}
echo $out;

?>