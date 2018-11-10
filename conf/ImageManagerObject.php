<?php


class ImageManagerObject{
	
	private $dirImages = "../public/images/"; 
	private $msgError = "mensaje de error no inicializado";
	
	
	public function loadFile($postFileData){
		$uploaddir = $this->dirImages;
		$uploadfile = $uploaddir . basename($postFileData['userfile']['name']);
		
		$result = move_uploaded_file($postFileData['userfile']['tmp_name'], $uploadfile);
		
		return $result;
		/*
		if (move_uploaded_file($postFileData['userfile']['tmp_name'], $uploadfile)) {
			$this->msgError = "File successfully uploaded.\n";
		} else {
			$this->msgError = "Error loading the file!\n";
		}	
		alertBox($this->msgError);
		*/
	}
	
	public function deleteAllImages(){
		
		$files = glob($this->dirImages . '/*'); // obtiene todos los archivos
		foreach($files as $file){
			if(is_file($file)) // si se trata de un archivo
				unlink($file); // lo elimina
		}
		
	}
	
	
	private function alertBox($msg) {
		//echo "<script type='text/javascript'>alert('" . $msg . "');</script>";
		
		echo "mensaje = " . $msg;
	}
	
	
	
}


?>