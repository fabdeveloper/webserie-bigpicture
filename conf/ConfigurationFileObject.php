<?php

class ConfigurationFileObject{
	
	private $emailtoaddress = "webseriecentral@gmail.com";
	private $msgError = "mensaje de error no inicializado";
	
	public function loadFile($postFileData){
		$uploaddir = '';
		$uploadfile = $uploaddir . basename($postFileData['userfile']['name']);
		
		if (move_uploaded_file($postFileData['userfile']['tmp_name'], $uploadfile)) {
			$this->msgError = "File successfully uploaded.\n";
		} else {
			$this->msgError = "Error loading file!\n";
		}	
		//alertBox($this->msgError);	
		echo $this->msgError;
		
	}
	
	public function sendConfigurationFile(){
		
		//Recipiente
		$to = $this->emailtoaddress; //echo $this->emailtoaddress;
		
		//remitente del correo
		$from = 'webserie@gmail.com';
		$fromName = 'webserie';
		
		//Asunto del email
		$subject = 'Web Serie - Archivo de configuracion';
		
		//Ruta del archivo adjunto
		$file = "confweb.xls";
		
		//Contenido del Email
		$htmlContent = '<h1>Archivo de configuracion</h1>
    <p>Adjunto en este correo encontrarás el archivo de configuracion.</p>';
		
		//Encabezado para información del remitente
		$headers = "De: $fromName"." <".$from.">";
		
		//Limite Email
		$semi_rand = md5(time());
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		
		//Encabezados para archivo adjunto
		$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
		
		//límite multiparte
		$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
				"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
		
		//preparación de archivo
		if(!empty($file) > 0){
			if(is_file($file)){
				$message .= "--{$mime_boundary}\n";
				$fp =    @fopen($file,"rb");
				$data =  @fread($fp,filesize($file));
		
				@fclose($fp);
				$data = chunk_split(base64_encode($data));
				$message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
						"Content-Description: ".basename($file)."\n" .
						"Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
						"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
			}
		}
		$message .= "--{$mime_boundary}--";
		$returnpath = "-f" . $from;
		
		//Enviar EMail
		$mail = @mail($to, $subject, $message, $headers, $returnpath);
		
		//Estado de envío de correo electrónico
		$this->msgError = $mail?"Correo enviado.":"El envío de correo falló.";
		echo $this->msgError;
		//alertBox($this->msgError);		
	}
	
	public function reset(){
		
		$ficheroOrigen = 'reset/confweb.xls';
		$ficheroDestino = 'confweb.xls'; // esta es la carpeta dentro del mismo dominio
		//me gustaria poder escribir algo como: /var/www/html/carpetadestino/ejemplo.txt
		
		if (!copy($ficheroOrigen, $ficheroDestino)) {
			echo "Error al copiar $fichero...\n";
		}
		
	}
	
	
	public function alertBox($msg) {
		//echo "<script type='text/javascript'>alert('$msg');</script>";
		echo $msg;
	}
	
	
	public function set_emailtoaddress($emailtoaddress) {
		$this->emailtoaddress = $emailtoaddress;
	}
	
	public function get_emailtoaddress() {
		return $this->emailtoaddress;
	}
	
	public function set_msgError($msgError) {
		$this->msgError = $msgError;
	}
	
	public function get_msgError() {
		return $this->msgError;
	}
	
	
	
}


?>