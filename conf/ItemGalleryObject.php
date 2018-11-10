<?php

class ItemGalleryObject{
	
	private $linkItemGallery;
	private $imageItemGallery;
	private $nombreItemGallery;
	
	
	public function set($linkItemGallery, $imageItemGallery, $nombreItemGallery	){
		$this->linkItemGallery = $linkItemGallery;
		$this->imageItemGallery = $imageItemGallery;
		$this->nombreItemGallery = $nombreItemGallery;		
	}
	
	public function printItemGallery(){
		$texto = "<article class=\"from-left\"><a href=\"" . $this->linkItemGallery . 
					"\" class=\"image fit\"><img src=\"" . $this->imageItemGallery . 
					"\" title=\"" . $this->nombreItemGallery . "\" alt=\"\" /></a></article>";	
		
		return $texto;			
	}
	
}

?>
