<?php 

require_once("Java.inc");
require_once("lib/aspose.pdf.php");

use com\aspose\pdf\License;
use com\aspose\pdf\Document;
use com\aspose\pdf\TextFragment;
use com\aspose\pdf\BuildVersionInfo;

//uncomment block for licence initialization or use library in evaluation mode
//$license = new License();
//$license->setLicense("Aspose.PDF.PHPviaJava.lic");

$buildVersionInfo = new BuildVersionInfo();
$assemblyVersion = $buildVersionInfo->ASSEMBLY_VERSION;

echo $assemblyVersion; 
echo "\r\n";

$document = new Document();

$pages = $document->getPages();

$page = $pages->add();

$text = new TextFragment();
$text->setText("Some text");
$page->getParagraphs()->add($text);
$document->save("result.pdf");


?>