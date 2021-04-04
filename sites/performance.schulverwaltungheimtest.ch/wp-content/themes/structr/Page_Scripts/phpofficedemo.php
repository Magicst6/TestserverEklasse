<?
require __DIR__.'/vendor/autoload.php';
/*
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
Settings::setPdfRendererPath('vendor/dompdf/dompdf');

$phpWord = IOFactory::load('CV.docx', 'Word2007');
$phpWord->save('cv.pdf', 'PDF');
*/

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', '789ad8f9-1366-448e-aec6-ca90b7f4c31a');
$apiInstance = new Swagger\Client\Api\ConvertDocumentApi(
    
    
    new GuzzleHttp\Client(),
    $config
);
$input_file = "MyDocument.docx"; // \SplFileObject | Input file to perform the operation on.
try {
    $result = $apiInstance->convertDocumentDocxToPdf($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDocumentApi->convertDocumentDocxToPdf: ', $e->getMessage(), PHP_EOL;
}
?>