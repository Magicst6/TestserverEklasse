<?php
require_once("setasign/fpdf/fpdf.php");
require_once("setasign/fpdi/src/autoload.php");
use setasign\Fpdi\Fpdi;


class ConcatPdf extends Fpdi
{
    public $files = array();

    public function setFiles($files)
    {
        $this->files = $files;
    }

    public function concat()
    {
        foreach($this->files AS $file) {
            $pageCount = $this->setSourceFile($file);
            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $pageId = $this->ImportPage($pageNo);
                $s = $this->getTemplatesize($pageId);
                $this->AddPage($s['orientation'], $s);
                $this->useImportedPage($pageId);
            }
        }
    }
}

$pdf = new ConcatPdf();

$pdf->setFiles(array('setasign/fpdi/tests/_files/pdfs/Boombastic-Box.pdf', 'setasign/fpdi/tests/_files/pdfs/Fantastic-Speaker.pdf'));
$pdf->concat();
$pdf->AddPage();
$pdf->Image('setasign/fpdi/tests/_files/images/jpeg.jpg');
$pdf->Output('I', 'concat.pdf');