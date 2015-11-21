<?php




function getFileExtension($mimeType)
{
		
	switch ($mimeType)
	{
		case "image/png":
			return ".png";
		case "image/gif":
			return ".gif";
		case "image/jpeg":
			return ".jpg";
		case "image/pjpeg":
			return ".jpg";
		case "image/bmp": 
			return ".bmp";
		case "image/x-windows-bmp":
			return ".bmp";
		case "image/tiff":
			return ".tiff"; 
		case "image/x-tiff":
			return ".tiff";
		default: 
			return ".unknown";
		
	}
	
}

function isUploadAllowed($mimeType)
{
	
	switch ($mimeType)
	{
		case "image/png":
		case "image/gif":
		case "image/jpeg":
		case "image/pjpeg":
		case "image/bmp": 
		case "image/x-windows-bmp":
		case "image/tiff": 
		case "image/x-tiff":
			return true;
		default: 
			return false;
		
	}
	
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_FILES["imageFile"]))
	{
		//ccontinue processing	
		if($_FILES["imageFile"]["error"] == UPLOAD_ERR_OK)
		{
			//continue processing
			$finfo = new finfo(FILEINFO_MIME_TYPE);
			$fileType = $finfo->file($_FILES['imageFile']['tmp_name']);
			
			if(isUploadAllowed($fileType))
			{
				//continue processing the file
				//$filename = bin2hex(openssl_random_pseudo_bytes(10));
				
				$filename = md5_file($_FILES["imageFile"]["tmp_name"]);
				
				$filename .= getFileExtension($fileType);
				
				echo $filename;
				
				
				
			}
			else {
				echo "The file you are trying to upload is not allowed.";
			}
				
		}
		else
		{
			echo "Some error occured in uploading the file.  I will fix later.";
		}

	}
	else {
		echo "No file was detected.";
	}
}
else {
	

?>

<form method="POST" action="upload.php" enctype="multipart/form-data">
	
	<input type="file" name="imageFile">
	
	
	<button type="submit">Send Cats</button>
	
</form>
<?php 
}