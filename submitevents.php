<?php
		require_once("DB.php");

		if(isset($_POST['submitform']))
		{
			$dir="upload/";
			$image=$_FILES['uploadfile']['name'];
			$temp_name=$_FILES['uploadfile']['tmp_name'];
			$fname = $_POST['fname'];
			$content = $_POST['content'];

			if($image!="")
			{
				if(file_exists($dir.$image))
				{
					$image= time().'_'.$image;
				}

				$fdir= $dir.$image;
				move_uploaded_file($temp_name, $fdir);
			}

				$query="insert IGNORE into `events` (`id`,`file`,`fname`,`content`) values ('','$image','$fname','$content')";
				mysqli_query($con,$query) or die(mysqli_error($con));

				echo "File Uploaded Suucessfully ";

				header(location: 'index.php');

		}

?>
