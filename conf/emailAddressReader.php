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
$objPHPExcel->setActiveSheetIndexByName('emailconf');

/******************************************************/
// MENU

$emailtoaddress = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();




?>

