<?php


if(isset($_POST['operacion'])){
	
	require 'ConfigurationFileObject.php';	
	$confFileObject = new ConfigurationFileObject();
	
	require 'emailAddressReader.php';
	$confFileObject->set_emailtoaddress($emailtoaddress);
	
	require 'ImageManagerObject.php';
	$imageManagerObject = new ImageManagerObject();
	
	
	
	$var = $_POST['operacion'];
	switch($var){
		case 'loadconf':
			$confFileObject->loadFile($_FILES);
			break;
		case 'downloadconf':
			$confFileObject->sendConfigurationFile();				
			break;
		case 'reset':
			$confFileObject->reset();		
		break;
			
		case 'loadimage':
			$imageManagerObject->loadFile($_FILES);		
			break;
		case 'deleteallimages':
			$imageManagerObject->deleteAllImages();			
		break;
			default:;
	}
	
}


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Serie - Configuration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../public/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../public/assets/css/noscript.css" /></noscript>
</head>
<body style="height: 268px; ">

	<div class="content">
	<div class="split style1">
								<section>
	<div class="fields">
		<div class="field half">	
	
	<form enctype="multipart/form-data" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="loadconf"><input name="userfile" type="file" /><input type="submit" value="Cargar archivo de configuracion">
	</form>
	
	</div>
	<div class="field half">
	
	<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="downloadconf"><input type="submit" value="Descargar archivo de configuracion">
	</form>
	
	</div>
		<div class="field half">
	
	<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="reset"><input type="submit" value="RESET - esto borrará la configuracion actual">
	</form>
	
	</div>
	
		<div>
			<form enctype="multipart/form-data" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="loadimage"><input name="userfile" type="file" /><input type="submit" value="Cargar Imagen">
	</form>
	</div>
		<div>	<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="deleteallimages"><input type="submit" value="Borrar todas las imagenes">
	</form>
	</div>
</div>

</section>
</div>	
	</div>	
	

	
	
</body>
</html>


