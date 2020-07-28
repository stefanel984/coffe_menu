<?php
session_start();
if(empty($_SESSION['login_user'])){
	header('Location:index.php');
}
if(!isset($_SESSION['session_time'])){
      $_SESSION['session_time']=time();
	  
}else
{
   $totaltime=time()-$_SESSION['session_time'];
   if($totaltime>15*60){
	 $_SESSION['login_user']=''; 
	 header("Location:index.php");
	 session_unset();
	 session_destroy();
   }else
   {
	 $_SESSION['session_time']=time();   
   }
   
}


?>
<script>
   function changeContent(param){
	    $( ".button" ).each(function( ) {
			var id=$(this).attr("id");
			$("#"+id).removeClass("active_button");
		})

	   $("#type").val(param);
	   $('#show_article').load('show_article.php',{type:param});
	   $("#"+param).addClass("active_button");
   }
   
   
</script>
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Систем за внес на податоци</title>
<link rel="stylesheet" href="css/css.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.shake.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/smoothness/jquery-ui.css">
</head>
<body>
<div class="content">
 <div id="menu_left">
       <div class="button active_button" id="breakfast" onClick="changeContent('breakfast')">Доручек</div>
	   <div class="button" id="first" onClick="changeContent('first')">Предјадење</div>
	   <div class="button" id="soup" onClick="changeContent('soup')">Супи потажи</div>
	   <div class="button" id="fish" onClick="changeContent('fish')">Риби и морски плодови</div>
	   <div class="button" id="salads" onClick="changeContent('salads')">Салати</div>
	   <div class="button" id="grill" onClick="changeContent('grill')">Скара</div>
	   <div class="button" id="international" onClick="changeContent('international')">Интернационално по нарачка</div>
	   <div class="button" id="risoto" onClick="changeContent('risoto')">Рижото</div>
	   <div class="button" id="pizza" onClick="changeContent('pizza')">Пици и паста</div>
	   <div class="button" id="apetisani" onClick="changeContent('apetisani')">Апетисани</div>
	    <div class="button" id="apetisani" onClick="changeContent('dodatok')">Додатоци</div>
	   <div class="button" id="deserts" onClick="changeContent('deserts')">Десерти</div>
	   <div class="button" id="drinks" onClick="changeContent('drinks')">Пијалоци</div>
	   <div class="button" id="wine" onClick="changeContent('wine')">Винска карта</div>
 </div>
 <div id="menu_info">
       <div class="new_article">
	        <div class="new_button" id="article">Додај нов артикл</div>
	   </div>
	   <div id="show_article">
	   </div>
 </div>
 <div id="menu_right">
 <a href="logout.php">Одјави се !</a>
  <input type="hidden" id="type" value="breakfast">
 </div>
</div>
<div id="add_article" title="Артикл">
	
</div>
<div id="add_image" title="Додај слика">
	
</div>

</body>
</html>
<style>
select, input {
  width: 280px;
}

</style>
<script>
     $(document).ready(function() {
	    $('#show_article').load('show_article.php',{type:'breakfast'});

	   
   });

    
    function changeList(param) { 
		$('#newArticle #sub_cat').closest("tr").remove();
					$.post("lib/sub_category.php",
				  {
					param:param,
									
					
				  },
				  function(data){
					  
						   $('#newArticle #cat').after(data);					  
					  
					  
				  });
		
	};
    function addArticle(){
		var id=$("#id_article").val();
		var product= $("#name").val();
		var subcategory=$("#subcategory option:selected").val();
		var category=$("#category option:selected").val();
		var price= $("#price").val();
		var desc= $("#desc").val();
		var type=$("#type").val();
		if(subcategory==undefined){
			subcategory=category;
			
		}
		if(product==""){
			$("#name").focus().addClass("hint");
			alert("Пополнете го празното поле");
		}
		else if(price==""){
			$("#price").focus().addClass("hint");
			alert("Пополнете го празното поле");
		}
		else if(desc==""){
			$("#desc").focus().addClass("hint");
			alert("Пополнете го празното поле");
		}
		else{
			$("#name").removeClass("hint");
			$("#price").removeClass("hint");
			$("#desc").removeClass("hint");
			$.post("lib/make_input.php",
				  { 
				    id:id,
					product:product,
					category:category,
					subcategory:subcategory,
					price:price,
					desc:desc,
					type:type
					
					
				  },
				  function(data){
					  if(data==1){
						   dialog_new.dialog( "close" );
						   $("#name").val("");
						   $("#price").val("");
						   $("#desc").val("");
						   $('#show_article').load('show_article.php',{type:type});
						   
						   

						  
					  }
					  else{
						  alert("Грешка при внесување");
					  }
					  
				  });
		}
	}
    dialog_new= $( "#add_article" )
      .dialog({
	  autoOpen: false,
      height: 500,
      width: 700,
	  position: { my: 'top', at: 'top+100' },
      modal: true,
	  buttons:{
		"Зачувај": addArticle,
		"Затвори": function() {
          dialog_new.dialog( "close" );
        }
      }
  });
    dialog_image= $( "#add_image" )
      .dialog({
	  autoOpen: false,
      height: 500,
      width: 700,
	  position: { my: 'top', at: 'top+100' },
      modal: true
  });
  
	$("#article").click(function() {   	
	  article=$("#type").val();
	  dialog_new.load( "new_article.php",{type:article},function(){
		  dialog_new.dialog( "open" );
	  } );
	  
    });
	
	

	
  
	
	
</script>