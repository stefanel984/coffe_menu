<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.shake.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/smoothness/jquery-ui.css">
<link rel="stylesheet" href="css/css.css">
<title>Valentino</title>
</head>
<script>
$(document).ready(function() {
	$('#menu_show').load('menu.php',{page:'drinks',sub_page:'not_alcoholic'});
	$("#drinks").click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'drinks',sub_page:'not_alcoholic'});
		
		
	});
	$('#pizza').click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'pizza',sub_page:'pizza_menu'});

		
		
	});
	$('#dodatok').click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'dodatok',sub_page:'bread'});

		
		
	});
	$("#breakfast").click(function(){
		$('#menu_show').load('menu.php',{page:'breakfast'});

		
		
	});
	$("#first").click(function(){
		$('#menu_show').load('menu.php',{page:'first'});

		
		
	});
	$("#soup").click(function(){
		$('#menu_show').load('menu.php',{page:'soup'});

		
		
	});
	$("#fish").click(function(){
		$('#menu_show').load('menu.php',{page:'fish'});

		
		
	});
	$("#grill").click(function(){
		$('#menu_show').load('menu.php',{page:'grill'});

		
		
	});
	$("#international").click(function(){
		$('#menu_show').load('menu.php',{page:'international'});

		
		
	});
	$("#risoto").click(function(){
		$('#menu_show').load('menu.php',{page:'risoto'});

		
		
	});
	$("#deserts").click(function(){
		$('#menu_show').load('menu.php',{page:'deserts'});
		
		
	});
	
	$("#apetisani").click(function(){
		$('#menu_show').load('menu.php',{page:'apetisani'});
		
		
	});
	$("#wine").click(function(){
		$('#menu_show').load('menu.php',{page:'wine'});
		
		
	});
	$("#salads").click(function(){
		$('#menu_show').empty();
		$('#menu_show').load('menu.php',{page:'salads'});
	
		
		
	});
	
});	
</script>

<body class="body">
<div class="">
	<div class="header">
    	<h1> Валентино Ресторант </h1>
    </div>
</div>

<br />

<div class="container ">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="page_header text-center content_header">
				<h1 style="color:#000000">Мени</h1>      
			</div>
			<ul class="list-group menu_shadow">
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="breakfast">Доручек</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="first">Предјадење</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="soup">Супи потажи</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="fish">Риби и морски плодови</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="salads">Салати</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="grill">Скара</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="international">Интернационално по нарачка</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="risoto">Рижото</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="pizza">Пици и паста</li>  
                <li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="dodatok">Додатоци</li>				
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="apetisani">Апетисани</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="deserts">Десерти</li>  
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="drinks">Пијалоци</li>
				<li class="list-group-item" style="background-color: rgba(255, 255, 255, 0.8);" id="wine">Винска карта</li>
			</ul>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-9" id="menu_show">

		</div>	
	</div>
</div>
</body>
</html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>