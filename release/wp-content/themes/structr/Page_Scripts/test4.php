<? // Require composer autoloder.
require __DIR__.'/vendor/autoload.php';
 


         \PhpOffice\PhpWord\Settings::setPdfRendererPath('../../vendor/dompdf/dompdf');
\PhpOffice\PhpWord\Settings::setPdfRendererName('DOMPDF');
$filepath="MyDocument.docx";
//Load temp file
$phpWord = \PhpOffice\PhpWord\IOFactory::load($filepath); 

//Save it
$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord , 'PDF');
$xmlWriter->save('result.pdf');  

