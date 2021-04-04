<? // Require composer autoloder.
require __DIR__.'/vendor/autoload.php';
 


$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('ZeugnisTemplate.docx');
 
$templateProcessor->setValue('klasse', 'testklasse');
//$templateProcessor->setValue('name', 'John Doe');
//$templateProcessor->setValue(
  //  ['city', 'street'],
   // ['Sunnydale, 54321 Wisconsin', '123 International Lane']);
 
$templateProcessor->saveAs('MyWordFile.docx');