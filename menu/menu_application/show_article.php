<?php
$type=$_POST['type'];
include("connection.php");
require('lib/add_class.php');
$cat=array("breakfast"=>"Доручек","cold"=>"Ладно предјадење","hot"=>"Топло предјадење","soup"=>"Супи и потажи","fish"=>"Риба и морски плодови","grill"=>"Скара","international"=>"Интернационал","risoto"=>"Рижото","beverages_mineral"=>"Газирани пијалоци", "beverages"=>"Негазирани пијалоци", "smoothes"=>"Смути", "juice"=>"Цедени сокови", "water"=>'Вода', "hot_drinks"=>"Жешки пијалоци","aperativi"=>"Аперативи","whisky"=>'Виски', 'beer'=>'Пиво',"pizza_menu"=>"Пица","pasta"=>"Тестенини и сосови", "bread"=>"Леб додаток","dodatok_menu"=>"Додатоци", "apetisani"=>"Апетисани","deserts"=>"Десерти","salads"=>"Салати","white"=>"Бело вино","red"=>"Црвено вино", "rose"=>"Розе вино", "sprakling_wine"=>"Пенливо вино" );

?>

<!doctype html>
<html lang="en">
	<table class="table_article">
	    <tr> 
		   <th width="20%">Категорија</th>
		   <th width="20%">Продукт</th>
		   <th width="30%">Состав</th>
		   <th width="10%">Цена</th>
		   <th width="10%">Измени</th>
		   <th width="10%">Бриши/Врати</th>
		</tr>
		<?php 
		$articles=showArticle($type);
		foreach($articles as $article){
		?>
		<tr>
		   <td width="20%"><?php echo $cat[$article['sub_kategorija']]; ?></td>
		   <td width="20%"><span class="pic"  id="<?php echo $article['id'];  ?>" style="cursor:pointer"><?php echo $article['name_of_product']; ?></span></td>
		   <td width="30%"><?php echo $article['description']; ?></td>
		   <td width="10%"><?php echo $article['price']; ?></td>
		   <td width="10%"><span class="edit"  id="edit_<?php echo $article['id'];  ?>" style="cursor:pointer"><img src="images/edit.png" alt="Избриши артикл" title="Едитирај артикл" height="30" width="30"><span></td>
		    <?php
		       if($article['delete_article']==0){
		   ?>
				<td width="10%"><span class="delete" id="delete_<?php echo $article['id'];  ?>" style="cursor:pointer"><img src="images/trash.png" alt="Избриши артикл" title="Избриши артикл" height="30" width="30"><span></td>
		   <?php
			   }
			   else{
           ?>
		        <td width="10%"><span class="restore" id="restore_<?php echo $article['id'];  ?>" style="cursor:pointer"><img src="images/restore.png" alt="Избриши артикл" title="Врати артикл" height="30" width="30"><span></td>
		   <?php
			   }
		   ?>
		</tr>
		
			
		<?php	
		}
		?>
		
	</table>


</html>
<script>
	$(".delete").click(function() { 
       var category=$("#type").val();
	   var id=$(this).attr("id");

			$.post("lib/make_operation.php",
				  {
					op:"delete",
					id:id					
				  },
				  function(data){
					  if(data==1){
						  $('#show_article').load('show_article.php',{type:category});
					  }
					  else{
						  alert("Грешка при бришење артикл");
					  }
				  });

	   
	});
	$(".restore").click(function() { 
       var category=$("#type").val();
	   var id=$(this).attr("id");

			$.post("lib/make_operation.php",
				  {
					op:"restore",
					id:id					
				  },
				  function(data){
					  if(data==1){
						  $('#show_article').load('show_article.php',{type:category});
					  }
					  else{
						  alert("Грешка при враќање артикл");
					  }
				  });

	   
	});
	$(".edit").click(function() { 
       var category=$("#type").val();
	   var id=$(this).attr("id");
	   
	  dialog_new.load( "new_article.php",{type:category,id:id},function(){
		  dialog_new.dialog( "open" );
	  } );
	   
	});
	$(".pic").click(function() { 
	    var id=$(this).attr("id");
		dialog_image.load( "new_image.php",{id:id},function(){
		  dialog_image.dialog( "open" );
	    } );
	});
	

	
</script>