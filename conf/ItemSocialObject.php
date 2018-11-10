<?php

class ItemSocialObject{
	
	private $href_social;
	private $icon_social;
	private $name_social;
	
	
	public function set($href_social, $icon_social, $name_social){
		
		$this->href_social = $href_social;
		$this->icon_social = $icon_social;
		$this->name_social = $name_social;		
	}
	
	public function printItemSocial(){
	
		$texto = "<li><a href=\"" . $this->href_social . "\" class=\"" . 
				$this->icon_social . "\"><span class=\"label\">" . 
				$this->name_social . "></span></a></li>";
	
		return $texto;
	}
	
	
}

?>
