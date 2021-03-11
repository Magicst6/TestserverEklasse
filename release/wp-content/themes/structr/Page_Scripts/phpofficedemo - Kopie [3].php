<?php

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

require 'vendor/autoload.php';
$phpWord = new PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
$section->addText('Hello World1');$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('MyDocument.docx');

$wordPdf='MyDocument.docx';

$pdfWriter = PhpOffice\PhpWord\IOFactory::createWriter($wordPdf , 'PDF');    
$pdfWriter->save("test2.pdf");
unlink($wordPdf);