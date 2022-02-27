<?php

namespace Class;

class PremiumPDF implements PDFDownloader {
    public function __construct() {
        echo 'Premium PDF';
    }
    public function downloadPDF(?int $size = null) : string {
        return 'telechargement fichier PDF Premium';
    }

}