<?php
	
	$target = "upload/temp.jpg";
	
	if(move_uploaded_file($_FILES['dp']['tmp_name'], $target))
	{
		echo "File Uploaded";
		echo "<img src='upload/temp.jpg' />";
	}else{
		echo "Error Uploading File";
	}
	
?>