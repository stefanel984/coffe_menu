<?php
include("../connection.php");
require('add_class.php');
$sub_cat=$_POST['param'];
switch($sub_cat){
	case "not_alcoholic":
			$sub_article=array("beverages_mineral"=>"Газирани пијалоци", "beverages"=>"Негазирани пијалоци", "smoothes"=>"Смути", "juice"=>"Цедени сокови", "water"=>'Вода', "hot_drinks"=>"Жешки пијалоци");
	break;
	case "alcoholic":
			$sub_article=array("aperativi"=>"Аперативи","whisky"=>'Виски', 'beer'=>'Пиво');
	break;
	case "cold":
			$sub_article=array("cold"=>"Ладно предјадење");
	break;
	case "hot":
			$sub_article=array("hot"=>"Топло предјадење");
	break;

	
	
}
$html="<tr id='sub_cat'>
		    <td>Подкатегорија:</td>
			<td><select id='subcategory'>";
					foreach ($sub_article as $key=>$article){ 
								$html.= "<option value='".$key."'>".$article."</option>";
					}
$html.=	"</select></td>
		</tr>";
echo $html;
?>