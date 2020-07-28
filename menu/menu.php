<?php
require('lib/menu_class.php');
?>	
<script>
   $("#alcoholic").click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'drinks',sub_page:'alcoholic'});
	
		
		
	});
	$("#not_alcoholic").click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'drinks',sub_page:'not_alcoholic'});
	
	
	});	
		
    $("#pizza_menu").click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'pizza',sub_page:'pizza_menu'});
	
		
		
	});
	$("#pasta").click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'pizza',sub_page:'pasta'});
     });		

     $("#dodatok_menu").click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'dodatok',sub_page:'dodatok_menu'});
	
		
		
	});
	$("#bread").click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'dodatok',sub_page:'bread'});		
	
		
		
	});
</script>
<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
	margin: auto;
	padding-top: 5px;
	padding-bottom: 5px;
}
</style>
    <?php
	   $page=$_POST['page'];
	   if(isset($_POST['sub_page'])){
		   $submenu_content=$_POST['sub_page'];
	   }
	   else{
		   $submenu_content="";
	   }
	   
	  
	   $have_submenu=0;
	   switch($page){
		   case "breakfast":
			    $header="Доручек";
			
                $types=array("breakfast");
			    $sub_header=array("breakfast"=>"Доручек");
	
				break;
			case "first":
				$header="Предјадење";
		
				$types=array("hot","cold");
				$sub_header=array("cold"=>"Ладно предјадење","hot"=>"Топло предјадење");

			break;
            case "soup":
				$header="Супи и потажо";
		
				$types=array("soup");
				$sub_header=array("soup"=>"Супи и потажи");

			break;
            case "fish":
				$header="Риба и морски плодови";
		
				$types=array("fish");
				$sub_header=array("fish"=>"Риба и морски плодови");

			break;	
            case "grill":
				$header="Скара";
		
				$types=array("grill");
				$sub_header=array("grill"=>"Скара");

			break;
            case "international":
				$header="Интернационал";
		
				$types=array("international");
				$sub_header=array("international"=>"Интернационал");

			break;		
            case "risoto":
				$header="Рижото";
		
				$types=array("risoto");
				$sub_header=array("risoto"=>"Рижото");

			break;			
		    case "drinks":
			    $header="Пијалоци";
				$id_1="not_alcoholic";
				$id_2="alcoholic";
				$header_id_1="Безалкохолни";
				$header_id_2="Алкохолни";
				$have_submenu=1;
				
			    if($submenu_content=='not_alcoholic'){
					$types=array("beverages_mineral", "beverages", "juice", "smoothes", "hot_drinks", "water");
					$sub_header=array("beverages_mineral"=>"Газирани пијалоци", "beverages"=>"Негазирани пијалоци", "smoothes"=>"Смути", "juice"=>"Цедени сокови", "water"=>'Вода', "hot_drinks"=>"Жешки пијалоци");
				}
				else{
					$types=array("aperativi", "whisky", 'beer');
					$sub_header=array("aperativi"=>"Аперативи","whisky"=>'Виски', 'beer'=>'Пиво');
				}
				break;
				case "pizza":
			    $header="Пици и тестенини";
				$id_1="pizza_menu";
				$id_2="pasta";
				$header_id_1="Пица";
				$header_id_2="Тестенини";
				$have_submenu=1;
				
			    if($submenu_content=='pizza_menu'){
					$types=array("pizza_menu");
					$sub_header=array("pizza_menu"=>"Пица");
				}
				else{
					$submenu_content='pizza_menu';
					$types=array("pasta");
					$sub_header=array("pasta"=>"Тестенини и сосови");
				}
	
				break;
				case "dodatok":
			    $header="Пици и тестенини";
				$id_1="bread";
				$id_2="dodatok_menu";
				$header_id_1="Леб додатоци";
				$header_id_2="Додаток";
				$have_submenu=1;
				
			    if($submenu_content=='dodatok_menu'){
					$types=array("dodatok_menu");
					$sub_header=array("dodatok_menu"=>"Додатоци");
				}
				else{
					$submenu_content='dodatok_menu';
					$types=array("bread");
					$sub_header=array("bread"=>"Леб додатоци");
				}
	
				break;
				case "apetisani":
			    $header="Апетисани";
			
                $types=array("apetisani");
			    $sub_header=array("apetisani"=>"Апетисани");
	
				break;
				
				case "deserts":
			    $header="Десерти";
			
                $types=array("deserts");
			    $sub_header=array("deserts"=>"Десерти");
	
				break;
				case "salads":
			    $header="Салати";
			
                $types=array("salads");
			    $sub_header=array("salads"=>"Салати");
	
				break;
				case "wine":
			    $header="Винска карта";
			
                $types=array("white","red","rose","sprakling_wine");
			    $sub_header=array("white"=>"Бело вино","red"=>"Црвено вино", "rose"=>"Розе вино", "sprakling_wine"=>"Пенливо вино");
	
				break;
		   
	   }
	 
	   
	?>
	<div class="page_header text-center content_header">
				<h1 style="color:#000000"><?php echo $header; ?></h1>    
			</div>
			<?php if($have_submenu==1){?>
			<div class="row">
				<div class="col-sm-6">
					<button type="button" class="btn btn-lg buttons" style="font-weight: bold" id="<?php echo $id_1; ?>"><?php echo $header_id_1; ?></button>
				</div>
				<div class="col-sm-6">
					<button type="button" class="btn btn-lg btn buttons" style="font-weight: bold" id="<?php echo $id_2; ?>"><?php echo $header_id_2; ?></button>
				</div>
			</div> 
			<?php } ?>
			
<br />
            <?php foreach($types as $type){ ?>
			
			<div class="row">
				<div class="col-sm-12">
					<div class="menu_content">
						<span><?php echo $sub_header[$type]; ?> </span>
					</div>	
				</div>
			</div>
			<?php
			    
			     $menu_contents=selectMenu($page,$submenu_content,$type);
				
				
				 foreach($menu_contents as $menu_content){
					
			?>
			<div class="row">
			      <div class="col-sm-2 pop" style="text-align:center">
				    <?php  if(isset($menu_content['image'])&& $menu_content['image']!=""){ ?>
				      <img id="myImg" src="<?php echo $menu_content['image'];  ?>"  width="80" height="50">
					<?php }?>
				  </div>
			      <div class="col-sm-10">
						<div class="row">
							<div class="col-sm-12 ">
								<div class="col-sm-9 menu_content1  menu_content_name">
									<span><?php echo $menu_content['name_of_product'];?></span>
								</div>
								<div class="col-sm-3 menu_content1  menu_content_price">
									<span><?php echo $menu_content['price'];?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-12 menu_content1  menu_content_desc">
									<span><?php echo showDetails($menu_content['description']);?></span>
								</div>
							</div>
						</div>
                   </div>					
            </div>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
	</div>
  </div>
</div>
	  
			
			<?php 
				 }
			?>
            <br/>
            <?php			
			} ?>
			<script>
			$(function() {
				$('.pop').on('click', function() {
					$('.imagepreview').attr('src', $(this).find('img').attr('src'));
					$('#imagemodal').modal('show');  
                });					
            });
			</script>
			