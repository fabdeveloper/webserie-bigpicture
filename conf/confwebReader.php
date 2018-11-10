<?php

// cargar configuracion excel
//echo "cargando IOFactory.php...";
include_once('../Excel/Classes/PHPExcel/IOFactory.php');
//echo "cargado IOFactory.php.";


$inputFileName = '../conf/confweb.xls';

$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);

//$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->setActiveSheetIndexByName('index');

/******************************************************/
// MENU

$headTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$TituloMenu = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$TextoMenu1 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$TextoMenu2 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$TextoMenu3 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$TextoMenu4 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$TextoMenu5 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();

/**********************************************************/
// INTRO

$TituloIntro = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$DescripcionIntro = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$TextoBotonIntro = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();

/**********************************************************/
// Section ONE

$TituloOne = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$DescripcionOne = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$TextoBotonOne = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();

/**********************************************************/
// Section TWO

$TituloTwo = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$DescripcionTwo = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
$TextoBotonTwo = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();

/****************************************************************/
// GALLERY

$TituloGaleria = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
$DescripcionGaleria = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();

/****************************************************************/
// ITEMS GALLERY

$numItemsGallery = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();

$linkItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
$imageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
$nombreItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();

$linkItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
$imageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
$nombreItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();

$linkItemGallery3= $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
$imageItemGallery3= $objPHPExcel->getActiveSheet()->getCell('B28')->getValue();
$nombreItemGallery3= $objPHPExcel->getActiveSheet()->getCell('B29')->getValue();  

$linkItemGallery4= $objPHPExcel->getActiveSheet()->getCell('B30')->getValue();
$imageItemGallery4= $objPHPExcel->getActiveSheet()->getCell('B31')->getValue();
$nombreItemGallery4= $objPHPExcel->getActiveSheet()->getCell('B32')->getValue();

$linkItemGallery5= $objPHPExcel->getActiveSheet()->getCell('B33')->getValue();
$imageItemGallery5= $objPHPExcel->getActiveSheet()->getCell('B34')->getValue();
$nombreItemGallery5= $objPHPExcel->getActiveSheet()->getCell('B35')->getValue();

$linkItemGallery6= $objPHPExcel->getActiveSheet()->getCell('B36')->getValue();
$imageItemGallery6= $objPHPExcel->getActiveSheet()->getCell('B37')->getValue();
$nombreItemGallery6= $objPHPExcel->getActiveSheet()->getCell('B38')->getValue();


require '../conf/ItemGalleryObject.php';

$itemGalleryObject1 = new ItemGalleryObject();
$itemGalleryObject2 = new ItemGalleryObject();
$itemGalleryObject3 = new ItemGalleryObject();
$itemGalleryObject4 = new ItemGalleryObject();
$itemGalleryObject5 = new ItemGalleryObject();
$itemGalleryObject6 = new ItemGalleryObject();

$itemGalleryObject1->set($linkItemGallery1, $imageItemGallery1, $nombreItemGallery1);
$itemGalleryObject2->set($linkItemGallery2, $imageItemGallery2, $nombreItemGallery2);
$itemGalleryObject3->set($linkItemGallery3, $imageItemGallery3, $nombreItemGallery3);
$itemGalleryObject4->set($linkItemGallery4, $imageItemGallery4, $nombreItemGallery4);
$itemGalleryObject5->set($linkItemGallery5, $imageItemGallery5, $nombreItemGallery5);
$itemGalleryObject6->set($linkItemGallery6, $imageItemGallery6, $nombreItemGallery6);

$arrayItemsGallery = array($itemGalleryObject1, $itemGalleryObject2, $itemGalleryObject3, $itemGalleryObject4, $itemGalleryObject5, $itemGalleryObject6);


/***********************************************************/
// CONTACT

$TituloContacto = $objPHPExcel->getActiveSheet()->getCell('B39')->getValue();
$DescripcionContacto = $objPHPExcel->getActiveSheet()->getCell('B40')->getValue();

$objPHPExcel->setActiveSheetIndexByName('emailconf');
$emailto_formContact = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$objPHPExcel->setActiveSheetIndexByName('index');

/***********************************************************/
// SOCIAL

$numItemsSocial= $objPHPExcel->getActiveSheet()->getCell('B41')->getValue();

$linkItemSocial1 = $objPHPExcel->getActiveSheet()->getCell('B42')->getValue();
$iconItemSocial1 = $objPHPExcel->getActiveSheet()->getCell('B43')->getValue();
$TextoItemSocial1 = $objPHPExcel->getActiveSheet()->getCell('B44')->getValue();

$linkItemSocial2 = $objPHPExcel->getActiveSheet()->getCell('B45')->getValue();
$iconItemSocial2 = $objPHPExcel->getActiveSheet()->getCell('B46')->getValue();
$TextoItemSocial2 = $objPHPExcel->getActiveSheet()->getCell('B47')->getValue();

$linkItemSocial3 = $objPHPExcel->getActiveSheet()->getCell('B48')->getValue();
$iconItemSocial3 = $objPHPExcel->getActiveSheet()->getCell('B49')->getValue();
$TextoItemSocial3 = $objPHPExcel->getActiveSheet()->getCell('B50')->getValue();

$linkItemSocial4 = $objPHPExcel->getActiveSheet()->getCell('B51')->getValue();
$iconItemSocial4 = $objPHPExcel->getActiveSheet()->getCell('B52')->getValue();
$TextoItemSocial4 = $objPHPExcel->getActiveSheet()->getCell('B53')->getValue();

$linkItemSocial5 = $objPHPExcel->getActiveSheet()->getCell('B54')->getValue();
$iconItemSocial5 = $objPHPExcel->getActiveSheet()->getCell('B55')->getValue();
$TextoItemSocial5 = $objPHPExcel->getActiveSheet()->getCell('B56')->getValue();

$linkItemSocial6 = $objPHPExcel->getActiveSheet()->getCell('B57')->getValue();
$iconItemSocial6 = $objPHPExcel->getActiveSheet()->getCell('B58')->getValue();
$TextoItemSocial6 = $objPHPExcel->getActiveSheet()->getCell('B59')->getValue();


require '../conf/ItemSocialObject.php';

$itemSocialObject1 = new ItemSocialObject();
$itemSocialObject2 = new ItemSocialObject();
$itemSocialObject3 = new ItemSocialObject();
$itemSocialObject4 = new ItemSocialObject();
$itemSocialObject5 = new ItemSocialObject();
$itemSocialObject6 = new ItemSocialObject();

$itemSocialObject1->set($linkItemSocial1, $iconItemSocial1, $TextoItemSocial1);
$itemSocialObject2->set($linkItemSocial2, $iconItemSocial2, $TextoItemSocial2);
$itemSocialObject3->set($linkItemSocial3, $iconItemSocial3, $TextoItemSocial3);
$itemSocialObject4->set($linkItemSocial4, $iconItemSocial4, $TextoItemSocial4);
$itemSocialObject5->set($linkItemSocial5, $iconItemSocial5, $TextoItemSocial5);
$itemSocialObject6->set($linkItemSocial6, $iconItemSocial6, $TextoItemSocial6);

$arrayItemsSocial = array($itemSocialObject1, $itemSocialObject2, $itemSocialObject3, $itemSocialObject4, $itemSocialObject5, $itemSocialObject6);


/***********************************************************/
// FOOTER

$nombreFooter = $objPHPExcel->getActiveSheet()->getCell('B60')->getValue();


/**********************************************************/

