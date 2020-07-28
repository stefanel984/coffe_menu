<?php
include("connection.php");
require('lib/add_class.php');
$id=$_POST["id"];
$article=takeArticle($id);
$link_image="../".$article['image'];



?>
<html>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<input type="hidden" id="id_article" name="id_article" value="<?php echo $id ?>"/>
<input type="file" name="slika" id="slika" />
<button id="upload_image">Upload</button>

</form>
<img src="<?php echo $link_image;?>" >
</html>

<script>
$("#upload_image").click(function() {
	    var contents = $('#uploadimage')[0];
		var data = new FormData(contents);
		var url="lib/image_input.php";
		$.ajax({
			type: "POST",
			url: url,
			data:  data,
			enctype: 'multipart/form-data',
			processData: false,  // tell jQuery not to process the data
			contentType: false,   // tell jQuery not to set contentType
			dataType: "json",
			success: function(response)
			{
				alert("ok");
			}
		});
	});
</script>