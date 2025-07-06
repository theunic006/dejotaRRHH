<?php

use \setasign\Fpdi\Fpdi;

require 'fpdf/fpdf.php';
require 'fpdi/src/autoload.php';

$files = array("CARTA.pdf","certificado.pdf","CONSTANCIA.pdf");

$pdf = new Fpdi();

foreach($files as $file){
    $pageCount = $pdf->setSourceFile($file);
    for($pagNo=1; $pagNo<=$pageCount; $pagNo++){
        $template=$pdf->importPage($pagNo);
        $size = $pdf->getTemplateSize($template);
        $pdf->AddPage($size['orientation'], $size);
        $pdf->useTemplate($template);
    }
}
$pdf->Output("F", "nuevo_pdf.pdf");