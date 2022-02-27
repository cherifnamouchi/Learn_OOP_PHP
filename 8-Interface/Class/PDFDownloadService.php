<?php

namespace Class;

use Class\BasicPDF;

class PDFDownloadService {

    public function downloadPDF(PDFDownloader $basicPDF) : string {
        return $basicPDF->downloadPDF();
    }
}