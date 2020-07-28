<?php
include("../connection.php");
require('add_class.php');
$id=$_POST["id_article"];
$target = ( $_FILES['slika']['name']);
$path=pathinfo($target);
$target=$id.".".$path['extension'];
$link="picture/".$target;
$target = "../../picture/".$target; 

$out=uploadImage($id,$link);
list($width, $height) = getimagesize($_FILES['slika']['tmp_name']);
$cof=$width/$height;
$new_width=300;
$new_height=$new_width/$cof;
$src = imagecreatefromstring(file_get_contents($_FILES['slika']['tmp_name']));
$dst=imagecreatetruecolor( $new_width, $new_height );
imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
if($path['extension']=='png'){
	
	imagepng($dst, $_FILES['slika']['tmp_name']);
}
else{
	imagejpeg($dst, $_FILES['slika']['tmp_name']);
}


move_uploaded_file($_FILES['slika']['tmp_name'], $target);

echo $out;
?>