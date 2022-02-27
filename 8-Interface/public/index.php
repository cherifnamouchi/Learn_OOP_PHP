<?php

require '../vendor/autoload.php';

use Class\BasicPDF;
use Class\PremiumPDF;
use Class\PDFDownloadService;

$basicPDF = new BasicPDF();
$premiumPDF = new PremiumPDF();
/* var_dump($basicPDF->downloadPDF()); 
var_dump($basicPDF->downloadHTML()); 
var_dump($basicPDF->downloadJSON());  */

#var_dump($basicPDF->downloadPDF()); 
$pdfDownloaderService = new PDFDownloadService();
$pdfDownloaderService->downloadPDF($basicPDF);
$pdfDownloaderService->downloadPDF($premiumPDF);