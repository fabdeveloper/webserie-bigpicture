<?php

class ContactObject{
	
	protected $name;
	protected $email;
	//protected $phone;	
	protected $message;
	protected $destinoEmail;
	protected $subject = "This is subject";
	

	
	
	public function set($postData){
		$this->name = $postData['name'];
		$this->email = $postData['email'];
		//$this->phone = $postData['phone'];		
		$this->subject = $postData['subject'];		
		$this->message = $postData['message'];
		$this->destinoEmail = $postData['destinoEmail'];		
	}
	
	public function sendEmail(){
		$to = $this->destinoEmail;
		
		$mensaje = $this->prepareMsg();
			
		$header = "From:" . $this->email . " \r\n";
		//$header .= "Cc:afgh@somedomain.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";
			
		$retval = mail($to,$this->subject,$mensaje,$header);
		return $retval;
	}
	
	public function prepareMsg(){
		$datos = "-----------------------------------\n" . 
					"nombre: " . $this->name . 
					//", telefono: " . $this->phone . 
					", email: " . $this->email;
		
		$nuevoMensaje = $this->message . $datos;
		return $nuevoMensaje;
	}
	
	
	
	public function set_name($name) {
		$this->name = $name;
	}
	
	public function get_name() {
		return $this->name;
	}
	
	public function set_email($email) {
		$this->email = $email;
	}
	
	public function get_email() {
		return $this->email;
	}
	
	public function set_message($message) {
		$this->message = $message;
	}
	
	public function get_message() {
		return $this->message;
	}
	
	public function set_destinoEmail($destinoEmail) {
		$this->destinoEmail = $destinoEmail;
	}
	
	public function get_destinoEmail() {
		return $this->destinoEmail;
	}
	
	
	
	
	
	
	
	
	
}


?>
