<?php
include("config_file.php");
function backSQLresult($result){
	$conn=dbConnect();
	$results=mysqli_query($conn,$result);
	$result_set=array();
	while(($row = mysqli_fetch_array($results, MYSQL_ASSOC))){
		$result_set[]=$row;
	}
	return $result_set;
}

function addNewArticle($product, $subcategory, $category, $price, $desc, $type, $delete=0){
	  $product=strip_tags($product);
	  $subcategory=strip_tags($subcategory);
	  $category=strip_tags($category);
	  $desc=strip_tags($desc);
	  $type=strip_tags($type);
	  $price=(int)$price;
	  $delete=(int)$delete;
	  
	  
	  $conn=dbConnect();
	  $sql="INSERT INTO menu (name_of_product, price, kategorija, sub_kategorija, type, description, delete_article) VALUES ('$product','$price','$category','$subcategory','$type','$desc', '$delete')";
	  $result=mysqli_query($conn,$sql);
	   if(!$result){
			 return 0;
			 
		 }else
		{
			return 1;	 
	    }
}
function showArticle($type ){
	  $conn=dbConnect();
	  $sql="SELECT * FROM menu WHERE type='".$type."' ORDER BY delete_article";
	  $result=backSQLresult($sql);
	  return $result;	
}
function deleteArticle($id){
	 $conn=dbConnect();
	 $sql="UPDATE menu SET delete_article=1 WHERE id=".$id;
	 $result=mysqli_query($conn,$sql);
	   if(!$result){
			 return 0;
			 
		 }else
		{
			return 1;	 
	    }
	 
	
}
function restoreArticle($id){
	 $conn=dbConnect();
	 $sql="UPDATE menu SET delete_article=0 WHERE id=".$id;
	 $result=mysqli_query($conn,$sql);
	   if(!$result){
			 return 0;
			 
		 }else
		{
			return 1;	 
	    }
	 
	
}
function editArticle($id,$price, $desc, $product){
	 $price=(int)$price;
	 $id=(int)$id;
	 $desc=strip_tags($desc);	 
	 $conn=dbConnect();
	 $sql="UPDATE menu SET  price=".$price.", description='".$desc."', name_of_product='".$product."'  WHERE id=".$id;
	 $result=mysqli_query($conn,$sql);
	   if(!$result){
			 return 0;
			 
		 }else
		{
			return 1;	 
	    }
	 
	
}
function takeArticle($id){
	  $conn=dbConnect();
	  $sql="SELECT * FROM menu WHERE id=".$id;
	  $result=backSQLresult($sql);
	  return $result[0];
	
}
function uploadImage($id, $img_url){
	 $id=(int)$id;
	 $conn=dbConnect();
	 $sql="UPDATE menu SET  image='".$img_url."'  WHERE id=".$id;
	 $result=mysqli_query($conn,$sql);
	   if(!$result){
			 return 0;
			 
		 }else
		{
			return 1;	 
		}
	
}

?>