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

function selectMenu($type, $category, $sub_category){
	$conn=dbConnect();
	$sql="SELECT * FROM menu WHERE type='".$type."'";
	if($category!=""){
		$sql.=" AND kategorija='".$category."'";
	}
	if($sub_category!=""){
		$sql.=" AND sub_kategorija='".$sub_category."'";
	}
	$sql.=" AND delete_article=0 ";

	$result=backSQLresult($sql);
	return $result;	
	
}
function showDetails($details){
	  $desc_array=explode(",",$details);
	  $new_array=array();
	  foreach($desc_array as $integredians){
		  $integredians=ltrim($integredians);
		  if(substr($integredians,0,1)=="*"){
			  $integredians="<font color='green'>".$integredians."</font>";
		  }
		  $new_array[]=$integredians;
		  
		  
	  }
	  $desc=implode(", ",$new_array);
	  return $desc;
	
}


?>