<?php
include("connection.php");
require('lib/add_class.php');
$type=$_POST['type'];
$name="";
$price="";
$description="";
$category="";
$sub_category="";
$id_article=0;

if(isset($_POST["id"])){
$id=explode("_",$_POST["id"]);
$article_edit=takeArticle($id[1]);	
$name=$article_edit['name_of_product'];
$price=$article_edit['price'];
$description=$article_edit['description'];
$category=$article_edit['kategorija'];
$sub_category=$article_edit['sub_kategorija'];
$id_article=$article_edit['id'];
}

switch($type){
      case "breakfast":
			 $cat_array=array("breakfast"=>"Доручек");
		break;
	 case "first":
		 $cat_array=array("first"=>"Предјадење");
		 $sub_cat=array("cold"=>"Ладно предјадење","hot"=>"Топло предјадење");
		 break;	
     case "soup":
		 $cat_array=array("soup"=>"Супи и потажи");
		 break;
      case "fish":
		 $cat_array=array("fish"=>"Риба и морски плодови");
		 break;	
       case "salads":
		 $cat_array=array("salads"=>"Салати");		 
		 break;	
	    case "grill":
		 $cat_array=array("grill"=>"Скара");
		 break;	
       case "international":
		 $cat_array=array("international"=>"Интернационал");
		 break;	
        case "risoto":
		  $cat_array=array("risoto"=>"Рижото");
		 break;
        case "pizza":
		  $cat_array=array("pizza_menu"=>"Пици и паста");
		  $sub_cat=array("pizza_menu"=>"Пица","pasta"=>"Тестенини и сосови");
		 break;	
		 case "dodatok":
		  $cat_array=array("dodatok_menu"=>"Додатоци");
		  $sub_cat=array("bread"=>"Леб додаток","dodatok_menu"=>"Додатоци");
		 break;	 
        case "apetisani":
		  $cat_array=array("apetisani"=>"Апетисани");
		 break;
         case "deserts":
		  $cat_array=array("deserts"=>"Десерти");
		 break;	
         case "drinks":
		  $cat_array=array("not_alcoholic"=>"Безалкохолни","alcoholic"=>"Алкохолни");
		  $sub_cat=array("beverages_mineral"=>"Газирани пијалоци", "beverages"=>"Негазирани пијалоци", "smoothes"=>"Смути", "juice"=>"Цедени сокови", "water"=>'Вода', "hot_drinks"=>"Жешки пијалоци");
		  if($category=="alcoholic"){
			 $sub_cat= array("aperativi"=>"Аперативи","whisky"=>'Виски', 'beer'=>'Пиво');
			  
		  }
		 break;	
         case "wine":
		  $cat_array=array("wine"=>"Вино");
		  $sub_cat=array("white"=>"Бело вино","red"=>"Црвено вино", "rose"=>"Розе вино", "sprakling_wine"=>"Пенливо вино");
		 break;		 
}

   
?>
<!doctype html>
<html lang="en">
    <input type="hidden" name="id_article" id="id_article" value="<?php echo $id_article; ?>">
	<table id="newArticle">
	    <tr> 
		   <td>Продукт:</td>
		   <td><input type="text" name="name" id="name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr id="cat">
		    <td>Kатегорија:</td>
			<?php if($category==""){ ?>
			<td><select id="category" onchange="changeList(value);">
			        <?php  foreach ($cat_array as $key=>$cat){ 					            
									echo '<option value="'.$key.'">'.$cat.'</option>';
																
					      }
			
					?>
			</select></td>
			<?php
			}
			else{
				?>
				<td><?php echo $cat_array[$category]; ?></td>
			<?php }?>
		</tr>
		<?php  if(isset($sub_cat)){ ?>
		<tr id="sub_cat">
		    <td>Подкатегорија:</td>
			<?php if($sub_category==""){ ?>
			<td><select id="subcategory">
					 <?php  
					           foreach ($sub_cat as $key=>$cat){ 
							   
									echo '<option value="'.$key.'">'.$cat.'</option>';
							   }
								
					?>
			</select></td>
			<?php
			}
			else{
				?>
				<td><?php echo $sub_cat[$sub_category]; ?></td>
			<?php }?>
		</tr>
		<?php }?>
		
		<tr> 
		   <td>Цена:</td>
		   <td><input type="number" name="price" id="price" value="<?php echo $price; ?>"></td>
		</tr>
		<tr>
		    <td>Забелешка:</td>
			<td><textarea rows="4" cols="50" id="desc"><?php echo $description; ?></textarea></td>
		</tr>
	</table>


</html>